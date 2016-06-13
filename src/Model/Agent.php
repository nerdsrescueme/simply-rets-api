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

    /**
     * Set the value of Agent model
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of First Name
     *
     * @param mixed firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Set the value of Last Name
     *
     * @param mixed lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Set the value of Contact
     *
     * @param mixed contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

}
