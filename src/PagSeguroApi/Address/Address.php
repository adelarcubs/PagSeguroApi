<?php
namespace PagSeguroApi\Address;

class Address
{

    private $country = 'BRA';

    private $state;

    private $city;

    private $district;

    private $street;

    private $postalCode;

    private $number;

    private $complement;

    public function __construct($country, $state, $city, $postalCode, $district, $street, $number, $complement = null)
    {
        if ($country) {
            $this->country = $country;
        }
        
        $this->state = $state;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->district = $district;
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getComplement()
    {
        return $this->complement;
    }
}
