<?php

namespace NRM\SimplyRetsClient\Model;

/**
 * Property details model
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class PropertyDetails
{
    protected $roofType;
    protected $coolingType;
    protected $style;
    protected $area;
    protected $fullBathCount;
    protected $halfBathCount;
    protected $storyCount;
    protected $fireplaceCount;
    protected $flooring;
    protected $heating;
    protected $bathroomCount;
    protected $foundationType;
    protected $laundryFeatures = array();
    protected $occupantName;
    protected $lotDescription;
    protected $subType;
    protected $bedroomCount;
    protected $interiorFeatures = array();
    protected $lotSize;
    protected $areaSource;
    protected $additionalRooms = array();
    protected $exteriorFeatures = array();
    protected $waterSource;
    protected $view;
    protected $subdivision;
    protected $constructionTypes = array();
    protected $type;
    protected $accessibility;
    protected $occupantType;
    protected $yearBuilt;

    /*
        Extras we have NOT implemented just yet.
     */
    protected $association;
    protected $agreement;
    protected $garageSpaceCount;
    protected $maintenanceExpense;
    protected $parking;
    protected $pool;
    protected $rooms;
    protected $taxYear;
    protected $taxAnnualAmount;

    public function __construct()
    {
    }

    public function getRoofType()
    {
        return $this->roofType;
    }

    public function getCoolingType()
    {
        return $this->coolingType;
    }

    public function getStyle()
    {
        return $this->style;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function getFullBathCount()
    {
        return $this->fullBathCount;
    }

    public function getHalfBathCount()
    {
        return $this->halfBathCount;
    }

    public function getStoryCount()
    {
        return $this->storyCount;
    }

    public function getFireplaceCount()
    {
        return $this->fireplaceCount;
    }

    public function getFlooringType()
    {
        return $this->flooring;
    }

    public function getHeatingType()
    {
        return $this->heating;
    }

    public function getBathroomCount()
    {
        if (null === $this->bathroomCount) {
            $calcCount = $this->getHalfBathCount() + $this->getFullBathCount();

            return $calcCount > 0 ? $calcCount : null;
        }

        return $this->bathroomCount;
    }

    public function getFoundationType()
    {
        return $this->foundationType;
    }

    public function setLaundryFeaturesFromString($string)
    {
        if (!empty($string)) {
            $this->laundryFeatures = array_merge($this->laundryFeatures, explode(',', $string));
            $this->laundryFeatures = array_unique($this->laundryFeatures);
            $this->laundryFeatures = array_map('trim', $this->laundryFeatures);
        }

        return $this;
    }

    public function getLaundryFeatures()
    {
        return $this->laundryFeatures;
    }

    public function getOccupantName()
    {
        return $this->occupantName;
    }

    public function getLotDescription()
    {
        return $this->lotDescription;
    }

    public function getSubType()
    {
        return $this->subType;
    }

    public function getBedroomCount()
    {
        return $this->bedroomCount;
    }

    public function setInteriorFeaturesFromString($string)
    {
        if (!empty($string)) {
            $this->interiorFeatures = array_merge($this->interiorFeatures, explode(',', $string));
            $this->interiorFeatures = array_unique($this->interiorFeatures);
            $this->interiorFeatures = array_map('trim', $this->interiorFeatures);
        }

        return $this;
    }

    public function getInteriorFeatures()
    {
        return $this->interiorFeatures;
    }

    public function getLotSize()
    {
        return $this->lotSize;
    }

    public function getAreaSource()
    {
        return $this->areaSource;
    }

    public function setAdditionalRoomsFromString($string)
    {
        if (!empty($string)) {
            $this->additionalRooms = array_merge($this->additionalRooms, explode(',', $string));
            $this->additionalRooms = array_unique($this->additionalRooms);
            $this->additionalRooms = array_map('trim', $this->additionalRooms);
        }

        return $this;
    }

    public function getAdditionalRooms()
    {
        return $this->additionalRooms;
    }

    public function setExteriorFeaturesFromString($string)
    {
        if (!empty($string)) {
            $this->exteriorFeatures = array_merge($this->exteriorFeatures, explode(',', $string));
            $this->exteriorFeatures = array_unique($this->exteriorFeatures);
            $this->exteriorFeatures = array_map('trim', $this->exteriorFeatures);
        }

        return $this;
    }

    public function getExteriorFeatures()
    {
        return $this->exteriorFeatures;
    }

    public function getWaterSource()
    {
        return $this->waterSource;
    }

    public function getView()
    {
        return $this->view;
    }

    public function getSubdivision()
    {
        return $this->subdivision;
    }

    public function setConstructionTypeFromString($string)
    {
        if (!empty($string)) {
            $this->constructionTypes = array_merge($this->constructionTypes, explode(',', $string));
            $this->constructionTypes = array_unique($this->constructionTypes);
            $this->constructionTypes = array_map('trim', $this->constructionTypes);
        }

        return $this;
    }

    public function getConstructionTypes()
    {
        return $this->constructionTypes;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getAccessibility()
    {
        return $this->accessibility;
    }

    public function getOccupantType()
    {
        return $this->occupantType;
    }

    public function getYearBuilt()
    {
        return $this->yearBuilt;
    }

    public function getGarageSpaceCount()
    {
        return $this->garageSpaceCount;
    }
}
