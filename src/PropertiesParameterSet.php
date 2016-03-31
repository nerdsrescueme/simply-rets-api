<?php

namespace NRM\SimplyRetsClient;

/**
 * Properties parameter set
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class PropertiesParameterSet extends PropertyParameterSet implements PropertiesParameterSetInterface
{
    protected $query;
    protected $statuses = self::STATUS_NONE;
    protected $types = self::TYPE_NONE;
    protected $brokers = array();
    protected $minPrice;
    protected $maxPrice;
    protected $minArea;
    protected $maxArea;
    protected $minBaths;
    protected $maxBaths;
    protected $minBeds;
    protected $maxBeds;
    protected $maxDaysOnMarket;
    protected $minYearBuilt;
    protected $offset;
    protected $limit;
    protected $postalCodes = array();
    protected $waterfrontOnly = false;
    protected $pointCoordinates;
    protected $sortBy;

    /**
     * {@inheritdoc}
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * {@inheritdoc}
     */
    public function addStatus($status)
    {
        if (self::STATUS_NONE === $status) {
            return $this->clearStatuses();
        }

        if (!is_array($this->statuses)) {
            $this->statuses = array();
        }

        $this->statuses[] = $status;
        $this->statuses = array_unique($this->statuses);

        return $this;
    }

    /**
     * Clear statuses array
     *
     * @return self
     */
    protected function clearStatuses()
    {
        $this->statuses = self::STATUS_NONE;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStatuses()
    {
        return $this->statuses;
    }

    /**
     * {@inheritdoc}
     */
    public function addType($type)
    {
        if (self::TYPE_NONE === $type) {
            return $this->clearTypes();
        }

        if (!is_array($this->types)) {
            $this->types = array();
        }

        $this->types[] = $type;
        $this->types = array_unique($this->types);

        return $this;
    }

    /**
     * Clear types array
     *
     * @return self
     */
    protected function clearTypes()
    {
        $this->types = self::TYPE_NONE;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * {@inheritdoc}
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * {@inheritdoc}
     */
    public function addBroker($broker)
    {
        $this->brokers[] = $broker;
        $this->brokers = array_unique($this->brokers);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBrokers()
    {
        return $this->brokers;
    }

    /**
     * {@inheritdoc}
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = (int) $minPrice;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * {@inheritdoc}
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = (int) $maxPrice;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * {@inheritdoc}
     */
    public function setMinArea($minArea)
    {
        $this->minArea = (int) $minArea;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMinArea()
    {
        return $this->minArea;
    }

    /**
     * {@inheritdoc}
     */
    public function setMaxArea($maxArea)
    {
        $this->maxArea = (int) $maxArea;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxArea()
    {
        return $this->maxArea;
    }

    /**
     * {@inheritdoc}
     */
    public function setMinBaths($minBaths)
    {
        $this->minBaths = (int) $minBaths;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMinBaths()
    {
        return $this->minBaths;
    }

    /**
     * {@inheritdoc}
     */
    public function setMaxBaths($maxBaths)
    {
        $this->maxBaths = (int) $maxBaths;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxBaths()
    {
        return $this->maxBaths;
    }

    /**
     * {@inheritdoc}
     */
    public function setMinBeds($minBeds)
    {
        $this->minBeds = (int) $minBeds;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMinBeds()
    {
        return $this->minBeds;
    }

    /**
     * {@inheritdoc}
     */
    public function setMaxBeds($maxBeds)
    {
        $this->maxBeds = (int) $maxBeds;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxBeds()
    {
        return $this->maxBeds;
    }

    /**
     * {@inheritdoc}
     */
    public function setMaxDaysOnMarket($maxDaysOnMarket)
    {
        $this->maxDaysOnMarket = $maxDaysOnMarket;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxDaysOnMarket()
    {
        return $this->maxDaysOnMarket;
    }

    /**
     * {@inheritdoc}
     */
    public function setMinYearBuilt($minYearBuilt)
    {
        $this->minYearBuilt = $minYearBuilt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMinYearBuilt()
    {
        return $this->minYearBuilt;
    }

    /**
     * {@inheritdoc}
     */
    public function setLimit($limit)
    {
        $this->limit = (int) $limit;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * {@inheritdoc}
     */
    public function setOffset($offset)
    {
        $this->offset = (int) $offset;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * {@inheritdoc}
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * {@inheritdoc}
     */
    public function addPostalCode($postalCode)
    {
        $this->postalCodes[] = $postalCode;
        $this->postalCodes = array_unique($this->postalCodes);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostalCodes()
    {
        return $this->postalCodes;
    }

    /**
     * {@inheritdoc}
     */
    public function setWaterfrontOnly($waterfrontOnly)
    {
        $this->waterfrontOnly = (bool) $waterfrontOnly;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isWaterfrontOnly()
    {
        return $this->waterfrontOnly;
    }

    /**
     * {@inheritdoc}
     */
    public function setPointCoordinates($latA, $lonA, $latB, $lonB)
    {
        $this->pointCoordinates = func_get_args();

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPointCoordinates()
    {
        return $this->pointCoordinates;
    }

    /**
     * {@inheritdoc}
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $array = parent::toArray();

        if ($this->query) {
            $array['q'] = $this->query;
        }

        if (is_array($this->statuses) && !empty($this->statuses)) {
            $array['status'] = $this->statuses;
        }

        if (is_array($this->types) && !empty($this->types)) {
            $array['type'] = $this->types;
        }

        if ($this->agentId) {
            $array['agent'] = $this->agentId;
        }

        if (!empty($this->brokers)) {
            $array['broker'] = $this->brokers;
        }

        if (!empty($this->minPrice)) {
            $array['minprice'] = $this->minPrice;
        }

        if (!empty($this->maxPrice)) {
            $array['maxprice'] = $this->maxPrice;
        }

        if (!empty($this->minArea)) {
            $array['minarea'] = $this->minArea;
        }

        if (!empty($this->maxArea)) {
            $array['maxarea'] = $this->maxArea;
        }

        if (!empty($this->minBaths)) {
            $array['minbaths'] = $this->minBaths;
        }

        if (!empty($this->maxBaths)) {
            $array['maxbaths'] = $this->maxBaths;
        }

        if (!empty($this->minBeds)) {
            $array['minbeds'] = $this->minBeds;
        }

        if (!empty($this->maxBeds)) {
            $array['maxbeds'] = $this->maxBeds;
        }

        if (!empty($this->maxDaysOnMarket)) {
            $array['maxdom'] = $this->maxDaysOnMarket;
        }

        if (!empty($this->minYearBuilt)) {
            $array['minyear'] = $this->minYearBuilt;
        }

        if (!empty($this->limit)) {
            $array['limit'] = $this->limit;
        }

        if (!empty($this->offset)) {
            $array['offset'] = $this->offset;
        }

        if (!empty($this->vendor)) {
            $array['vendor'] = $this->vendor;
        }

        if (!empty($this->postalCodes)) {
            $array['postalCode'] = $this->postalCodes;
        }

        if (true === $this->waterfrontOnly) {
            $array['water'] = 'true';
        }

        if (is_array($this->pointCoordinates)) {
            $c = $this->pointCoordinates;
            $array['points'] = array(
                "{$c[0]},{$c[1]}",
                "{$c[2]},{$c[1]}",
                "{$c[2]},{$c[3]}",
                "{$c[0]},{$c[3]}",
            );
        }

        if (!empty($this->sortBy)) {
            $array['sort'] = $this->sortBy;
        }

        return $array;
    }
}
