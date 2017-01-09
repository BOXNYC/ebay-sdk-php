<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Types\CaseSummaryType[] $members
 * @property \DTS\eBaySDK\PostOrder\Types\PaginationOutput $paginationOutput
 * @property integer $totalNumberOfCases
 */
class CaseSearchResponse extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'members' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\CaseSummaryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'members'
        ],
        'paginationOutput' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\PaginationOutput',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationOutput'
        ],
        'totalNumberOfCases' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalNumberOfCases'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}