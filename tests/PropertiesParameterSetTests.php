<?php

use NRM\SimplyRetsClient\PropertiesParameterSet;

class PropertiesParameterSetTests extends ClientTestCase
{
    public function testSetup()
    {
        $params = PropertiesParameterSet::create();

        $this->assertInstanceOf('NRM\SimplyRetsClient\ParameterSetInterface', $params);
        $this->assertInstanceOf('NRM\SimplyRetsClient\PropertyParameterSetInterface', $params);
        $this->assertInstanceOf('NRM\SimplyRetsClient\PropertiesParameterSetInterface', $params);

        $this->assertInternalType('array', $params->getStatuses());
        $this->assertInternalType('array', $params->getTypes());
        $this->assertInternalType('array', $params->getBrokers());
        $this->assertInternalType('array', $params->getPostalCodes());
        $this->assertFalse($params->isWaterfrontOnly());
    }

    public function testQuery()
    {
        $term = 'My Query';
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('q', $params->toArray());

        $params->setQuery($term);
        $this->assertSame($term, $params->getQuery());
        $this->assertArrayHasKey('q', $params->toArray());
        $this->assertSame('?q='.$term, $params->toQueryString());
    }

    public function testStatuses()
    {
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('status', $params->toArray());

        $params->addStatus(PropertiesParameterSet::STATUS_HOLD);
        $params->addStatus(PropertiesParameterSet::STATUS_CLOSED);
        $this->assertCount(2, $params->getStatuses());

        $this->assertArrayHasKey('status', $params->toArray());
        $this->assertSame('?status=Hold&status=Closed', $params->toQueryString());

        $params->addStatus(PropertiesParameterSet::STATUS_NONE);
        $this->assertCount(0, $params->getStatuses());
    }

    public function testTypes()
    {
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('type', $params->toArray());

        $params->addType(PropertiesParameterSet::TYPE_LAND);
        $params->addType(PropertiesParameterSet::TYPE_RENTAL);
        $this->assertCount(2, $params->getTypes());

        $this->assertArrayHasKey('type', $params->toArray());
        $this->assertSame('?type=land&type=rental', $params->toQueryString());

        $params->addType(PropertiesParameterSet::TYPE_NONE);
        $this->assertCount(0, $params->getTypes());
    }

    public function testAgentId()
    {
        $id = 123;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('agent', $params->toArray());

        $params->setAgentId($id);
        $this->assertSame($id, $params->getAgentId());
        $this->assertArrayHasKey('agent', $params->toArray());
    }

    public function testBrokers()
    {
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('broker', $params->toArray());

        $params->addBroker('Broker #1');
        $params->addBroker('Broker #2');
        $this->assertCount(2, $params->getBrokers());

        $this->assertArrayHasKey('broker', $params->toArray());
        $this->assertSame('?broker=Broker #1&broker=Broker #2', $params->toQueryString());
    }

    public function testMinPrice()
    {
        $price = 150000;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('minprice', $params->toArray());

        $params->setMinPrice($price);
        $this->assertSame($price, $params->getMinPrice());
        $this->assertArrayHasKey('minprice', $params->toArray());
    }

    public function testMaxPrice()
    {
        $price = 150000;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('maxprice', $params->toArray());

        $params->setMaxPrice($price);
        $this->assertSame($price, $params->getMaxPrice());
        $this->assertArrayHasKey('maxprice', $params->toArray());
    }

    public function testMinArea()
    {
        $area = 1000;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('minarea', $params->toArray());

        $params->setMinArea($area);
        $this->assertSame($area, $params->getMinArea());
        $this->assertArrayHasKey('minarea', $params->toArray());
    }

    public function testMaxArea()
    {
        $area = 1000;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('maxarea', $params->toArray());

        $params->setMaxArea($area);
        $this->assertSame($area, $params->getMaxArea());
        $this->assertArrayHasKey('maxarea', $params->toArray());
    }

    public function testMinBaths()
    {
        $baths = 4;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('minbaths', $params->toArray());

        $params->setMinBaths($baths);
        $this->assertSame($baths, $params->getMinBaths());
        $this->assertArrayHasKey('minbaths', $params->toArray());
    }

