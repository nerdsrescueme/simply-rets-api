<?php

namespace NRM\SimplyRetsClient;

/**
 * Properties parameter set interface
 *
 * @todo Add features from API.
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
interface PropertiesParameterSetInterface extends ParameterSetInterface
{
    /**
     * Listing statuses
     */
    const STATUS_NONE = null;
    const STATUS_ACTIVE = 'Active';
    const STATUS_PENDING = 'Pending';
    const STATUS_CLOSED = 'Closed';
    const STATUS_ACTIVE_UNDER_CONTRACT = 'ActiveUnderContract';
    const STATUS_HOLD = 'Hold';
    const STATUS_WITHDRAWN = 'Withdrawn';
    const STATUS_EXPIRED = 'Expired';
    const STATUS_INCOMPLETE = 'Incomplete';
    const STATUS_COMING_SOON = 'ComingSoon';

    /**
     * Listing types
     */
    const TYPE_NONE = null;
    const TYPE_RESIDENTIAL = 'residential';
    const TYPE_RENTAL = 'rental';
    const TYPE_MULTIFAMILY = 'multifamily';
    const TYPE_CONDOMINIUM = 'condomimium';
    const TYPE_COMMERCIAL = 'commercial';
    const TYPE_LAND = 'land';

    /**
     * Listing extra fields
     */
    const EXTRA_NONE = null;
    const EXTRA_ASSOCIATION = 'association';
    const EXTRA_AGREEMENT = 'agreement';
    const EXTRA_GARAGE_SPACES = 'garageSpaces';
    const EXTRA_MAINTENANCE_EXPENSE = 'maintenanceExpense';
    const EXTRA_PARKING = 'parking';
    const EXTRA_POOL = 'pool';
    const EXTRA_ROOMS = 'rooms';
    const EXTRA_TAX_YEAR = 'taxYear';
    const EXTRA_TAX_ANNUAL_AMOUNT = 'taxAnnualAmount';

    /**
     * Listing sort criteria
     */
    const SORT_NONE = null;
    const SORT_LIST_PRICE_ASC = 'listprice';
    const SORT_LIST_PRICE_DESC = '-listprice';
    const SORT_LIST_DATE_ASC = 'listdate';
    const SORT_LIST_DATE_DESC = '-listdate';
    const SORT_BEDS_ASC = 'beds';
    const SORT_BEDS_DESC = '-beds';
    const SORT_BATHS_ASC = 'baths';
    const SORT_BATHS_DESC = '-baths';

    /**
     * Set query search term
     *
     * Searches the following fields:
     *
     * - listingId
     * - street number
     * - street name
     * - mls area (major)
     * - city
     * - subdivision name
     * - postal code
     *
     * @param string $query
     * @return self
     */
    public function setQuery($query);

    /**
     * Get query search term
     *
     * @return string|null
     */
    public function getQuery();

    /**
     * Add a listing status
     *
     * @param string $status
     * @return self
     */
    public function addStatus($status);

    /**
     * Get listing statuses
     *
     * @return array|null
     */
    public function getStatuses();

    /**
     * Add a listing types
     *
     * @param string $type
     * @return self
     */
    public function addType($type);

    /**
     * Get listing types
     *
     * @return array|null
     */
    public function getTypes();

    /**
     * Set agent id
     *
     * @param mixed $agentId
     * @return self
     */
    public function setAgentId($agentId);

    /**
     * Get agent id
     *
     * @return mixed|null
     */
    public function getAgentId();

    /**
     * Add a listing broker
     *
     * @param string $broker
     * @return self
     */
    public function addBroker($broker);

    /**
     * Get listing brokers
     *
     * @return array
     */
    public function getBrokers();

    /**
     * Set mimimum listing price
     *
     * @param integer $minPrice
     * @return self
     */
    public function setMinPrice($minPrice);

    /**
     * Get mimimum listing price
     *
     * @return integer|null
     */
    public function getMinPrice();

    /**
     * Set maximum listing price
     *
     * @param integer $maxPrice
     * @return self
     */
    public function setMaxPrice($maxPrice);

    /**
     * Get maximum listing price
     *
     * @return integer|null
     */
    public function getMaxPrice();

    /**
     * Set mimimum listing area
     *
     * @param integer $minArea
     * @return self
     */
    public function setMinArea($minArea);

    /**
     * Get minimum listing area
     *
     * @return integer|null
     */
    public function getMinArea();

    /**
     * Set maximum listing area
     *
     * @param integer $maxArea
     * @return self
     */
    public function setMaxArea($maxArea);

    /**
     * Get maximum listing area
     *
     * @return integer|null
     */
    public function getMaxArea();

    /**
     * Set mimimum number of bathrooms
     *
     * @param integer $minBaths
     * @return self
     */
    public function setMinBaths($minBaths);

    /**
     * Get minimum number of bathrooms
     *
     * @return integer|null
     */
    public function getMinBaths();

    /**
     * Set maximum number of bathrooms
     *
     * @param integer $maxBaths
     * @return self
     */
    public function setMaxBaths($maxBaths);

    /**
     * Get maximum number of bathrooms
     *
     * @return integer|null
     */
    public function getMaxBaths();

    /**
     * Set mimimum number of bedrooms
     *
     * @param integer $minBeds
     * @return self
     */
    public function setMinBeds($minBeds);

    /**
     * Get minimum number of bedrooms
     *
     * @return integer|null
     */
    public function getMinBeds();

    /**
     * Set maximum number of bedrooms
     *
     * @param integer $maxBeds
     * @return self
     */
    public function setMaxBeds($maxBeds);

    /**
     * Set maximum number of bedrooms
     *
     * @return integer|null
     */
    public function getMaxBeds();

    /**
     * Set maximum number of days on the market
     *
     * @param integer $maxDaysOnMarket
     * @return self
     */
    public function setMaxDaysOnMarket($maxDaysOnMarket);

    /**
     * Get maximum number of days on the market
     *
     * @return integer|null
     */
    public function getMaxDaysOnMarket();

    /**
     * Set minimum year built
     *
     * @param integer $minYearBuilt
     * @return self
     */
    public function setMinYearBuilt($minYearBuilt);

    /**
     * Get minimum year built
     *
     * @return integer|null
     */
    public function getMinYearBuilt();

    /**
     * Set listing limit
     *
     * @param integer $limit
     * @return self
     */
    public function setLimit($limit);

    /**
     * Get listing limit
     *
     * @return integer|null
     */
    public function getLimit();

    /**
     * Set listing offset
     *
     * @param integer $offset
     * @return self
     */
    public function setOffset($offset);

    /**
     * Get listing offset
     *
     * @return integer|null
     */
    public function getOffset();

    /**
     * Set MLS vendor
     *
     * @link https://api.simplyrets.com OPTIONS request to get vendor ids.
     * @param string $vendor
     * @return self
     */
    public function setVendor($vendor);

    /**
     * Get MLS vendor
     *
     * @return string|null
     */
    public function getVendor();

    /**
     * Add a postal code
     *
     * @param integer|string $postalCode
     * @return self
     */
    public function addPostalCode($postalCode);

    /**
     * Get postal codes
     *
     * @return array
     */
    public function getPostalCodes();

    /**
     * Set waterfront listings only
     *
     * @param boolean $waterfrontOnly
     * @return self
     */
    public function setWaterfrontOnly($waterfrontOnly);

    /**
     * Get waterfront listings only
     *
     * @return boolean
     */
    public function isWaterfrontOnly();

    /**
     * Set point coordinates
     *
     * The following diagram shows what points A & B are
     *
     * <code>
     *     A ---------+
     *     |          |
     *     +----------B
     * </code>
     *
     * @param float $latA
     * @param float $lonA
     * @param float $latB
     * @param float $lonB
     * @return array
     */
    public function setPointCoordinates($latA, $lonA, $latB, $lonB);

    /**
     * Get point coordinates
     *
     * @return array
     */
    public function getPointCoordinates();

    /**
     * Add extra field
     *
     * @param string $extraField
     * @return self
     */
    public function addExtraField($extraField);

    /**
     * Get extra fields
     *
     * @return array
     */
    public function getExtraFields();

    /**
     * Set listing sort
     *
     * @param string $sortBy
     * @return self
     */
    public function setSortBy($sortBy);

    /**
     * Get listing sory
     *
     * @return string|null
     */
    public function getSortBy();
}
