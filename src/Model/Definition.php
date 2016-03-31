<?php

namespace NRM\SimplyRetsClient\Model;

use DateTime;

/**
 * Definition model
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class Definition
{
    /**
     * Definition expiry date
     *
     * @var DateTime
     */
    protected $expiresAt;

    /**
     * Vendors
     *
     * @var array
     */
    protected $vendors;

    /**
     * Updates
     *
     * @var array
     */
    protected $updates;

    /**
     * Endpoints
     *
     * @var array
     */
    protected $endpoints;

    /**
     * Accepts
     *
     * @var array
     */
    protected $accepts;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vendors = array();
        $this->updates = array();
        $this->endpoints = array();
        $this->accepts = array();
    }

    /**
     * Get expiry date
     *
     * @return DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Get vendors
     *
     * @return array
     */
    public function getVendors()
    {
        return $this->vendors;
    }

    /**
     * Get updates
     *
     * @return array
     */
    public function getUpdates()
    {
        return $this->updates;
    }

    /**
     * Get endpoints
     *
     * @return array
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * Get accepts
     *
     * @return array
     */
    public function getAccepts()
    {
        return $this->accepts;
    }
}
