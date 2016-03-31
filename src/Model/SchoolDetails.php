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
}
