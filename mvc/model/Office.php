<?php

class Office
{
    public $officeCode;
    public $city;
    public $phone;
    public $addressLine1;
    public $addressLine2;
    public $state;
    public $country;
    public $postalCode;
    public $territory;

    public function __construct($officeCode, $city = null, $phone = null, 
    $addressLine1 = null, $addressLine2 = null, $state = null, 
    $country = null, $postalCode = null, $territory = null)
    {
        $this->officeCode = $officeCode;
        $this->city = $city;
        $this->phone = $phone;
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->state = $state;
        $this->country = $country;
        $this->postalCode = $postalCode;
        $this->territory = $territory;
    }
}
