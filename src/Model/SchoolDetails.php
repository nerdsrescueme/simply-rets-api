<?php

namespace NRM\SimplyRetsClient\Model;

/**
 * School details model
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class SchoolDetails
{
    protected $middleSchool;
    protected $highSchool;
    protected $elementarySchool;
    protected $district;

    public function getMiddleSchool()
    {
        return $this->middleSchool;
    }

    public function getHighSchool()
    {
        return $this->highSchool;
    }

    public function getElementarySchool()
    {
        return $this->elementarySchool;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set the value of School details model
     *
     * @param mixed middleSchool
     *
     * @return self
     */
    public function setMiddleSchool($middleSchool)
    {
        $this->middleSchool = $middleSchool;

        return $this;
    }

    /**
     * Set the value of High School
     *
     * @param mixed highSchool
     *
     * @return self
     */
    public function setHighSchool($highSchool)
    {
        $this->highSchool = $highSchool;

        return $this;
    }

    /**
     * Set the value of Elementary School
     *
     * @param mixed elementarySchool
     *
     * @return self
     */
    public function setElementarySchool($elementarySchool)
    {
        $this->elementarySchool = $elementarySchool;

        return $this;
    }

    /**
     * Set the value of District
     *
     * @param mixed district
     *
     * @return self
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

}
