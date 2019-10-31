<?php
/**
 * SubTransactionParams
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
 * SubTransactionParams Class Doc Comment
 *
 * @category Class
 * @description Data of a sub-transaction
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubTransactionParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubTransactionParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'category_id' => 'int',
        'purpose' => 'string',
        'counterpart' => 'string',
        'counterpart_account_number' => 'string',
        'counterpart_iban' => 'string',
        'counterpart_bic' => 'string',
        'counterpart_blz' => 'string',
        'label_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'category_id' => 'int64',
        'purpose' => null,
        'counterpart' => null,
        'counterpart_account_number' => null,
        'counterpart_iban' => null,
        'counterpart_bic' => null,
        'counterpart_blz' => null,
        'label_ids' => 'int64'
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
        'category_id' => 'categoryId',
        'purpose' => 'purpose',
        'counterpart' => 'counterpart',
        'counterpart_account_number' => 'counterpartAccountNumber',
        'counterpart_iban' => 'counterpartIban',
        'counterpart_bic' => 'counterpartBic',
        'counterpart_blz' => 'counterpartBlz',
        'label_ids' => 'labelIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'category_id' => 'setCategoryId',
        'purpose' => 'setPurpose',
        'counterpart' => 'setCounterpart',
        'counterpart_account_number' => 'setCounterpartAccountNumber',
        'counterpart_iban' => 'setCounterpartIban',
        'counterpart_bic' => 'setCounterpartBic',
        'counterpart_blz' => 'setCounterpartBlz',
        'label_ids' => 'setLabelIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'category_id' => 'getCategoryId',
        'purpose' => 'getPurpose',
        'counterpart' => 'getCounterpart',
        'counterpart_account_number' => 'getCounterpartAccountNumber',
        'counterpart_iban' => 'getCounterpartIban',
        'counterpart_bic' => 'getCounterpartBic',
        'counterpart_blz' => 'getCounterpartBlz',
        'label_ids' => 'getLabelIds'
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
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['counterpart'] = isset($data['counterpart']) ? $data['counterpart'] : null;
        $this->container['counterpart_account_number'] = isset($data['counterpart_account_number']) ? $data['counterpart_account_number'] : null;
        $this->container['counterpart_iban'] = isset($data['counterpart_iban']) ? $data['counterpart_iban'] : null;
        $this->container['counterpart_bic'] = isset($data['counterpart_bic']) ? $data['counterpart_bic'] : null;
        $this->container['counterpart_blz'] = isset($data['counterpart_blz']) ? $data['counterpart_blz'] : null;
        $this->container['label_ids'] = isset($data['label_ids']) ? $data['label_ids'] : null;
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
        if (!is_null($this->container['purpose']) && !preg_match("/[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/", $this->container['purpose'])) {
            $invalidProperties[] = "invalid value for 'purpose', must be conform to the pattern /[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/.";
        }

        if (!is_null($this->container['counterpart']) && !preg_match("/[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/", $this->container['counterpart'])) {
            $invalidProperties[] = "invalid value for 'counterpart', must be conform to the pattern /[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/.";
        }

        if (!is_null($this->container['counterpart_account_number']) && !preg_match("/[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/", $this->container['counterpart_account_number'])) {
            $invalidProperties[] = "invalid value for 'counterpart_account_number', must be conform to the pattern /[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/.";
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
     * @param float $amount Amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id Category identifier. If not specified, the original transaction's category will be applied. If you explicitly want the sub-transaction to have no category, then pass this field with value '0' (zero).
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

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
     * @param string $purpose Purpose. Maximum length is 2000. If not specified, the original transaction's value will be applied.
     *
     * @return $this
     */
    public function setPurpose($purpose)
    {

        if (!is_null($purpose) && (!preg_match("/[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/", $purpose))) {
            throw new \InvalidArgumentException("invalid value for $purpose when calling SubTransactionParams., must conform to the pattern /[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/.");
        }

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
     * @param string $counterpart Counterpart. Maximum length is 80. If not specified, the original transaction's value will be applied.
     *
     * @return $this
     */
    public function setCounterpart($counterpart)
    {

        if (!is_null($counterpart) && (!preg_match("/[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/", $counterpart))) {
            throw new \InvalidArgumentException("invalid value for $counterpart when calling SubTransactionParams., must conform to the pattern /[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/.");
        }

        $this->container['counterpart'] = $counterpart;

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
     * @param string $counterpart_account_number Counterpart account number. If not specified, the original transaction's value will be applied.
     *
     * @return $this
     */
    public function setCounterpartAccountNumber($counterpart_account_number)
    {

        if (!is_null($counterpart_account_number) && (!preg_match("/[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/", $counterpart_account_number))) {
            throw new \InvalidArgumentException("invalid value for $counterpart_account_number when calling SubTransactionParams., must conform to the pattern /[A-Za-z0-9¡-ʯ &\\(\\)\\{\\}\\[\\]\\.:,;\\?!\\+\\-_\\$@#~`\\^€]*/.");
        }

        $this->container['counterpart_account_number'] = $counterpart_account_number;

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
     * @param string $counterpart_iban Counterpart IBAN. If not specified, the original transaction's value will be applied.
     *
     * @return $this
     */
    public function setCounterpartIban($counterpart_iban)
    {
        $this->container['counterpart_iban'] = $counterpart_iban;

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
     * @param string $counterpart_bic Counterpart BIC. If not specified, the original transaction's value will be applied.
     *
     * @return $this
     */
    public function setCounterpartBic($counterpart_bic)
    {
        $this->container['counterpart_bic'] = $counterpart_bic;

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
     * @param string $counterpart_blz Counterpart BLZ. If not specified, the original transaction's value will be applied.
     *
     * @return $this
     */
    public function setCounterpartBlz($counterpart_blz)
    {
        $this->container['counterpart_blz'] = $counterpart_blz;

        return $this;
    }

    /**
     * Gets label_ids
     *
     * @return int[]
     */
    public function getLabelIds()
    {
        return $this->container['label_ids'];
    }

    /**
     * Sets label_ids
     *
     * @param int[] $label_ids List of connected labels. Note that when this field is not specified, then the labels of the original transaction will NOT get applied to the sub-transaction. Instead, the sub-transaction will have no labels assigned to it.
     *
     * @return $this
     */
    public function setLabelIds($label_ids)
    {
        $this->container['label_ids'] = $label_ids;

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


