<?php
namespace PagSeguroApiTest\Address;

use PHPUnit_Framework_TestCase;
use PagSeguroApi\Address\Address;

class AddressTest extends PHPUnit_Framework_TestCase
{

    public function testConstruct()
    {
        $address = new Address('BRA', 'SP', 'Barueri', '01010999', 'Bairro', 'Alguma Rua', 123, 'AP 123');
        
        $this->assertInstanceOf('PagSeguroApi\Address\Address', $address);
        $this->assertEquals('BRA', $address->getCountry());
        $this->assertEquals('SP', $address->getState());
        $this->assertEquals('Barueri', $address->getCity());
        $this->assertEquals('01010999', $address->getPostalCode());
        $this->assertEquals('Bairro', $address->getDistrict());
        $this->assertEquals('Alguma Rua', $address->getStreet());
        $this->assertEquals(123, $address->getNumber());
        $this->assertEquals('AP 123', $address->getComplement());
    }

    public function testConstruct_1()
    {
        $address = new Address(null, 'SC', 'Joinville', '89000909', 'Bairro de joinville', 'Rua de Joinville', 987);
        
        $this->assertInstanceOf('PagSeguroApi\Address\Address', $address);
        $this->assertEquals('BRA', $address->getCountry());
        $this->assertEquals('SC', $address->getState());
        $this->assertEquals('Joinville', $address->getCity());
        $this->assertEquals('89000909', $address->getPostalCode());
        $this->assertEquals('Bairro de joinville', $address->getDistrict());
        $this->assertEquals('Rua de Joinville', $address->getStreet());
        $this->assertEquals(987, $address->getNumber());
        $this->assertNull($address->getComplement());
    }
}

