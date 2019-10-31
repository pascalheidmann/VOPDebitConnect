<?php
/**
 * UpdateBankConnectionParams
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
 * UpdateBankConnectionParams Class Doc Comment
 *
 * @category Class
 * @description Container for bank connection update parameters
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateBankConnectionParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateBankConnectionParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_connection_id' => 'int',
        'banking_pin' => 'string',
        'store_pin' => 'bool',
        'interface' => 'string',
        'login_credentials' => '\Swagger\Client\Model\LoginCredential[]',
        'store_secrets' => 'bool',
        'import_new_accounts' => 'bool',
        'skip_positions_download' => 'bool',
        'load_owner_data' => 'bool',
        'account_references' => '\Swagger\Client\Model\AccountReference[]',
        'challenge_response' => 'string',
        'multi_step_authentication' => '\Swagger\Client\Model\MultiStepAuthenticationCallback',
        'redirect_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_connection_id' => 'int64',
        'banking_pin' => null,
        'store_pin' => null,
        'interface' => null,
        'login_credentials' => null,
        'store_secrets' => null,
        'import_new_accounts' => null,
        'skip_positions_download' => null,
        'load_owner_data' => null,
        'account_references' => null,
        'challenge_response' => null,
        'multi_step_authentication' => null,
        'redirect_url' => null
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
        'bank_connection_id' => 'bankConnectionId',
        'banking_pin' => 'bankingPin',
        'store_pin' => 'storePin',
        'interface' => 'interface',
        'login_credentials' => 'loginCredentials',
        'store_secrets' => 'storeSecrets',
        'import_new_accounts' => 'importNewAccounts',
        'skip_positions_download' => 'skipPositionsDownload',
        'load_owner_data' => 'loadOwnerData',
        'account_references' => 'accountReferences',
        'challenge_response' => 'challengeResponse',
        'multi_step_authentication' => 'multiStepAuthentication',
        'redirect_url' => 'redirectUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_connection_id' => 'setBankConnectionId',
        'banking_pin' => 'setBankingPin',
        'store_pin' => 'setStorePin',
        'interface' => 'setInterface',
        'login_credentials' => 'setLoginCredentials',
        'store_secrets' => 'setStoreSecrets',
        'import_new_accounts' => 'setImportNewAccounts',
        'skip_positions_download' => 'setSkipPositionsDownload',
        'load_owner_data' => 'setLoadOwnerData',
        'account_references' => 'setAccountReferences',
        'challenge_response' => 'setChallengeResponse',
        'multi_step_authentication' => 'setMultiStepAuthentication',
        'redirect_url' => 'setRedirectUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_connection_id' => 'getBankConnectionId',
        'banking_pin' => 'getBankingPin',
        'store_pin' => 'getStorePin',
        'interface' => 'getInterface',
        'login_credentials' => 'getLoginCredentials',
        'store_secrets' => 'getStoreSecrets',
        'import_new_accounts' => 'getImportNewAccounts',
        'skip_positions_download' => 'getSkipPositionsDownload',
        'load_owner_data' => 'getLoadOwnerData',
        'account_references' => 'getAccountReferences',
        'challenge_response' => 'getChallengeResponse',
        'multi_step_authentication' => 'getMultiStepAuthentication',
        'redirect_url' => 'getRedirectUrl'
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

    const MODEL_INTERFACE_FINTS_SERVER = 'FINTS_SERVER';
    const MODEL_INTERFACE_WEB_SCRAPER = 'WEB_SCRAPER';
    const MODEL_INTERFACE_XS2_A = 'XS2A';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInterfaceAllowableValues()
    {
        return [
            self::MODEL_INTERFACE_FINTS_SERVER,
            self::MODEL_INTERFACE_WEB_SCRAPER,
            self::MODEL_INTERFACE_XS2_A,
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
        $this->container['bank_connection_id'] = isset($data['bank_connection_id']) ? $data['bank_connection_id'] : null;
        $this->container['banking_pin'] = isset($data['banking_pin']) ? $data['banking_pin'] : null;
        $this->container['store_pin'] = isset($data['store_pin']) ? $data['store_pin'] : false;
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
        $this->container['login_credentials'] = isset($data['login_credentials']) ? $data['login_credentials'] : null;
        $this->container['store_secrets'] = isset($data['store_secrets']) ? $data['store_secrets'] : false;
        $this->container['import_new_accounts'] = isset($data['import_new_accounts']) ? $data['import_new_accounts'] : false;
        $this->container['skip_positions_download'] = isset($data['skip_positions_download']) ? $data['skip_positions_download'] : false;
        $this->container['load_owner_data'] = isset($data['load_owner_data']) ? $data['load_owner_data'] : false;
        $this->container['account_references'] = isset($data['account_references']) ? $data['account_references'] : null;
        $this->container['challenge_response'] = isset($data['challenge_response']) ? $data['challenge_response'] : null;
        $this->container['multi_step_authentication'] = isset($data['multi_step_authentication']) ? $data['multi_step_authentication'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bank_connection_id'] === null) {
            $invalidProperties[] = "'bank_connection_id' can't be null";
        }
        $allowedValues = $this->getInterfaceAllowableValues();
        if (!is_null($this->container['interface']) && !in_array($this->container['interface'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'interface', must be one of '%s'",
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
     * Gets bank_connection_id
     *
     * @return int
     */
    public function getBankConnectionId()
    {
        return $this->container['bank_connection_id'];
    }

    /**
     * Sets bank_connection_id
     *
     * @param int $bank_connection_id Bank connection identifier
     *
     * @return $this
     */
    public function setBankConnectionId($bank_connection_id)
    {
        $this->container['bank_connection_id'] = $bank_connection_id;

        return $this;
    }

    /**
     * Gets banking_pin
     *
     * @return string
     */
    public function getBankingPin()
    {
        return $this->container['banking_pin'];
    }

    /**
     * Sets banking_pin
     *
     * @param string $banking_pin NOTE: This field is deprecated and will be removed at some point. Use 'loginCredentials' + 'interface' instead. If any of those two fields is used, then the value of this field will be ignored.<br><br>Online banking PIN. Any symbols are allowed. Max length: 170. If a PIN is stored in the bank connection, then this field may remain unset. If finAPI's web form is not required and the field is set though then it will always be used (even if there is some other PIN stored in the bank connection). If you want the user to enter a PIN in finAPI's web form even when a PIN is stored, then just set the field to any value, so that the service recognizes that you wish to use the web form flow.
     *
     * @return $this
     */
    public function setBankingPin($banking_pin)
    {
        $this->container['banking_pin'] = $banking_pin;

        return $this;
    }

    /**
     * Gets store_pin
     *
     * @return bool
     */
    public function getStorePin()
    {
        return $this->container['store_pin'];
    }

    /**
     * Sets store_pin
     *
     * @param bool $store_pin NOTE: This field is deprecated and will be removed at some point. Use 'storeSecrets' instead.<br><br>Whether to store the PIN. If the PIN is stored, it is not required to pass the PIN again when updating this bank connection or when executing orders (like money transfers). Default is false. <br/><br/>NOTES:<br/> - before you set this field to true, please regard the 'pinsAreVolatile' flag of this connection's bank;<br/> - this field is ignored in case when the user will need to use finAPI's web form. The user will be able to decide whether to store the PIN or not in the web form, depending on the 'storeSecretsAvailableInWebForm' setting (see Client Configuration).
     *
     * @return $this
     */
    public function setStorePin($store_pin)
    {
        $this->container['store_pin'] = $store_pin;

        return $this;
    }

    /**
     * Gets interface
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
     * Sets interface
     *
     * @param string $interface The interface to use for connecting with the bank.
     *
     * @return $this
     */
    public function setInterface($interface)
    {
        $allowedValues = $this->getInterfaceAllowableValues();
        if (!is_null($interface) && !in_array($interface, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'interface', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interface'] = $interface;

        return $this;
    }

    /**
     * Gets login_credentials
     *
     * @return \Swagger\Client\Model\LoginCredential[]
     */
    public function getLoginCredentials()
    {
        return $this->container['login_credentials'];
    }

    /**
     * Sets login_credentials
     *
     * @param \Swagger\Client\Model\LoginCredential[] $login_credentials Set of login credentials. Must be passed in combination with the 'interface' field. The labels that you pass must match with the login credential labels that the respective interface defines. finAPI will combine the given credentials with any credentials that it has stored. You can leave this field unset in case finAPI has stored all required credentials. When you must use a web form, you can also leave this field unset and the web form will take care of getting the credentials from the user. However, if you do pass credentials in that case, the web form will show only those fields that you have given.
     *
     * @return $this
     */
    public function setLoginCredentials($login_credentials)
    {
        $this->container['login_credentials'] = $login_credentials;

        return $this;
    }

    /**
     * Gets store_secrets
     *
     * @return bool
     */
    public function getStoreSecrets()
    {
        return $this->container['store_secrets'];
    }

    /**
     * Sets store_secrets
     *
     * @param bool $store_secrets Whether to store the secret login fields. If the secret fields are stored, then updates can be triggered without the involvement of the users, as long as the credentials remain valid and the bank consent has not expired. Note that bank consent will be stored regardless of the field value. Default value is false.<br/><br/>NOTES:<br/> - this field is ignored in case when the user will need to use finAPI's web form. The user will be able to decide whether to store the secrets or not in the web form, depending on the 'storeSecretsAvailableInWebForm' setting (see Client Configuration).
     *
     * @return $this
     */
    public function setStoreSecrets($store_secrets)
    {
        $this->container['store_secrets'] = $store_secrets;

        return $this;
    }

    /**
     * Gets import_new_accounts
     *
     * @return bool
     */
    public function getImportNewAccounts()
    {
        return $this->container['import_new_accounts'];
    }

    /**
     * Sets import_new_accounts
     *
     * @param bool $import_new_accounts Whether new accounts that have not yet been imported will be imported or not. Default is false. <br/><br/>NOTES:<br/>&bull; For best performance of the bank connection update, you should not enable this flag unless you really expect new accounts to be available in the connection. It is recommended to let your users tell you through your application when they want the service to look for new accounts.<br/>&bull; If you have imported a bank connection using specific <code>accountTypeIds</code> (e.g. <code>1,2</code> to import checking and saving accounts), you would import all other accounts (e.g. security accounts or credit cards) by setting <code>importNewAccounts</code> to <code>true</code>. To avoid importing account types that you are not interested in, make sure this field is undefined or set to false.
     *
     * @return $this
     */
    public function setImportNewAccounts($import_new_accounts)
    {
        $this->container['import_new_accounts'] = $import_new_accounts;

        return $this;
    }

    /**
     * Gets skip_positions_download
     *
     * @return bool
     */
    public function getSkipPositionsDownload()
    {
        return $this->container['skip_positions_download'];
    }

    /**
     * Sets skip_positions_download
     *
     * @param bool $skip_positions_download Whether to skip the download of transactions and securities or not. If set to true, then finAPI will download just the accounts list with the accounts' information (like account name, number, holder, etc), as well as the accounts' balances (if possible), but skip the download of transactions and securities. Default is false.<br/><br/>NOTES:<br/>&bull; If you skip the download of transactions and securities during an import or update, you can still download them on a later update (though you might not get all positions at a later point, because the date range in which the bank servers provide this data is usually limited). However, once finAPI has downloaded the transactions or securities for the first time, you will not be able to go back to skipping the download of transactions and securities! In other words: Once you make your first request with <code>skipPositionsDownload=false</code> for a certain bank connection, you will no longer be able to make a request with <code>skipPositionsDownload=true</code> for that same bank connection.<br/>&bull; If this bank connection is updated via finAPI's automatic batch update, then transactions and security positions <u>will</u> be downloaded in any case!<br/>&bull; For security accounts, skipping the downloading of the securities might result in the account's balance also not being downloaded.<br/>
     *
     * @return $this
     */
    public function setSkipPositionsDownload($skip_positions_download)
    {
        $this->container['skip_positions_download'] = $skip_positions_download;

        return $this;
    }

    /**
     * Gets load_owner_data
     *
     * @return bool
     */
    public function getLoadOwnerData()
    {
        return $this->container['load_owner_data'];
    }

    /**
     * Sets load_owner_data
     *
     * @param bool $load_owner_data Whether to load/refresh information about the bank connection owner(s) - see field 'owners'. Default value is 'false'. Note that owner data is NOT loaded/refreshed during finAPI's automatic bank connection update.
     *
     * @return $this
     */
    public function setLoadOwnerData($load_owner_data)
    {
        $this->container['load_owner_data'] = $load_owner_data;

        return $this;
    }

    /**
     * Gets account_references
     *
     * @return \Swagger\Client\Model\AccountReference[]
     */
    public function getAccountReferences()
    {
        return $this->container['account_references'];
    }

    /**
     * Sets account_references
     *
     * @param \Swagger\Client\Model\AccountReference[] $account_references List of accounts for which access is requested from the bank. It may only be passed if the bank interface has the DETAILED_CONSENT property set. if omitted, finAPI will use the list of existing accounts. Note that the parameter is still required if you want to import new accounts (i.e. call with importNewAccounts=true).
     *
     * @return $this
     */
    public function setAccountReferences($account_references)
    {
        $this->container['account_references'] = $account_references;

        return $this;
    }

    /**
     * Gets challenge_response
     *
     * @return string
     */
    public function getChallengeResponse()
    {
        return $this->container['challenge_response'];
    }

    /**
     * Sets challenge_response
     *
     * @param string $challenge_response NOTE: This field is DEPRECATED and will get removed at some point. Please refer to the 'multiStepAuthentication' field instead.<br/><br/>Challenge response. This field should be set only when the previous attempt of update the bank connection failed with HTTP code 510, i.e. the bank sent a challenge for the user for an additional authentication. In this case, this field must contain the response to the bank's challenge. Note that in the context of finAPI's web form flow, finAPI will automatically deal with getting the challenge response from the user via the web form.
     *
     * @return $this
     */
    public function setChallengeResponse($challenge_response)
    {
        $this->container['challenge_response'] = $challenge_response;

        return $this;
    }

    /**
     * Gets multi_step_authentication
     *
     * @return \Swagger\Client\Model\MultiStepAuthenticationCallback
     */
    public function getMultiStepAuthentication()
    {
        return $this->container['multi_step_authentication'];
    }

    /**
     * Sets multi_step_authentication
     *
     * @param \Swagger\Client\Model\MultiStepAuthenticationCallback $multi_step_authentication Container for multi-step authentication data. Required when a previous service call initiated a multi-step authentication.
     *
     * @return $this
     */
    public function setMultiStepAuthentication($multi_step_authentication)
    {
        $this->container['multi_step_authentication'] = $multi_step_authentication;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string $redirect_url Must only be passed when the used interface has the property REDIRECT_APPROACH and no web form flow is used. The user will be redirected to the given URL from the bank's website after having entered his credentials. Must use HTTPS protocol.
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

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


