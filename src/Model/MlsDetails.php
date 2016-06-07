<?php

namespace NRM\SimplyRetsClient\Model;

/**
 * MLS details model
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class MlsDetails
{
    protected $status;
    protected $area;
    protected $daysOnMarket;

    public function getStatus()
    {
        return $this->status;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function getDaysOnMarket()
    {
        return $this->daysOnMarket;
    }

    /**
     * Set the value of MLS details model
     *
     * @param mixed status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
     * Set the value of Days On Market
     *
     * @param mixed daysOnMarket
     *
     * @return self
     */
    public function setDaysOnMarket($daysOnMarket)
    {
        $this->daysOnMarket = $daysOnMarket;

        return $this;
    }

}
