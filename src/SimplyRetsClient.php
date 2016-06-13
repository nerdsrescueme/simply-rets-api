<?php

namespace NRM\SimplyRetsClient;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;
use JMS\Serializer\SerializerBuilder;
use NRM\SimplyRetsClient\Model\Listing;

/**
 * Simply RETS API client
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class SimplyRetsClient
{
    /**
     * Guzzle HTTP client
     *
     * @var GuzzleClient
     */
    private $client;

    /**
     * Are we in debug mode?
     *
     * @var boolean
     */
    private $debug;

    /**
     * JMS Serializer
     *
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * JMS Serializer cache directory
     *
     * @var string
     */
    private $serializerCacheDirectory;


    /**
     * Constructor
     *
     * @param string $username
     * @param string $password
     * @param boolean $debug
     * @param array $config
     */
    public function __construct(
        $username,
        $password,
        array $config = array(),
        $serializerCacheDirectory = null,
        $debug = false
    ) {
        $config = array_merge_recursive($this->getDefaultConfig(), $config);
        $config['auth'] = array($username, $password);

        (count($config['base_uri']) > 1) ? unset($config['base_uri'][1]) : null;

        if ($debug) {
            $config['debug'] = true;
        }

        $this->debug = $debug;
        $this->serializerCacheDirectory = $serializerCacheDirectory ?: sys_get_temp_dir();
        $this->client = new GuzzleClient($config);
    }

    /**
     * Get base Guzzle client
     *
     * @return ClientInterface
     */
    public function getGuzzleClient()
    {
        return $this->client;
    }

    /**
     * Get definition object if it is not expired
     *
     * @throws GuzzleException when request fails for any reason
     * @return Definition|null
     */
    public function getDefinition()
    {
        try {
            $response = $this->client->request('OPTIONS', '/');
            $serializer = $this->getSerializer();
            $definition = $serializer->deserialize($response->getBody(), 'NRM\SimplyRetsClient\Model\Definition', 'json');

            return $definition->getExpiresAt() ? $definition : null;
        } catch (GuzzleException $e) {}
    }

    /**
     * Get raw definition JSON
     *
     * @throws GuzzleException when request fails for any reason
     * @return string
     */
    public function getRawDefinition()
    {
        try {
            $response = $this->client->request('OPTIONS', '/');

            return $response;
        } catch (GuzzleException $e) {}
    }

    /**
     * Get property object
     *
     * @throws GuzzleException when request fails for any reason
     *
     * @param string|integer $mlsId
     * @param PropertyParameterSetInterface|null $parameters
     * @return Listing
     */
    public function getProperty($mlsId, PropertyParameterSetInterface $parameters = null)
    {
        list($url, $opts) = $this->prepareRequest(sprintf('/properties/%s', (string) $mlsId), $parameters);

        $response = $this->client->request('GET', $url, $opts);
        $serializer = $this->getSerializer();

        return $serializer->deserialize($response->getBody(), 'NRM\SimplyRetsClient\Model\Listing', 'json');
    }

    /**
     * Get raw property JSON string
     *
     * @throws GuzzleException when request fails for any reason
     *
     * @param string|integer $mlsId
     * @param PropertyParameterSetInterface|null $parameters
     * @return string
     */
    public function getRawProperty($mlsId, PropertyParameterSetInterface $parameters = null)
    {
        list($url, $opts) = $this->prepareRequest(sprintf('/properties/%s', (string) $mlsId), $parameters);
        $response = $this->client->request('GET', $url, $opts);

        return $response;
    }

    /**
     * Get property object array
     *
     * @throws GuzzleException when request fails for any reason
     *
     * @param PropertiesParameterSetInterface|null $parameters
     * @return Listing[]
     */
    public function getProperties(PropertiesParameterSetInterface $parameters = null)
    {
        list($url, $opts) = $this->prepareRequest('/properties', $parameters);

        $response = $this->client->request('GET', $url, $opts);
        $serializer = $this->getSerializer();

        return $serializer->deserialize($response->getBody(), 'array<NRM\SimplyRetsClient\Model\Listing>', 'json');
    }

    /**
     * Get raw properties JSON string
     *
     * @throws GuzzleException when request fails for any reason
     *
     * @param PropertiesParameterSetInterface|null $parameters
     * @return string
     */
    public function getRawProperties(PropertiesParameterSetInterface $parameters = null)
    {
        list($url, $opts) = $this->prepareRequest('/properties', $parameters);
        $response = $this->client->request('GET', $url, $opts);

        return $response;
    }

    /**
     * Get or create JMS serializer
     *
     * @return SerializerInterface
     */
    public function getSerializer()
    {
        if (null === $this->serializer) {
            $serializer = SerializerBuilder::create()
                ->addMetadataDir(realpath(__DIR__.'/../metadata'), 'NRM\\SimplyRetsClient\\Model')
                ->setDebug($this->debug);

            // Only cache when not debugging.
            if (!$this->debug) {
                $serializer->setCacheDir($this->serializerCacheDirectory);
            }

            $this->serializer = $serializer->build();
        }

        return $this->serializer;
    }

    /**
     * Prepare request for sending
     *
     * Prepares the url and option arrays in a common way so that we don't have
     * to do it over and over.
     *
     * @param string $url
     * @param ParameterSetInterface|null $parameters
     *
     * @return array
     */
    protected function prepareRequest($url, ParameterSetInterface $parameters = null)
    {
        $opts = array();

        if ($parameters instanceof ParameterSetInterface) {
            $url .= $parameters->toQueryString();
        }

        return array($url, $opts);
    }

    /**
     * Get default client configuration
     *
     * @return array
     */
    protected function getDefaultConfig()
    {
        return array(
            'base_uri' => 'https://api.simplyrets.com',
            'connect_timeout' => 2,
            'timeout' => 4,
            'headers' => array(
                'Accept' => 'application/json'
            )
        );
    }
}
