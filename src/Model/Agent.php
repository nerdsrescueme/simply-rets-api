<?php

namespace NRM\SimplyRetsClient\Model;

/**
 * Agent model
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class Agent
{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $contact;

    public function __construct()
    {
        $this->contact = array();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getOfficeContact()
    {
        return isset($this->contact['office']) ? $this->contact['office'] : null;
    }

    public function getCellContact()
    {
        return isset($this->contact['cell']) ? $this->contact['cell'] : null;
    }

    public function getFullContact()
    {
        return isset($this->contact['full']) ? $this->contact['full'] : null;
    }
}
