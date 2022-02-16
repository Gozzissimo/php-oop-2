<?php
class Product
{
    protected $email;
    protected $password;
    protected $premiumMember = false;


    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of premiumMember
     */ 
    public function getPremiumMember()
    {
        return $this->premiumMember;
    }

    /**
     * Set the value of premiumMember
     *
     * @return  self
     */ 
    public function setPremiumMember($premiumMember)
    {
        $this->premiumMember = $premiumMember;

        return $this;
    }
}