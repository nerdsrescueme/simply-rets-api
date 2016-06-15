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

    /**
     * Set the value of Property details model
     *
     * @param mixed roofType
     *
     * @return self
     */
    public function setRoofType($roofType)
    {
        $this->roofType = $roofType;

        return $this;
    }

    /**
     * Set the value of Cooling Type
     *
     * @param mixed coolingType
     *
     * @return self
     */
    public function setCoolingType($coolingType)
    {
        $this->coolingType = $coolingType;

        return $this;
    }

    /**
     * Set the value of Style
     *
     * @param mixed style
     *
     * @return self
     */
    public function setStyle($style)
    {
        $this->style = $style;

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
     * Set the value of Full Bath Count
     *
     * @param mixed fullBathCount
     *
     * @return self
     */
    public function setFullBathCount($fullBathCount)
    {
        $this->fullBathCount = $fullBathCount;

        return $this;
    }

    /**
     * Set the value of Half Bath Count
     *
     * @param mixed halfBathCount
     *
     * @return self
     */
    public function setHalfBathCount($halfBathCount)
    {
        $this->halfBathCount = $halfBathCount;

        return $this;
    }

    /**
     * Set the value of Story Count
     *
     * @param mixed storyCount
     *
     * @return self
     */
    public function setStoryCount($storyCount)
    {
        $this->storyCount = $storyCount;

        return $this;
    }

    /**
     * Set the value of Fireplace Count
     *
     * @param mixed fireplaceCount
     *
     * @return self
     */
    public function setFireplaceCount($fireplaceCount)
    {
        $this->fireplaceCount = $fireplaceCount;

        return $this;
    }

    /**
     * Set the value of Flooring
     *
     * @param mixed flooring
     *
     * @return self
     */
    public function setFlooring($flooring)
    {
        $this->flooring = $flooring;

        return $this;
    }

    /**
     * Set the value of Heating
     *
     * @param mixed heating
     *
     * @return self
     */
    public function setHeating($heating)
    {
        $this->heating = $heating;

        return $this;
    }

    /**
     * Set the value of Bathroom Count
     *
     * @param mixed bathroomCount
     *
     * @return self
     */
    public function setBathroomCount($bathroomCount)
    {
        $this->bathroomCount = $bathroomCount;

        return $this;
    }

    /**
     * Set the value of Foundation Type
     *
     * @param mixed foundationType
     *
     * @return self
     */
    public function setFoundationType($foundationType)
    {
        $this->foundationType = $foundationType;

        return $this;
    }

    /**
     * Set the value of Laundry Features
     *
     * @param mixed laundryFeatures
     *
     * @return self
     */
    public function setLaundryFeatures($laundryFeatures)
    {
        $this->laundryFeatures = $laundryFeatures;

        return $this;
    }

    /**
     * Set the value of Occupant Name
     *
     * @param mixed occupantName
     *
     * @return self
     */
    public function setOccupantName($occupantName)
    {
        $this->occupantName = $occupantName;

        return $this;
    }

    /**
     * Set the value of Lot Description
     *
     * @param mixed lotDescription
     *
     * @return self
     */
    public function setLotDescription($lotDescription)
    {
        $this->lotDescription = $lotDescription;

        return $this;
    }

    /**
     * Set the value of Sub Type
     *
     * @param mixed subType
     *
     * @return self
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;

        return $this;
    }

    /**
     * Set the value of Bedroom Count
     *
     * @param mixed bedroomCount
     *
     * @return self
     */
    public function setBedroomCount($bedroomCount)
    {
        $this->bedroomCount = $bedroomCount;

        return $this;
    }

    /**
     * Set the value of Interior Features
     *
     * @param mixed interiorFeatures
     *
     * @return self
     */
    public function setInteriorFeatures($interiorFeatures)
    {
        $this->interiorFeatures = $interiorFeatures;

        return $this;
    }

    /**
     * Set the value of Lot Size
     *
     * @param mixed lotSize
     *
     * @return self
     */
    public function setLotSize($lotSize)
    {
        $this->lotSize = $lotSize;

        return $this;
    }

    /**
     * Set the value of Area Source
     *
     * @param mixed areaSource
     *
     * @return self
     */
    public function setAreaSource($areaSource)
    {
        $this->areaSource = $areaSource;

        return $this;
    }

    /**
     * Set the value of Additional Rooms
     *
     * @param mixed additionalRooms
     *
     * @return self
     */
    public function setAdditionalRooms($additionalRooms)
    {
        $this->additionalRooms = $additionalRooms;

        return $this;
    }

    /**
     * Set the value of Exterior Features
     *
     * @param mixed exteriorFeatures
     *
     * @return self
     */
    public function setExteriorFeatures($exteriorFeatures)
    {
        $this->exteriorFeatures = $exteriorFeatures;

        return $this;
    }

    /**
     * Set the value of Water Source
     *
     * @param mixed waterSource
     *
     * @return self
     */
    public function setWaterSource($waterSource)
    {
        $this->waterSource = $waterSource;

        return $this;
    }

    /**
     * Set the value of View
     *
     * @param mixed view
     *
     * @return self
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Set the value of Subdivision
     *
     * @param mixed subdivision
     *
     * @return self
     */
    public function setSubdivision($subdivision)
    {
        $this->subdivision = $subdivision;

        return $this;
    }

    /**
     * Set the value of Construction Types
     *
     * @param mixed constructionTypes
     *
     * @return self
     */
    public function setConstructionTypes($constructionTypes)
    {
        $this->constructionTypes = $constructionTypes;

        return $this;
    }

    /**
     * Set the value of Type
     *
     * @param mixed type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Set the value of Accessibility
     *
     * @param mixed accessibility
     *
     * @return self
     */
    public function setAccessibility($accessibility)
    {
        $this->accessibility = $accessibility;

        return $this;
    }

    /**
     * Set the value of Occupant Type
     *
     * @param mixed occupantType
     *
     * @return self
     */
    public function setOccupantType($occupantType)
    {
        $this->occupantType = $occupantType;

        return $this;
    }

    /**
     * Set the value of Year Built
     *
     * @param mixed yearBuilt
     *
     * @return self
     */
    public function setYearBuilt($yearBuilt)
    {
        $this->yearBuilt = $yearBuilt;

        return $this;
    }

    /**
     * Set the value of Association
     *
     * @param mixed association
     *
     * @return self
     */
    public function setAssociation($association)
    {
        $this->association = $association;

        return $this;
    }

    /**
     * Set the value of Agreement
     *
     * @param mixed agreement
     *
     * @return self
     */
    public function setAgreement($agreement)
    {
        $this->agreement = $agreement;

        return $this;
    }

    /**
     * Set the value of Garage Space Count
     *
     * @param mixed garageSpaceCount
     *
     * @return self
     */
    public function setGarageSpaceCount($garageSpaceCount)
    {
        $this->garageSpaceCount = $garageSpaceCount;

        return $this;
    }

    /**
     * Set the value of Maintenance Expense
     *
     * @param mixed maintenanceExpense
     *
     * @return self
     */
    public function setMaintenanceExpense($maintenanceExpense)
    {
        $this->maintenanceExpense = $maintenanceExpense;

        return $this;
    }

    /**
     * Set the value of Parking
     *
     * @param mixed parking
     *
     * @return self
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Set the value of Pool
     *
     * @param mixed pool
     *
     * @return self
     */
    public function setPool($pool)
    {
        $this->pool = $pool;

        return $this;
    }

    /**
     * Set the value of Rooms
     *
     * @param mixed rooms
     *
     * @return self
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Set the value of Tax Year
     *
     * @param mixed taxYear
     *
     * @return self
     */
    public function setTaxYear($taxYear)
    {
        $this->taxYear = $taxYear;

        return $this;
    }

    /**
     * Set the value of Tax Annual Amount
     *
     * @param mixed taxAnnualAmount
     *
     * @return self
     */
    public function setTaxAnnualAmount($taxAnnualAmount)
    {
        $this->taxAnnualAmount = $taxAnnualAmount;

        return $this;
    }

}
