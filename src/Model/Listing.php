<?php

namespace NRM\SimplyRetsClient\Model;

use DateTime;

/**
 * Listing model
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class Listing
{
    protected $mlsId;
    protected $propertyDetails;
    protected $mlsDetails;
    protected $geolocationDetails;
    protected $terms;
    protected $showingInstructions;
    protected $leaseTerm;
    protected $disclaimer;
    protected $listDate;
    protected $agent;
    protected $modifiedAt;
    protected $schoolDetails;
    protected $photos;
    protected $listPrice;
    protected $leaseType;
    protected $privateRemarks;
    protected $remarks;

    public function __construct()
    {
        $this->photos = array();
    }

    public function getMlsId()
    {
        return $this->mlsId;
    }

    public function getPropertyDetails()
    {
        return $this->propertyDetails;
    }

    public function getMlsDetails()
    {
        return $this->mlsDetails;
    }

    public function getGeolocationDetails()
    {
        return $this->geolocationDetails;
    }

    public function getTerms()
    {
        return $this->terms;
    }

    public function getShowingInstructions()
    {
        return $this->showingInstructions;
    }

    public function getLeaseTerm()
    {
        return $this->leaseTerm;
    }

    public function getDisclaimer()
    {
        return $this->disclaimer;
    }

    public function getListDate()
    {
        return $this->listDate;
    }

    public function getAgent()
    {
        return $this->agent;
    }

    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    public function getSchoolDetails()
    {
        return $this->schoolDetails;
    }

    public function getPhotos()
    {
        return $this->photos;
    }

    public function getListPrice()
    {
        return $this->listPrice;
    }

    public function getLeaseType()
    {
        return $this->leaseType;
    }

    public function getPrivateRemarks()
    {
        return $this->privateRemarks;
    }

    public function getRemarks()
    {
        return $this->remarks;
    }
}
