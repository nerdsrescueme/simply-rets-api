<?php

namespace NRM\SimplyRetsClient\Model;

/**
 * Address model
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class Address
{
    protected $street;
    protected $city;
    protected $state;
    protected $country;
    protected $zip;
    protected $crossStreet;
    protected $streetName;
    protected $streetNumber;
    protected $unit;

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    public function getCrossStreet()
    {
        return $this->crossStreet;
    }

    public function setCrossStreet($crossStreet)
    {
        $this->crossStreet = $crossStreet;

        return $this;
    }

    public function getStreetName()
    {
        return $this->streetName;
    }

    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;

        return $this;
    }

    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

}
