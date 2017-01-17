<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\RelatedItemsManagement\Types;

use DTS\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse;

class CreateBundlesResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateBundlesResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\BaseResponse', $this->obj);
    }
}
