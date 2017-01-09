<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\ProvideInquiryShipmentInfoRestRequest;

class ProvideInquiryShipmentInfoRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProvideInquiryShipmentInfoRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ProvideInquiryShipmentInfoRestRequest', $this->obj);
    }

    public function testExtendsShipmentInfoRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ShipmentInfoRequest', $this->obj);
    }
}