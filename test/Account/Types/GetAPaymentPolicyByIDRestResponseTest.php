<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse;

class GetAPaymentPolicyByIDRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAPaymentPolicyByIDRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse', $this->obj);
    }

    public function testExtendsPaymentPolicy()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\PaymentPolicy', $this->obj);
    }
}