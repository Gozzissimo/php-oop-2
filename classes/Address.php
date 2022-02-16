<?php
class Address
{
    protected $name;
    protected $lastName;
    protected $streetAddress;
    protected $city;
    protected $zipCode;


    public function __construct($name, $lastName, $streetAddress, $city, $zipCode)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->streetAddress = $streetAddress;
        $this->city = $city;
        $this->zipCode = $zipCode;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of streetAddress
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * Set the value of streetAddress
     *
     * @return  self
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of zipCode
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set the value of zipCode
     *
     * @return  self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }
}
