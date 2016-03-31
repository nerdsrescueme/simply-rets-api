<?php

class SetupTests extends ClientTestCase
{
    public function testDefaultSetup()
    {
        $client = $this->createClient();

        $this->assertAttributeSame(false, 'debug', $client);
        $this->assertAttributeInstanceOf('GuzzleHttp\Client', 'client', $client);
        $this->assertAttributeSame(sys_get_temp_dir(), 'serializerCacheDirectory', $client);
    }

    public function testDebugSetup()
    {
        $client = $this->createClient(array(), null, true);

        $this->assertAttributeSame(true, 'debug', $client);
    }

    public function testCustomSerializerMetadataDirectory()
    {
        $client = $this->createClient(array(), __DIR__);

        $this->assertAttributeSame(__DIR__, 'serializerCacheDirectory', $client);
    }

    public function testLazySerializer()
    {
        $client = $this->createClient();

        $this->assertAttributeSame(null, 'serializer', $client);
        $this->assertInstanceOf('JMS\Serializer\SerializerInterface', $client->getSerializer());
    }
}
