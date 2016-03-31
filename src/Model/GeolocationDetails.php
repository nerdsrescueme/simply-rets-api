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
}
