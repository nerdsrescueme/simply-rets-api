<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use NRM\SimplyRetsClient\SimplyRetsClient;

abstract class ClientTestCase extends PHPUnit_Framework_TestCase
{
    /**
     * Create SimplyRETS client
     *
     * @param array $config
     * @param string|null $serializerCacheDirectory
     * @param boolean $debug
     * @return SimplyRetsCient
     */
    public function createClient(array $config = array(), $serializerCacheDirectory = null, $debug = false)
    {
        return new SimplyRetsClient(
            SIMPLYRETS_USERNAME,
            SIMPLYRETS_PASSWORD,
            $config,
            $serializerCacheDirectory,
            $debug
        );
    }

    protected function getData($file)
    {
        return file_get_contents(__DIR__.'/data/'. $file . '.json');
    }

    protected function mockHandler()
    {
        return new MockHandler(func_get_args());
    }

    protected function mockResponse($statusCode, array $headers = array(), $body = null)
    {
        return new Response($statusCode, $headers, $body);
    }

    protected function mockRequestException($message, $statusCode, array $headers = array(), $body = null)
    {
        return new RequestException(
            $message,
            new Request('GET', 'test'),
            new Response($statusCode, $headers, $body)
        );
    }

    protected function mockClientException($message, $statusCode, array $headers = array(), $body = null)
    {
        return new ClientException(
            $message,
            new Request('GET', 'test'),
            new Response($statusCode, $headers, $body)
        );
    }
}
