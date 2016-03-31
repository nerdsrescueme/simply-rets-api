<?php

use NRM\SimplyRetsClient\PropertyParameterSet;

class PropertyParameterSetTests extends ClientTestCase
{
    public function testSetup()
    {
        $params = $this->createParameterSet();

        $this->assertInstanceOf('NRM\SimplyRetsClient\ParameterSetInterface', $params);
        $this->assertInstanceOf('NRM\SimplyRetsClient\PropertyParameterSetInterface', $params);

        $this->assertInternalType('array', $params->getExtraFields());
    }

    public function testAddingExtraFields()
    {
        $params = $this->createParameterSet();
        $params->addExtraField(PropertyParameterSet::EXTRA_POOL);

        $this->assertCount(1, $params->getExtraFields());
    }

    public function testAddingSpecialNoneValueClearsFields()
    {
        $params = $this->createParameterSet(true);
        $params->addExtraField(PropertyParameterSet::EXTRA_NONE);

        $this->assertCount(0, $params->getExtraFields());
    }

    public function testToArrayOutputWithoutExtraFields()
    {
        $params = $this->createParameterSet();

        $this->assertArrayNotHasKey('include', $params->toArray());
    }

    public function testToArrayOutputWithExtraFields()
    {
        $params = $this->createParameterSet(true);

        $this->assertArrayHasKey('include', $params->toArray());
        $this->assertCount(2, $params->toArray()['include']);
    }

    public function testToQueryStringIsPredictableEnough()
    {
        $params = $this->createParameterSet(true);

        $this->assertSame('?include=association&include=pool', $params->toQueryString());
    }

    public function testToQueryStringIsEmptyWithoutParams()
    {
        $params = $this->createParameterSet();

        $this->assertEmpty($params->toQueryString());
    }

    protected function createParameterSet($fill = false)
    {
        $params = PropertyParameterSet::create();

        if ($fill) {
            $params->addExtraField(PropertyParameterSet::EXTRA_ASSOCIATION);
            $params->addExtraField(PropertyParameterSet::EXTRA_POOL);
        }

        return $params;
    }
}
