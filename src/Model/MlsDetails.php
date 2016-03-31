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
}
