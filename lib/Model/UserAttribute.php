<?php
/**
 * UserAttribute
 *
 * PHP version 5
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 3.1 Reference
 *
 * ### Authorization  The Looker API uses Looker **API3** credentials for authorization and access control. Looker admins can create API3 credentials on Looker's **Admin/Users** page. Pass API3 credentials to the **_/login** endpoint to obtain a temporary access_token. Include that access_token in the Authorization header of Looker API requests. For details, see [Looker API Authorization](https://looker.com/docs/r/api/authorization)  ### Client SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. Client SDKs for a variety of programming languages can be generated from the Looker API's Swagger JSON metadata to streamline use of the Looker API in your applications. A client SDK for Ruby is available as an example. For more information, see [Looker API Client SDKs](https://looker.com/docs/r/api/client_sdks)  ### Try It Out!  The 'api-docs' page served by the Looker instance includes 'Try It Out!' buttons for each API method. After logging in with API3 credentials, you can use the \"Try It Out!\" buttons to call the API directly from the documentation page to interactively explore API features and responses.  Note! With great power comes great responsibility: The \"Try It Out!\" button makes API calls to your live Looker instance. Be especially careful with destructive API operations such as `delete_user` or similar. There is no \"undo\" for API operations.  ### Versioning  Future releases of Looker will expand this API release-by-release to securely expose more and more of the core power of Looker to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases. For more information, see [Looker API Versioning](https://looker.com/docs/r/api/versioning)  ### In This Release  This **API 3.1** is in active development. This is where support for new Looker features will appear as non-breaking additions - new functions, new optional parameters on existing functions, or new optional properties in existing types. Additive changes should not impact your existing application code that calls the Looker API. Your existing application code will not be aware of any new Looker API functionality until you choose to upgrade your app to use a newer Looker API client SDK release.  The following are a few examples of noteworthy items that have changed between API 3.0 and API 3.1. For more comprehensive coverage of API changes, please see the release notes for your Looker release.  ### Examples of new things added in API 3.1 (compared to API 3.0):  * [Dashboard construction](#!/3.1/Dashboard/) APIs * [Themes](#!/3.1/Theme/) and [custom color collections](#!/3.1/ColorCollection) APIs * Create and run [SQL Runner](#!/3.1/Query/run_sql_query) queries * Create and run [merged results](#!/3.1/Query/create_merge_query) queries * Create and modify [dashboard filters](#!/3.1/Dashboard/create_dashboard_filter) * Create and modify [password requirements](#!/3.1/Auth/password_config)  ### Deprecated in API 3.0  The following functions and properties have been deprecated in API 3.0.  They continue to exist and work in API 3.0 for the next several Looker releases but they have not been carried forward to API 3.1:  * Dashboard Prefetch functions * User access_filter functions * User API 1.0 credentials functions * Space.is_root and Space.is_user_root properties. Use Space.is_shared_root and Space.is_users_root instead.  ### Semantic changes in API 3.1:  * [all_looks()](#!/3.1/Look/all_looks) no longer includes soft-deleted looks, matching [all_dashboards()](#!/3.1/Dashboard/all_dashboards) behavior. You can find soft-deleted looks using [search_looks()](#!/3.1/Look/search_looks) with the `deleted` param set to True. * [all_spaces()](#!/3.1/Space/all_spaces) no longer includes duplicate items * [search_users()](#!/3.1/User/search_users) no longer accepts Y,y,1,0,N,n for Boolean params, only \"true\" and \"false\". * For greater client and network compatibility, [render_task_results](#!/3.1/RenderTask/render_task_results) now returns HTTP status **202 Accepted** instead of HTTP status **102 Processing** * [all_running_queries()](#!/3.1/Query/all_running_queries) and [kill_query](#!/3.1/Query/kill_query) functions have moved into the [Query](#!/3.1/Query/) function group.   If you have application code which relies on the old behavior of the APIs above, you may continue using the API 3.0 functions in this Looker release. We strongly suggest you update your code to use API 3.1 analogs as soon as possible.
 *
 * OpenAPI spec version: 3.1.0
 * Contact: support@looker.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Funeralzone\LookerClient\Model;

use \ArrayAccess;
use \Funeralzone\LookerClient\ObjectSerializer;

/**
 * UserAttribute Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'label' => 'string',
        'type' => 'string',
        'default_value' => 'string',
        'is_system' => 'bool',
        'is_permanent' => 'bool',
        'value_is_hidden' => 'bool',
        'user_can_view' => 'bool',
        'user_can_edit' => 'bool',
        'hidden_value_domain_whitelist' => 'string',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'label' => null,
        'type' => null,
        'default_value' => null,
        'is_system' => null,
        'is_permanent' => null,
        'value_is_hidden' => null,
        'user_can_view' => null,
        'user_can_edit' => null,
        'hidden_value_domain_whitelist' => null,
        'can' => null
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
        'name' => 'name',
        'label' => 'label',
        'type' => 'type',
        'default_value' => 'default_value',
        'is_system' => 'is_system',
        'is_permanent' => 'is_permanent',
        'value_is_hidden' => 'value_is_hidden',
        'user_can_view' => 'user_can_view',
        'user_can_edit' => 'user_can_edit',
        'hidden_value_domain_whitelist' => 'hidden_value_domain_whitelist',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'label' => 'setLabel',
        'type' => 'setType',
        'default_value' => 'setDefaultValue',
        'is_system' => 'setIsSystem',
        'is_permanent' => 'setIsPermanent',
        'value_is_hidden' => 'setValueIsHidden',
        'user_can_view' => 'setUserCanView',
        'user_can_edit' => 'setUserCanEdit',
        'hidden_value_domain_whitelist' => 'setHiddenValueDomainWhitelist',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'label' => 'getLabel',
        'type' => 'getType',
        'default_value' => 'getDefaultValue',
        'is_system' => 'getIsSystem',
        'is_permanent' => 'getIsPermanent',
        'value_is_hidden' => 'getValueIsHidden',
        'user_can_view' => 'getUserCanView',
        'user_can_edit' => 'getUserCanEdit',
        'hidden_value_domain_whitelist' => 'getHiddenValueDomainWhitelist',
        'can' => 'getCan'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['is_system'] = isset($data['is_system']) ? $data['is_system'] : null;
        $this->container['is_permanent'] = isset($data['is_permanent']) ? $data['is_permanent'] : null;
        $this->container['value_is_hidden'] = isset($data['value_is_hidden']) ? $data['value_is_hidden'] : null;
        $this->container['user_can_view'] = isset($data['user_can_view']) ? $data['user_can_view'] : null;
        $this->container['user_can_edit'] = isset($data['user_can_edit']) ? $data['user_can_edit'] : null;
        $this->container['hidden_value_domain_whitelist'] = isset($data['hidden_value_domain_whitelist']) ? $data['hidden_value_domain_whitelist'] : null;
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
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
     * @param int $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of user attribute
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Human-friendly label for user attribute
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of user attribute (\"string\", \"number\", \"datetime\", \"yesno\", \"zipcode\")
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string $default_value Default value for when no value is set on the user
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets is_system
     *
     * @return bool
     */
    public function getIsSystem()
    {
        return $this->container['is_system'];
    }

    /**
     * Sets is_system
     *
     * @param bool $is_system Attribute is a system default
     *
     * @return $this
     */
    public function setIsSystem($is_system)
    {
        $this->container['is_system'] = $is_system;

        return $this;
    }

    /**
     * Gets is_permanent
     *
     * @return bool
     */
    public function getIsPermanent()
    {
        return $this->container['is_permanent'];
    }

    /**
     * Sets is_permanent
     *
     * @param bool $is_permanent Attribute is permanent and cannot be deleted
     *
     * @return $this
     */
    public function setIsPermanent($is_permanent)
    {
        $this->container['is_permanent'] = $is_permanent;

        return $this;
    }

    /**
     * Gets value_is_hidden
     *
     * @return bool
     */
    public function getValueIsHidden()
    {
        return $this->container['value_is_hidden'];
    }

    /**
     * Sets value_is_hidden
     *
     * @param bool $value_is_hidden If true, users will not be able to view values of this attribute
     *
     * @return $this
     */
    public function setValueIsHidden($value_is_hidden)
    {
        $this->container['value_is_hidden'] = $value_is_hidden;

        return $this;
    }

    /**
     * Gets user_can_view
     *
     * @return bool
     */
    public function getUserCanView()
    {
        return $this->container['user_can_view'];
    }

    /**
     * Sets user_can_view
     *
     * @param bool $user_can_view Non-admin users can see the values of their attributes and use them in filters
     *
     * @return $this
     */
    public function setUserCanView($user_can_view)
    {
        $this->container['user_can_view'] = $user_can_view;

        return $this;
    }

    /**
     * Gets user_can_edit
     *
     * @return bool
     */
    public function getUserCanEdit()
    {
        return $this->container['user_can_edit'];
    }

    /**
     * Sets user_can_edit
     *
     * @param bool $user_can_edit Users can change the value of this attribute for themselves
     *
     * @return $this
     */
    public function setUserCanEdit($user_can_edit)
    {
        $this->container['user_can_edit'] = $user_can_edit;

        return $this;
    }

    /**
     * Gets hidden_value_domain_whitelist
     *
     * @return string
     */
    public function getHiddenValueDomainWhitelist()
    {
        return $this->container['hidden_value_domain_whitelist'];
    }

    /**
     * Sets hidden_value_domain_whitelist
     *
     * @param string $hidden_value_domain_whitelist Destinations to which a hidden attribute may be sent. Once set, cannot be edited.
     *
     * @return $this
     */
    public function setHiddenValueDomainWhitelist($hidden_value_domain_whitelist)
    {
        $this->container['hidden_value_domain_whitelist'] = $hidden_value_domain_whitelist;

        return $this;
    }

    /**
     * Gets can
     *
     * @return map[string,bool]
     */
    public function getCan()
    {
        return $this->container['can'];
    }

    /**
     * Sets can
     *
     * @param map[string,bool] $can Operations the current user is able to perform on this object
     *
     * @return $this
     */
    public function setCan($can)
    {
        $this->container['can'] = $can;

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


