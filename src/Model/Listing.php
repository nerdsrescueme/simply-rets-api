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
    protected $address;
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
    protected $listingId;

    public function __construct()
    {
        $this->photos = array();
    }

    public function getAddress()
    {
        return $this->address;
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

    public function getListingId()
    {
        return $this->listingId;
    }

    /**
     * Set the value of Listing model
     *
     * @param mixed mlsId
     *
     * @return self
     */
    public function setMlsId($mlsId)
    {
        $this->mlsId = $mlsId;

        return $this;
    }

    /**
     * Set the value of address
     *
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Set the value of Property Details
     *
     * @param mixed propertyDetails
     *
     * @return self
     */
    public function setPropertyDetails($propertyDetails)
    {
        $this->propertyDetails = $propertyDetails;

        return $this;
    }

    /**
     * Set the value of Mls Details
     *
     * @param mixed mlsDetails
     *
     * @return self
     */
    public function setMlsDetails($mlsDetails)
    {
        $this->mlsDetails = $mlsDetails;

        return $this;
    }

    /**
     * Set the value of Geolocation Details
     *
     * @param mixed geolocationDetails
     *
     * @return self
     */
    public function setGeolocationDetails($geolocationDetails)
    {
        $this->geolocationDetails = $geolocationDetails;

        return $this;
    }

    /**
     * Set the value of Terms
     *
     * @param mixed terms
     *
     * @return self
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;

        return $this;
    }

    /**
     * Set the value of Showing Instructions
     *
     * @param mixed showingInstructions
     *
     * @return self
     */
    public function setShowingInstructions($showingInstructions)
    {
        $this->showingInstructions = $showingInstructions;

        return $this;
    }

    /**
     * Set the value of Lease Term
     *
     * @param mixed leaseTerm
     *
     * @return self
     */
    public function setLeaseTerm($leaseTerm)
    {
        $this->leaseTerm = $leaseTerm;

        return $this;
    }

    /**
     * Set the value of Disclaimer
     *
     * @param mixed disclaimer
     *
     * @return self
     */
    public function setDisclaimer($disclaimer)
    {
        $this->disclaimer = $disclaimer;

        return $this;
    }

    /**
     * Set the value of List Date
     *
     * @param mixed listDate
     *
     * @return self
     */
    public function setListDate($listDate)
    {
        $this->listDate = $listDate;

        return $this;
    }

    /**
     * Set the value of Agent
     *
     * @param mixed agent
     *
     * @return self
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Set the value of Modified At
     *
     * @param mixed modifiedAt
     *
     * @return self
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Set the value of School Details
     *
     * @param mixed schoolDetails
     *
     * @return self
     */
    public function setSchoolDetails($schoolDetails)
    {
        $this->schoolDetails = $schoolDetails;

        return $this;
    }

    /**
     * Set the value of Photos
     *
     * @param mixed photos
     *
     * @return self
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Set the value of List Price
     *
     * @param mixed listPrice
     *
     * @return self
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;

        return $this;
    }

    /**
     * Set the value of Lease Type
     *
     * @param mixed leaseType
     *
     * @return self
     */
    public function setLeaseType($leaseType)
    {
        $this->leaseType = $leaseType;

        return $this;
    }

    /**
     * Set the value of Private Remarks
     *
     * @param mixed privateRemarks
     *
     * @return self
     */
    public function setPrivateRemarks($privateRemarks)
    {
        $this->privateRemarks = $privateRemarks;

        return $this;
    }

    /**
     * Set the value of Remarks
     *
     * @param mixed remarks
     *
     * @return self
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    public function setListingId($listingId)
    {
        $this->listingId = $listingId;

        return $this;
    }
}