    public function testMaxBaths()
    {
        $baths = 4;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('maxbaths', $params->toArray());

        $params->setMaxBaths($baths);
        $this->assertSame($baths, $params->getMaxBaths());
        $this->assertArrayHasKey('maxbaths', $params->toArray());
    }

    public function testMinBeds()
    {
        $beds = 6;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('minbeds', $params->toArray());

        $params->setMinBeds($beds);
        $this->assertSame($beds, $params->getMinBeds());
        $this->assertArrayHasKey('minbeds', $params->toArray());
    }

    public function testMaxBeds()
    {
        $beds = 6;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('maxbeds', $params->toArray());

        $params->setMaxBeds($beds);
        $this->assertSame($beds, $params->getMaxBeds());
        $this->assertArrayHasKey('maxbeds', $params->toArray());
    }

    public function testMaxDaysOnMarket()
    {
        $dom = 120;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('maxdom', $params->toArray());

        $params->setMaxDaysOnMarket($dom);
        $this->assertSame($dom, $params->getMaxDaysOnMarket());
        $this->assertArrayHasKey('maxdom', $params->toArray());
    }

    public function testMinYearBuilt()
    {
        $built = 1970;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('minyear', $params->toArray());

        $params->setMinYearBuilt($built);
        $this->assertSame($built, $params->getMinYearBuilt());
        $this->assertArrayHasKey('minyear', $params->toArray());
    }

    public function testLimit()
    {
        $limit = 20;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('limit', $params->toArray());

        $params->setLimit($limit);
        $this->assertSame($limit, $params->getLimit());
        $this->assertArrayHasKey('limit', $params->toArray());
    }

    public function testOffset()
    {
        $offset = 20;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('offset', $params->toArray());

        $params->setOffset($offset);
        $this->assertSame($offset, $params->getOffset());
        $this->assertArrayHasKey('offset', $params->toArray());
    }

    public function testVendor()
    {
        $vendor = 'mymls';
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('vendor', $params->toArray());

        $params->setVendor($vendor);
        $this->assertSame($vendor, $params->getVendor());
        $this->assertArrayHasKey('vendor', $params->toArray());
    }

    public function testPostalCodes()
    {
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('postalCode', $params->toArray());

        $params->addPostalCode('11111');
        $params->addPostalCode('22222');
        $this->assertCount(2, $params->getPostalCodes());

        $this->assertArrayHasKey('postalCode', $params->toArray());
        $this->assertSame('?postalCode=11111&postalCode=22222', $params->toQueryString());
    }

    public function testWaterfrontOnly()
    {
        $waterfrontOnly = true;
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('water', $params->toArray());

        $params->setWaterfrontOnly($waterfrontOnly);
        $this->assertSame($waterfrontOnly, $params->isWaterfrontOnly());
        $this->assertArrayHasKey('water', $params->toArray());
    }

    public function testPointCoordinates()
    {
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('points', $params->toArray());

        $params->setPointCoordinates(1, 1, 1, 1);
        $this->assertCount(4, $params->getPointCoordinates());
        $this->assertArrayHasKey('points', $params->toArray());
    }

    public function testPointCoordinatesCoherence()
    {
        $latA = 1;
        $lonA = 2;
        $latB = 3;
        $lonB = 4;

        $params = PropertiesParameterSet::create();
        $params->setPointCoordinates($latA, $lonA, $latB, $lonB);

        $expected = sprintf(
            '?points=%d,%d&points=%d,%d&points=%d,%d&points=%d,%d',
            $latA,
            $lonA,
            $latB,
            $lonA,
            $latB,
            $lonB,
            $latA,
            $lonB
        );

        $this->assertSame($expected, $params->toQueryString());
    }

    public function testSoryBy()
    {
        $params = PropertiesParameterSet::create();

        $this->assertArrayNotHasKey('sort', $params->toArray());

        $params->setSortBy(PropertiesParameterSet::SORT_BEDS_ASC);
        $this->assertArrayHasKey('sort', $params->toArray());

        $params->setSortBy(PropertiesParameterSet::SORT_NONE);
        $this->assertNull($params->getSortBy());
    }

    public function testToQueryStringIsEmptyWithoutParams()
    {
        $this->assertEmpty(PropertiesParameterSet::create()->toQueryString());
    }
}
