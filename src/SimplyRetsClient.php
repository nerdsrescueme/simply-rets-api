<?php

namespace NRM\SimplyRetsClient;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\SerializerInterface;
use JMS\Serializer\SerializerBuilder;

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

        if ($debug) {
            $config['debug'] = true;
        }

        $this->debug = $debug;
        $this->serializerCacheDirectory = $serializerCacheDirectory ?: sys_get_temp_dir();
        $this->client = new GuzzleClient($config);
    }

    /**
     * Get definition data from the base API endpoint
     */
    public function getDefinition()
    {
        try {
            $response = $this->client->request('OPTIONS', '/');
            $serializer = $this->getSerializer();
            $definition = $serializer->deserialize($response->getBody(), 'NRM\SimplyRetsClient\Model\Definition', 'json');

            return $definition->getExpiresAt() ? $definition : null;
        } catch (GuzzleException $exception) {}

        return;
    }

    public function getProperty($mlsId, PropertyParameterSetInterface $parameters = null)
    {
        list($url, $opts) = $this->prepareRequest(sprintf('/properties/%s', (string) $mlsId));

        try {
            $response = $this->client->request('GET', $url, $opts);
            $serializer = $this->getSerializer();

            return $serializer->deserialize($response->getBody(), 'NRM\SimplyRetsClient\Model\Listing', 'json');
        } catch (GuzzleException $exception) {
            return json_decode($exception->getResponse()->getBody());
        }
    }

    /**
     * Get properties
     *
     * @param PropertiesParameterSetInterface $parameters
     */
    public function getProperties(PropertiesParameterSetInterface $parameters = null)
    {
        list($url, $opts) = $this->prepareRequest('/properties', $parameters);

        try {
            //$response = $this->client->request('GET', $url, $opts);
            $serializer = $this->getSerializer();
            $json = file_get_contents(__DIR__.'/../properties.json');
            die($json);

            return $serializer->deserialize($json, 'array<NRM\SimplyRetsClient\Model\Listing>', 'json');
        } catch (GuzzleException $exception) {
            return json_decode($exception->getResponse()->getBody());
        }
    }

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
