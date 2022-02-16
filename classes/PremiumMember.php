<?php

class PremiumMember {
    protected $premiumMember;

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