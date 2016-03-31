<?php

class DefinitionTests extends ClientTestCase
{
    private $stagedClient;

    public function setUp()
    {
        $this->stagedClient = $this->createClient();
    }

    public function tearDown()
    {
        unset($this->stagedClient);
    }

    public function testDefinitionResponses()
    {
        $client = $this->stagedClient;

        // First call is a mocked success.
        $this->assertInstanceOf('NRM\SimplyRetsClient\Model\Definition', $client->getDefinition());
    }

    public function testDefinitionBadRequestResponse()
    {
        $client = $this->stagedClient;

        $this->markTestSkipped('We have to handle exceptions with a real response');
    }

    public function getConfig()
    {
        $definitionJson = file_get_contents(__DIR__.'/definition.json');

        return array(
            'handler' => $this->mockHandler(
                $this->mockResponse(200, array(), $definitionJson),
                $this->mockRequestException('Bad Request', 400, array(), 'Get body from API')
            )
        );
    }
}
