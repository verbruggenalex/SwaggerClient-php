<?php
/**
 * ScreenshotsList
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Diffy
 *
 * API for visual regression testing tool Diffy
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ScreenshotsList Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScreenshotsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScreenshotsList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project_name' => 'string',
'production' => 'string',
'staging' => 'string',
'development' => 'string',
'has_baseline' => 'bool',
'screenshots' => '\Swagger\Client\Model\ScreenshotsListScreenshots[]',
'number_items_on_page' => 'float',
'total_pages' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project_name' => null,
'production' => 'url',
'staging' => 'url',
'development' => 'url',
'has_baseline' => null,
'screenshots' => null,
'number_items_on_page' => null,
'total_pages' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'project_name' => 'projectName',
'production' => 'production',
'staging' => 'staging',
'development' => 'development',
'has_baseline' => 'hasBaseline',
'screenshots' => 'screenshots',
'number_items_on_page' => 'numberItemsOnPage',
'total_pages' => 'totalPages'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_name' => 'setProjectName',
'production' => 'setProduction',
'staging' => 'setStaging',
'development' => 'setDevelopment',
'has_baseline' => 'setHasBaseline',
'screenshots' => 'setScreenshots',
'number_items_on_page' => 'setNumberItemsOnPage',
'total_pages' => 'setTotalPages'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_name' => 'getProjectName',
'production' => 'getProduction',
'staging' => 'getStaging',
'development' => 'getDevelopment',
'has_baseline' => 'getHasBaseline',
'screenshots' => 'getScreenshots',
'number_items_on_page' => 'getNumberItemsOnPage',
'total_pages' => 'getTotalPages'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['production'] = isset($data['production']) ? $data['production'] : null;
        $this->container['staging'] = isset($data['staging']) ? $data['staging'] : null;
        $this->container['development'] = isset($data['development']) ? $data['development'] : null;
        $this->container['has_baseline'] = isset($data['has_baseline']) ? $data['has_baseline'] : null;
        $this->container['screenshots'] = isset($data['screenshots']) ? $data['screenshots'] : null;
        $this->container['number_items_on_page'] = isset($data['number_items_on_page']) ? $data['number_items_on_page'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name project_name
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets production
     *
     * @return string
     */
    public function getProduction()
    {
        return $this->container['production'];
    }

    /**
     * Sets production
     *
     * @param string $production production
     *
     * @return $this
     */
    public function setProduction($production)
    {
        $this->container['production'] = $production;

        return $this;
    }

    /**
     * Gets staging
     *
     * @return string
     */
    public function getStaging()
    {
        return $this->container['staging'];
    }

    /**
     * Sets staging
     *
     * @param string $staging staging
     *
     * @return $this
     */
    public function setStaging($staging)
    {
        $this->container['staging'] = $staging;

        return $this;
    }

    /**
     * Gets development
     *
     * @return string
     */
    public function getDevelopment()
    {
        return $this->container['development'];
    }

    /**
     * Sets development
     *
     * @param string $development development
     *
     * @return $this
     */
    public function setDevelopment($development)
    {
        $this->container['development'] = $development;

        return $this;
    }

    /**
     * Gets has_baseline
     *
     * @return bool
     */
    public function getHasBaseline()
    {
        return $this->container['has_baseline'];
    }

    /**
     * Sets has_baseline
     *
     * @param bool $has_baseline If screenshot list contains baseline screenshot
     *
     * @return $this
     */
    public function setHasBaseline($has_baseline)
    {
        $this->container['has_baseline'] = $has_baseline;

        return $this;
    }

    /**
     * Gets screenshots
     *
     * @return \Swagger\Client\Model\ScreenshotsListScreenshots[]
     */
    public function getScreenshots()
    {
        return $this->container['screenshots'];
    }

    /**
     * Sets screenshots
     *
     * @param \Swagger\Client\Model\ScreenshotsListScreenshots[] $screenshots screenshots
     *
     * @return $this
     */
    public function setScreenshots($screenshots)
    {
        $this->container['screenshots'] = $screenshots;

        return $this;
    }

    /**
     * Gets number_items_on_page
     *
     * @return float
     */
    public function getNumberItemsOnPage()
    {
        return $this->container['number_items_on_page'];
    }

    /**
     * Sets number_items_on_page
     *
     * @param float $number_items_on_page number_items_on_page
     *
     * @return $this
     */
    public function setNumberItemsOnPage($number_items_on_page)
    {
        $this->container['number_items_on_page'] = $number_items_on_page;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return float
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param float $total_pages total_pages
     *
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
