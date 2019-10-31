<?php
/**
 * NewTransaction
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
 * NewTransaction Class Doc Comment
 *
 * @category Class
 * @description Mock transaction data
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NewTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NewTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'purpose' => 'string',
        'counterpart' => 'string',
        'counterpart_iban' => 'string',
        'counterpart_blz' => 'string',
        'counterpart_bic' => 'string',
        'counterpart_account_number' => 'string',
        'booking_date' => 'string',
        'value_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'purpose' => null,
        'counterpart' => null,
        'counterpart_iban' => null,
        'counterpart_blz' => null,
        'counterpart_bic' => null,
        'counterpart_account_number' => null,
        'booking_date' => null,
        'value_date' => null
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
        'amount' => 'amount',
        'purpose' => 'purpose',
        'counterpart' => 'counterpart',
        'counterpart_iban' => 'counterpartIban',
        'counterpart_blz' => 'counterpartBlz',
        'counterpart_bic' => 'counterpartBic',
        'counterpart_account_number' => 'counterpartAccountNumber',
        'booking_date' => 'bookingDate',
        'value_date' => 'valueDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'purpose' => 'setPurpose',
        'counterpart' => 'setCounterpart',
        'counterpart_iban' => 'setCounterpartIban',
        'counterpart_blz' => 'setCounterpartBlz',
        'counterpart_bic' => 'setCounterpartBic',
        'counterpart_account_number' => 'setCounterpartAccountNumber',
        'booking_date' => 'setBookingDate',
        'value_date' => 'setValueDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'purpose' => 'getPurpose',
        'counterpart' => 'getCounterpart',
        'counterpart_iban' => 'getCounterpartIban',
        'counterpart_blz' => 'getCounterpartBlz',
        'counterpart_bic' => 'getCounterpartBic',
        'counterpart_account_number' => 'getCounterpartAccountNumber',
        'booking_date' => 'getBookingDate',
        'value_date' => 'getValueDate'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['counterpart'] = isset($data['counterpart']) ? $data['counterpart'] : null;
        $this->container['counterpart_iban'] = isset($data['counterpart_iban']) ? $data['counterpart_iban'] : null;
        $this->container['counterpart_blz'] = isset($data['counterpart_blz']) ? $data['counterpart_blz'] : null;
        $this->container['counterpart_bic'] = isset($data['counterpart_bic']) ? $data['counterpart_bic'] : null;
        $this->container['counterpart_account_number'] = isset($data['counterpart_account_number']) ? $data['counterpart_account_number'] : null;
        $this->container['booking_date'] = isset($data['booking_date']) ? $data['booking_date'] : null;
        $this->container['value_date'] = isset($data['value_date']) ? $data['value_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount Amount. Required.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string $purpose Purpose. Any symbols are allowed. Maximum length is 2000. Optional. Default value: null.
     *
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets counterpart
     *
     * @return string
     */
    public function getCounterpart()
    {
        return $this->container['counterpart'];
    }

    /**
     * Sets counterpart
     *
     * @param string $counterpart Counterpart. Any symbols are allowed. Maximum length is 80. Optional. Default value: null.
     *
     * @return $this
     */
    public function setCounterpart($counterpart)
    {
        $this->container['counterpart'] = $counterpart;

        return $this;
    }

    /**
     * Gets counterpart_iban
     *
     * @return string
     */
    public function getCounterpartIban()
    {
        return $this->container['counterpart_iban'];
    }

    /**
     * Sets counterpart_iban
     *
     * @param string $counterpart_iban Counterpart IBAN. Optional. Default value: null.
     *
     * @return $this
     */
    public function setCounterpartIban($counterpart_iban)
    {
        $this->container['counterpart_iban'] = $counterpart_iban;

        return $this;
    }

    /**
     * Gets counterpart_blz
     *
     * @return string
     */
    public function getCounterpartBlz()
    {
        return $this->container['counterpart_blz'];
    }

    /**
     * Sets counterpart_blz
     *
     * @param string $counterpart_blz Counterpart BLZ. Optional. Default value: null.
     *
     * @return $this
     */
    public function setCounterpartBlz($counterpart_blz)
    {
        $this->container['counterpart_blz'] = $counterpart_blz;

        return $this;
    }

    /**
     * Gets counterpart_bic
     *
     * @return string
     */
    public function getCounterpartBic()
    {
        return $this->container['counterpart_bic'];
    }

    /**
     * Sets counterpart_bic
     *
     * @param string $counterpart_bic Counterpart BIC. Optional. Default value: null.
     *
     * @return $this
     */
    public function setCounterpartBic($counterpart_bic)
    {
        $this->container['counterpart_bic'] = $counterpart_bic;

        return $this;
    }

    /**
     * Gets counterpart_account_number
     *
     * @return string
     */
    public function getCounterpartAccountNumber()
    {
        return $this->container['counterpart_account_number'];
    }

    /**
     * Sets counterpart_account_number
     *
     * @param string $counterpart_account_number Counterpart account number. Maximum length is 34. Optional. Default value: null.
     *
     * @return $this
     */
    public function setCounterpartAccountNumber($counterpart_account_number)
    {
        $this->container['counterpart_account_number'] = $counterpart_account_number;

        return $this;
    }

    /**
     * Gets booking_date
     *
     * @return string
     */
    public function getBookingDate()
    {
        return $this->container['booking_date'];
    }

    /**
     * Sets booking_date
     *
     * @param string $booking_date Booking date in the format 'YYYY-MM-DD'.<br/><br/>If the date lies back more than 10 days from the booking date of the latest transaction that currently exists in the account, then this transaction will be ignored and not imported. If the date depicts a date in the future, then finAPI will deal with it the same way as it does with real transactions during a real update (see fields 'bankBookingDate' and 'finapiBookingDate' in the Transaction Resource for explanation).<br/><br/>This field is optional, default value is the current date.
     *
     * @return $this
     */
    public function setBookingDate($booking_date)
    {
        $this->container['booking_date'] = $booking_date;

        return $this;
    }

    /**
     * Gets value_date
     *
     * @return string
     */
    public function getValueDate()
    {
        return $this->container['value_date'];
    }

    /**
     * Sets value_date
     *
     * @param string $value_date Value date in the format 'YYYY-MM-DD'. Optional. Default value: Same as the booking date.
     *
     * @return $this
     */
    public function setValueDate($value_date)
    {
        $this->container['value_date'] = $value_date;

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


