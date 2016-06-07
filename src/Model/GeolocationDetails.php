<?php

namespace NRM\SimplyRetsClient\Model;

/**
 * Geolocation details model
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class GeolocationDetails
{
    protected $county;
    protected $latitude;
    protected $longitude;
    protected $area;
    protected $directions;

    public function getCounty()
    {
        return $this->county;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function getDirections()
    {
        return $this->directions;
    }

    /**
     * Set the value of Geolocation details model
     *
     * @param mixed county
     *
     * @return self
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Set the value of Latitude
     *
     * @param mixed latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Set the value of Longitude
     *
     * @param mixed longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Set the value of Area
     *
     * @param mixed area
     *
     * @return self
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Set the value of Directions
     *
     * @param mixed directions
     *
     * @return self
     */
    public function setDirections($directions)
    {
        $this->directions = $directions;

        return $this;
    }

}
