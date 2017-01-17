<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\RelatedItemsManagement\Types;

use DTS\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest;

class CreateBundlesRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateBundlesRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\BaseRequest', $this->obj);
    }
}
