<?php
/**
 * EmbedSsoUrlParams
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
 * EmbedSsoUrlParams Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmbedSsoUrlParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmbedSsoUrlParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'target_url' => 'string',
        'session_length' => 'int',
        'external_user_id' => 'string',
        'force_logout_login' => 'bool',
        'first_name' => 'string',
        'last_name' => 'string',
        'user_timezone' => 'string',
        'permissions' => 'string[]',
        'models' => 'string[]',
        'group_ids' => 'int[]',
        'external_group_id' => 'int',
        'user_attributes' => 'map[string,string]',
        'secret_id' => 'int',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'target_url' => 'uri',
        'session_length' => 'int64',
        'external_user_id' => null,
        'force_logout_login' => null,
        'first_name' => null,
        'last_name' => null,
        'user_timezone' => null,
        'permissions' => null,
        'models' => null,
        'group_ids' => 'int64',
        'external_group_id' => 'int64',
        'user_attributes' => 'any',
        'secret_id' => 'int64',
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
        'target_url' => 'target_url',
        'session_length' => 'session_length',
        'external_user_id' => 'external_user_id',
        'force_logout_login' => 'force_logout_login',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'user_timezone' => 'user_timezone',
        'permissions' => 'permissions',
        'models' => 'models',
        'group_ids' => 'group_ids',
        'external_group_id' => 'external_group_id',
        'user_attributes' => 'user_attributes',
        'secret_id' => 'secret_id',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target_url' => 'setTargetUrl',
        'session_length' => 'setSessionLength',
        'external_user_id' => 'setExternalUserId',
        'force_logout_login' => 'setForceLogoutLogin',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'user_timezone' => 'setUserTimezone',
        'permissions' => 'setPermissions',
        'models' => 'setModels',
        'group_ids' => 'setGroupIds',
        'external_group_id' => 'setExternalGroupId',
        'user_attributes' => 'setUserAttributes',
        'secret_id' => 'setSecretId',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target_url' => 'getTargetUrl',
        'session_length' => 'getSessionLength',
        'external_user_id' => 'getExternalUserId',
        'force_logout_login' => 'getForceLogoutLogin',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'user_timezone' => 'getUserTimezone',
        'permissions' => 'getPermissions',
        'models' => 'getModels',
        'group_ids' => 'getGroupIds',
        'external_group_id' => 'getExternalGroupId',
        'user_attributes' => 'getUserAttributes',
        'secret_id' => 'getSecretId',
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
        $this->container['target_url'] = isset($data['target_url']) ? $data['target_url'] : null;
        $this->container['session_length'] = isset($data['session_length']) ? $data['session_length'] : null;
        $this->container['external_user_id'] = isset($data['external_user_id']) ? $data['external_user_id'] : null;
        $this->container['force_logout_login'] = isset($data['force_logout_login']) ? $data['force_logout_login'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['user_timezone'] = isset($data['user_timezone']) ? $data['user_timezone'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['models'] = isset($data['models']) ? $data['models'] : null;
        $this->container['group_ids'] = isset($data['group_ids']) ? $data['group_ids'] : null;
        $this->container['external_group_id'] = isset($data['external_group_id']) ? $data['external_group_id'] : null;
        $this->container['user_attributes'] = isset($data['user_attributes']) ? $data['user_attributes'] : null;
        $this->container['secret_id'] = isset($data['secret_id']) ? $data['secret_id'] : null;
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

        if ($this->container['target_url'] === null) {
            $invalidProperties[] = "'target_url' can't be null";
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
     * Gets target_url
     *
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->container['target_url'];
    }

    /**
     * Sets target_url
     *
     * @param string $target_url The complete URL of the Looker UI page to display in the embed context. For example, to display the dashboard with id 34, `target_url` would look like: `https://mycompany.looker.com:9999/dashboards/34`. `target_uri` MUST contain a scheme (HTTPS), domain name, and URL path. Port must be included if it is required to reach the Looker server from browser clients. If the Looker instance is behind a load balancer or other proxy, `target_uri` must be the public-facing domain name and port required to reach the Looker instance, not the actual internal network machine name of the Looker instance.
     *
     * @return $this
     */
    public function setTargetUrl($target_url)
    {
        $this->container['target_url'] = $target_url;

        return $this;
    }

    /**
     * Gets session_length
     *
     * @return int
     */
    public function getSessionLength()
    {
        return $this->container['session_length'];
    }

    /**
     * Sets session_length
     *
     * @param int $session_length Number of seconds the SSO embed session will be valid after the embed session is started. Defaults to 300 seconds. Maximum session length accepted is 2592000 seconds (30 days).
     *
     * @return $this
     */
    public function setSessionLength($session_length)
    {
        $this->container['session_length'] = $session_length;

        return $this;
    }

    /**
     * Gets external_user_id
     *
     * @return string
     */
    public function getExternalUserId()
    {
        return $this->container['external_user_id'];
    }

    /**
     * Sets external_user_id
     *
     * @param string $external_user_id A value from an external system that uniquely identifies the embed user. Since the user_ids of Looker embed users may change with every embed session, external_user_id provides a way to assign a known, stable user identifier across multiple embed sessions.
     *
     * @return $this
     */
    public function setExternalUserId($external_user_id)
    {
        $this->container['external_user_id'] = $external_user_id;

        return $this;
    }

    /**
     * Gets force_logout_login
     *
     * @return bool
     */
    public function getForceLogoutLogin()
    {
        return $this->container['force_logout_login'];
    }

    /**
     * Sets force_logout_login
     *
     * @param bool $force_logout_login When true, the embed session will purge any residual Looker login state (such as in browser cookies) before creating a new login state with the given embed user info. Defaults to true.
     *
     * @return $this
     */
    public function setForceLogoutLogin($force_logout_login)
    {
        $this->container['force_logout_login'] = $force_logout_login;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name of the embed user. Defaults to 'Embed' if not specified
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name of the embed user. Defaults to 'User' if not specified
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets user_timezone
     *
     * @return string
     */
    public function getUserTimezone()
    {
        return $this->container['user_timezone'];
    }

    /**
     * Sets user_timezone
     *
     * @param string $user_timezone Sets the user timezone for the embed user session, if the User Specific Timezones setting is enabled in the Looker admin settings. A value of `null` forces the embed user to use the Looker Application Default Timezone. You MUST omit this property from the request if the User Specific Timezones setting is disabled. Timezone values are validated against the IANA Timezone standard and can be seen in the Application Time Zone dropdown list on the Looker General Settings admin page.
     *
     * @return $this
     */
    public function setUserTimezone($user_timezone)
    {
        $this->container['user_timezone'] = $user_timezone;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string[] $permissions List of Looker permission names to grant to the embed user. Requested permissions will be filtered to permissions allowed for embed sessions.
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets models
     *
     * @return string[]
     */
    public function getModels()
    {
        return $this->container['models'];
    }

    /**
     * Sets models
     *
     * @param string[] $models List of model names that the embed user may access
     *
     * @return $this
     */
    public function setModels($models)
    {
        $this->container['models'] = $models;

        return $this;
    }

    /**
     * Gets group_ids
     *
     * @return int[]
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     *
     * @param int[] $group_ids List of Looker group ids in which to enroll the embed user
     *
     * @return $this
     */
    public function setGroupIds($group_ids)
    {
        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets external_group_id
     *
     * @return int
     */
    public function getExternalGroupId()
    {
        return $this->container['external_group_id'];
    }

    /**
     * Sets external_group_id
     *
     * @param int $external_group_id A unique value identifying an embed-exclusive group. Multiple embed users using the same `external_group_id` value will be able to share Looker content with each other. Content and embed users associated with the `external_group_id` will not be accessible to normal Looker users or embed users not associated with this `external_group_id`.
     *
     * @return $this
     */
    public function setExternalGroupId($external_group_id)
    {
        $this->container['external_group_id'] = $external_group_id;

        return $this;
    }

    /**
     * Gets user_attributes
     *
     * @return map[string,string]
     */
    public function getUserAttributes()
    {
        return $this->container['user_attributes'];
    }

    /**
     * Sets user_attributes
     *
     * @param map[string,string] $user_attributes A dictionary of name-value pairs associating a Looker user attribute name with a value.
     *
     * @return $this
     */
    public function setUserAttributes($user_attributes)
    {
        $this->container['user_attributes'] = $user_attributes;

        return $this;
    }

    /**
     * Gets secret_id
     *
     * @return int
     */
    public function getSecretId()
    {
        return $this->container['secret_id'];
    }

    /**
     * Sets secret_id
     *
     * @param int $secret_id Id of the embed secret to use to sign this SSO url. If specified, the value must be an id of a valid (active) secret defined in the Looker instance. If not specified, the URL will be signed with the newest active embed secret defined in the Looker instance.
     *
     * @return $this
     */
    public function setSecretId($secret_id)
    {
        $this->container['secret_id'] = $secret_id;

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


