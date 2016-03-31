<?php

use NRM\SimplyRetsClient\Model\Definition;

class DefinitionTests extends ClientTestCase
{
    public function testDefinitionStagedResponses()
    {
        $client = $this->createClient($this->getStagedClientConfig());

        // First call is a mocked success.
        $this->assertInstanceOf('NRM\SimplyRetsClient\Model\Definition', $client->getDefinition());

        // Second is a forced Bad Request exception
        $this->assertNull($client->getDefinition());
    }

    public function testDefinitionReturnedWithBadCredentials()
    {
        $json = $this->getData('definition-bad-auth');
        $client = $this->createDefinitionClient(false);

        $this->assertNull($client->getDefinition());
    }

    public function testDefinitionModelConstruction()
    {
        $definition = new Definition();

        $this->assertInternalType('array', $definition->getVendors());
        $this->assertInternalType('array', $definition->getUpdates());
        $this->assertInternalType('array', $definition->getEndpoints());
        $this->assertInternalType('array', $definition->getAccepts());
    }

    public function testDefinitionModelDeserialization()
    {
        $client = $this->createDefinitionClient();
        $definition = $client->getDefinition();

        $this->assertInstanceOf('DateTime', $definition->getExpiresAt());
        $this->assertInternalType('array', $definition->getVendors());
        $this->assertInternalType('array', $definition->getUpdates());
        $this->assertInternalType('array', $definition->getEndpoints());
        $this->assertInternalType('array', $definition->getAccepts());

        // Specifically check test data accuracy
        $formattedDate = $definition->getExpiresAt()->format('Y-m-d\TH:i:s.u\Z');
        $formattedDate = str_replace('000', '', $formattedDate); // API vs PHP inconsistency we need to account for
        $this->assertEquals('2016-04-02T15:27:33.664Z', $formattedDate);
        $this->assertCount(1, $definition->getEndpoints());
        $this->assertCount(2, $definition->getAccepts());
    }

    private function createDefinitionClient($authSuccess = true)
    {
        return $this->createClient(array(
            'handler' => $this->mockHandler(
                $this->mockResponse(200, array(), $this->getData($authSuccess ? 'definition' : 'definition-bad-auth'))
            )
        ));
    }

    private function getStagedClientConfig()
    {
        $goodJson = $this->getData('definition');

        return array(
            'handler' => $this->mockHandler(
                $this->mockResponse(200, array(), $goodJson),
                $this->mockException('Bad Request', 400, array(), 'Get body from API')
            )
        );
    }
}
