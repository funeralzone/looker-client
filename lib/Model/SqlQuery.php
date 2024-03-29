<?php
/**
 * SqlQuery
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
 * SqlQuery Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SqlQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SqlQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'slug' => 'string',
        'last_runtime' => 'float',
        'run_count' => 'int',
        'browser_limit' => 'int',
        'sql' => 'string',
        'last_run_at' => 'string',
        'connection' => '\Funeralzone\LookerClient\Model\DBConnectionBase',
        'model_name' => 'string',
        'creator' => '\Funeralzone\LookerClient\Model\UserPublic',
        'explore_url' => 'string',
        'plaintext' => 'bool',
        'vis_config' => 'map[string,string]',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'slug' => null,
        'last_runtime' => 'float',
        'run_count' => 'int64',
        'browser_limit' => 'int64',
        'sql' => null,
        'last_run_at' => null,
        'connection' => null,
        'model_name' => null,
        'creator' => null,
        'explore_url' => null,
        'plaintext' => null,
        'vis_config' => 'any',
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
        'slug' => 'slug',
        'last_runtime' => 'last_runtime',
        'run_count' => 'run_count',
        'browser_limit' => 'browser_limit',
        'sql' => 'sql',
        'last_run_at' => 'last_run_at',
        'connection' => 'connection',
        'model_name' => 'model_name',
        'creator' => 'creator',
        'explore_url' => 'explore_url',
        'plaintext' => 'plaintext',
        'vis_config' => 'vis_config',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'slug' => 'setSlug',
        'last_runtime' => 'setLastRuntime',
        'run_count' => 'setRunCount',
        'browser_limit' => 'setBrowserLimit',
        'sql' => 'setSql',
        'last_run_at' => 'setLastRunAt',
        'connection' => 'setConnection',
        'model_name' => 'setModelName',
        'creator' => 'setCreator',
        'explore_url' => 'setExploreUrl',
        'plaintext' => 'setPlaintext',
        'vis_config' => 'setVisConfig',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'slug' => 'getSlug',
        'last_runtime' => 'getLastRuntime',
        'run_count' => 'getRunCount',
        'browser_limit' => 'getBrowserLimit',
        'sql' => 'getSql',
        'last_run_at' => 'getLastRunAt',
        'connection' => 'getConnection',
        'model_name' => 'getModelName',
        'creator' => 'getCreator',
        'explore_url' => 'getExploreUrl',
        'plaintext' => 'getPlaintext',
        'vis_config' => 'getVisConfig',
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
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['last_runtime'] = isset($data['last_runtime']) ? $data['last_runtime'] : null;
        $this->container['run_count'] = isset($data['run_count']) ? $data['run_count'] : null;
        $this->container['browser_limit'] = isset($data['browser_limit']) ? $data['browser_limit'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['last_run_at'] = isset($data['last_run_at']) ? $data['last_run_at'] : null;
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['model_name'] = isset($data['model_name']) ? $data['model_name'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['explore_url'] = isset($data['explore_url']) ? $data['explore_url'] : null;
        $this->container['plaintext'] = isset($data['plaintext']) ? $data['plaintext'] : null;
        $this->container['vis_config'] = isset($data['vis_config']) ? $data['vis_config'] : null;
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
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug The identifier of the SQL query
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets last_runtime
     *
     * @return float
     */
    public function getLastRuntime()
    {
        return $this->container['last_runtime'];
    }

    /**
     * Sets last_runtime
     *
     * @param float $last_runtime Number of seconds this query took to run the most recent time it was run
     *
     * @return $this
     */
    public function setLastRuntime($last_runtime)
    {
        $this->container['last_runtime'] = $last_runtime;

        return $this;
    }

    /**
     * Gets run_count
     *
     * @return int
     */
    public function getRunCount()
    {
        return $this->container['run_count'];
    }

    /**
     * Sets run_count
     *
     * @param int $run_count Number of times this query has been run
     *
     * @return $this
     */
    public function setRunCount($run_count)
    {
        $this->container['run_count'] = $run_count;

        return $this;
    }

    /**
     * Gets browser_limit
     *
     * @return int
     */
    public function getBrowserLimit()
    {
        return $this->container['browser_limit'];
    }

    /**
     * Sets browser_limit
     *
     * @param int $browser_limit Maximum number of rows this query will display on the SQL Runner page
     *
     * @return $this
     */
    public function setBrowserLimit($browser_limit)
    {
        $this->container['browser_limit'] = $browser_limit;

        return $this;
    }

    /**
     * Gets sql
     *
     * @return string
     */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
     * Sets sql
     *
     * @param string $sql SQL query text
     *
     * @return $this
     */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;

        return $this;
    }

    /**
     * Gets last_run_at
     *
     * @return string
     */
    public function getLastRunAt()
    {
        return $this->container['last_run_at'];
    }

    /**
     * Sets last_run_at
     *
     * @param string $last_run_at The most recent time this query was run
     *
     * @return $this
     */
    public function setLastRunAt($last_run_at)
    {
        $this->container['last_run_at'] = $last_run_at;

        return $this;
    }

    /**
     * Gets connection
     *
     * @return \Funeralzone\LookerClient\Model\DBConnectionBase
     */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
     * Sets connection
     *
     * @param \Funeralzone\LookerClient\Model\DBConnectionBase $connection Connection this query uses
     *
     * @return $this
     */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string $model_name Model name this query uses
     *
     * @return $this
     */
    public function setModelName($model_name)
    {
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return \Funeralzone\LookerClient\Model\UserPublic
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \Funeralzone\LookerClient\Model\UserPublic $creator User who created this SQL query
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets explore_url
     *
     * @return string
     */
    public function getExploreUrl()
    {
        return $this->container['explore_url'];
    }

    /**
     * Sets explore_url
     *
     * @param string $explore_url Explore page URL for this SQL query
     *
     * @return $this
     */
    public function setExploreUrl($explore_url)
    {
        $this->container['explore_url'] = $explore_url;

        return $this;
    }

    /**
     * Gets plaintext
     *
     * @return bool
     */
    public function getPlaintext()
    {
        return $this->container['plaintext'];
    }

    /**
     * Sets plaintext
     *
     * @param bool $plaintext Should this query be rendered as plain text
     *
     * @return $this
     */
    public function setPlaintext($plaintext)
    {
        $this->container['plaintext'] = $plaintext;

        return $this;
    }

    /**
     * Gets vis_config
     *
     * @return map[string,string]
     */
    public function getVisConfig()
    {
        return $this->container['vis_config'];
    }

    /**
     * Sets vis_config
     *
     * @param map[string,string] $vis_config Visualization configuration properties. These properties are typically opaque and differ based on the type of visualization used. There is no specified set of allowed keys. The values can be any type supported by JSON. A \"type\" key with a string value is often present, and is used by Looker to determine which visualization to present. Visualizations ignore unknown vis_config properties.
     *
     * @return $this
     */
    public function setVisConfig($vis_config)
    {
        $this->container['vis_config'] = $vis_config;

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


