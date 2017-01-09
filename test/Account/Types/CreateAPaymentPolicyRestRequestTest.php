<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest;

class CreateAPaymentPolicyRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateAPaymentPolicyRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest', $this->obj);
    }

    public function testExtendsPaymentPolicyRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\PaymentPolicyRequest', $this->obj);
    }
}