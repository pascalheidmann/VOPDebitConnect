<?php
/**
 * WebForm
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * finAPI RESTful Services
 *
 * finAPI RESTful Services
 *
 * OpenAPI spec version: v1.81.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
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
 * WebForm Class Doc Comment
 *
 * @category Class
 * @description Container for a web form&#39;s data
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebForm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'token' => 'string',
        'status' => 'string',
        'service_response_code' => 'int',
        'service_response_body' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'token' => null,
        'status' => null,
        'service_response_code' => 'int32',
        'service_response_body' => null
    ];

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
        'id' => 'id',
        'token' => 'token',
        'status' => 'status',
        'service_response_code' => 'serviceResponseCode',
        'service_response_body' => 'serviceResponseBody'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'token' => 'setToken',
        'status' => 'setStatus',
        'service_response_code' => 'setServiceResponseCode',
        'service_response_body' => 'setServiceResponseBody'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'token' => 'getToken',
        'status' => 'getStatus',
        'service_response_code' => 'getServiceResponseCode',
        'service_response_body' => 'getServiceResponseBody'
    ];

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

    const STATUS_NOT_YET_OPENED = 'NOT_YET_OPENED';
    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_ABORTED = 'ABORTED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_YET_OPENED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED,
            self::STATUS_ABORTED,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['service_response_code'] = isset($data['service_response_code']) ? $data['service_response_code'] : null;
        $this->container['service_response_body'] = isset($data['service_response_body']) ? $data['service_response_body'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Web form identifier, as returned in the 451 response of the REST service call that initiated the web form flow.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token Token for the finAPI web form page, as contained in the 451 response of the REST service call that initiated the web form flow (in the 'Location' header).
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of a web form. Possible values are:<br/>&bull; NOT_YET_OPENED - the web form URL was not yet called;<br/>&bull; IN_PROGRESS - the web form has been opened but not yet submitted by the user;<br/>&bull; COMPLETED - the user has opened and submitted the web form;<br/>&bull; ABORTED - the user has opened but then aborted the web form, or the web form was aborted by the finAPI system because it has expired (this is the case when a web form is opened and then not submitted within 20 minutes)
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets service_response_code
     *
     * @return int
     */
    public function getServiceResponseCode()
    {
        return $this->container['service_response_code'];
    }

    /**
     * Sets service_response_code
     *
     * @param int $service_response_code HTTP response code of the REST service call that initiated the web form flow. This field can be queried as soon as the status becomes COMPLETED or ABORTED. Note that it is still not guaranteed in this case that the field has a value, i.e. it might be null.
     *
     * @return $this
     */
    public function setServiceResponseCode($service_response_code)
    {
        $this->container['service_response_code'] = $service_response_code;

        return $this;
    }

    /**
     * Gets service_response_body
     *
     * @return string
     */
    public function getServiceResponseBody()
    {
        return $this->container['service_response_body'];
    }

    /**
     * Sets service_response_body
     *
     * @param string $service_response_body HTTP response body of the REST service call that initiated the web form flow. This field can be queried as soon as the status becomes COMPLETED or ABORTED. Note that it is still not guaranteed in this case that the field has a value, i.e. it might be null.
     *
     * @return $this
     */
    public function setServiceResponseBody($service_response_body)
    {
        $this->container['service_response_body'] = $service_response_body;

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


