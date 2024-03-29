<?php
/**
 * QueryTask
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
 * QueryTask Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueryTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueryTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'query_id' => 'int',
        'query' => '\Funeralzone\LookerClient\Model\Query',
        'generate_links' => 'bool',
        'force_production' => 'bool',
        'path_prefix' => 'string',
        'cache' => 'bool',
        'server_table_calcs' => 'bool',
        'cache_only' => 'bool',
        'cache_key' => 'string',
        'status' => 'string',
        'source' => 'string',
        'runtime' => 'float',
        'rebuild_pdts' => 'bool',
        'result_source' => 'string',
        'look_id' => 'int',
        'dashboard_id' => 'string',
        'result_format' => 'string',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'query_id' => 'int64',
        'query' => null,
        'generate_links' => null,
        'force_production' => null,
        'path_prefix' => null,
        'cache' => null,
        'server_table_calcs' => null,
        'cache_only' => null,
        'cache_key' => null,
        'status' => null,
        'source' => null,
        'runtime' => 'float',
        'rebuild_pdts' => null,
        'result_source' => null,
        'look_id' => 'int64',
        'dashboard_id' => null,
        'result_format' => null,
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
        'query_id' => 'query_id',
        'query' => 'query',
        'generate_links' => 'generate_links',
        'force_production' => 'force_production',
        'path_prefix' => 'path_prefix',
        'cache' => 'cache',
        'server_table_calcs' => 'server_table_calcs',
        'cache_only' => 'cache_only',
        'cache_key' => 'cache_key',
        'status' => 'status',
        'source' => 'source',
        'runtime' => 'runtime',
        'rebuild_pdts' => 'rebuild_pdts',
        'result_source' => 'result_source',
        'look_id' => 'look_id',
        'dashboard_id' => 'dashboard_id',
        'result_format' => 'result_format',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'query_id' => 'setQueryId',
        'query' => 'setQuery',
        'generate_links' => 'setGenerateLinks',
        'force_production' => 'setForceProduction',
        'path_prefix' => 'setPathPrefix',
        'cache' => 'setCache',
        'server_table_calcs' => 'setServerTableCalcs',
        'cache_only' => 'setCacheOnly',
        'cache_key' => 'setCacheKey',
        'status' => 'setStatus',
        'source' => 'setSource',
        'runtime' => 'setRuntime',
        'rebuild_pdts' => 'setRebuildPdts',
        'result_source' => 'setResultSource',
        'look_id' => 'setLookId',
        'dashboard_id' => 'setDashboardId',
        'result_format' => 'setResultFormat',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'query_id' => 'getQueryId',
        'query' => 'getQuery',
        'generate_links' => 'getGenerateLinks',
        'force_production' => 'getForceProduction',
        'path_prefix' => 'getPathPrefix',
        'cache' => 'getCache',
        'server_table_calcs' => 'getServerTableCalcs',
        'cache_only' => 'getCacheOnly',
        'cache_key' => 'getCacheKey',
        'status' => 'getStatus',
        'source' => 'getSource',
        'runtime' => 'getRuntime',
        'rebuild_pdts' => 'getRebuildPdts',
        'result_source' => 'getResultSource',
        'look_id' => 'getLookId',
        'dashboard_id' => 'getDashboardId',
        'result_format' => 'getResultFormat',
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
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['generate_links'] = isset($data['generate_links']) ? $data['generate_links'] : null;
        $this->container['force_production'] = isset($data['force_production']) ? $data['force_production'] : null;
        $this->container['path_prefix'] = isset($data['path_prefix']) ? $data['path_prefix'] : null;
        $this->container['cache'] = isset($data['cache']) ? $data['cache'] : null;
        $this->container['server_table_calcs'] = isset($data['server_table_calcs']) ? $data['server_table_calcs'] : null;
        $this->container['cache_only'] = isset($data['cache_only']) ? $data['cache_only'] : null;
        $this->container['cache_key'] = isset($data['cache_key']) ? $data['cache_key'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['rebuild_pdts'] = isset($data['rebuild_pdts']) ? $data['rebuild_pdts'] : null;
        $this->container['result_source'] = isset($data['result_source']) ? $data['result_source'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['result_format'] = isset($data['result_format']) ? $data['result_format'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets query_id
     *
     * @return int
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param int $query_id Id of query
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets query
     *
     * @return \Funeralzone\LookerClient\Model\Query
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param \Funeralzone\LookerClient\Model\Query $query Query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets generate_links
     *
     * @return bool
     */
    public function getGenerateLinks()
    {
        return $this->container['generate_links'];
    }

    /**
     * Sets generate_links
     *
     * @param bool $generate_links whether or not to generate links in the query response.
     *
     * @return $this
     */
    public function setGenerateLinks($generate_links)
    {
        $this->container['generate_links'] = $generate_links;

        return $this;
    }

    /**
     * Gets force_production
     *
     * @return bool
     */
    public function getForceProduction()
    {
        return $this->container['force_production'];
    }

    /**
     * Sets force_production
     *
     * @param bool $force_production Use production models to run query (even is user is in dev mode).
     *
     * @return $this
     */
    public function setForceProduction($force_production)
    {
        $this->container['force_production'] = $force_production;

        return $this;
    }

    /**
     * Gets path_prefix
     *
     * @return string
     */
    public function getPathPrefix()
    {
        return $this->container['path_prefix'];
    }

    /**
     * Sets path_prefix
     *
     * @param string $path_prefix Prefix to use for drill links.
     *
     * @return $this
     */
    public function setPathPrefix($path_prefix)
    {
        $this->container['path_prefix'] = $path_prefix;

        return $this;
    }

    /**
     * Gets cache
     *
     * @return bool
     */
    public function getCache()
    {
        return $this->container['cache'];
    }

    /**
     * Sets cache
     *
     * @param bool $cache Whether or not to use the cache
     *
     * @return $this
     */
    public function setCache($cache)
    {
        $this->container['cache'] = $cache;

        return $this;
    }

    /**
     * Gets server_table_calcs
     *
     * @return bool
     */
    public function getServerTableCalcs()
    {
        return $this->container['server_table_calcs'];
    }

    /**
     * Sets server_table_calcs
     *
     * @param bool $server_table_calcs Whether or not to run table calculations on the server
     *
     * @return $this
     */
    public function setServerTableCalcs($server_table_calcs)
    {
        $this->container['server_table_calcs'] = $server_table_calcs;

        return $this;
    }

    /**
     * Gets cache_only
     *
     * @return bool
     */
    public function getCacheOnly()
    {
        return $this->container['cache_only'];
    }

    /**
     * Sets cache_only
     *
     * @param bool $cache_only Retrieve any results from cache even if the results have expired.
     *
     * @return $this
     */
    public function setCacheOnly($cache_only)
    {
        $this->container['cache_only'] = $cache_only;

        return $this;
    }

    /**
     * Gets cache_key
     *
     * @return string
     */
    public function getCacheKey()
    {
        return $this->container['cache_key'];
    }

    /**
     * Sets cache_key
     *
     * @param string $cache_key cache key used to cache query.
     *
     * @return $this
     */
    public function setCacheKey($cache_key)
    {
        $this->container['cache_key'] = $cache_key;

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
     * @param string $status Status of query task.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Source of query task.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets runtime
     *
     * @return float
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime
     *
     * @param float $runtime Runtime of prior queries.
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;

        return $this;
    }

    /**
     * Gets rebuild_pdts
     *
     * @return bool
     */
    public function getRebuildPdts()
    {
        return $this->container['rebuild_pdts'];
    }

    /**
     * Sets rebuild_pdts
     *
     * @param bool $rebuild_pdts Rebuild PDTS used in query.
     *
     * @return $this
     */
    public function setRebuildPdts($rebuild_pdts)
    {
        $this->container['rebuild_pdts'] = $rebuild_pdts;

        return $this;
    }

    /**
     * Gets result_source
     *
     * @return string
     */
    public function getResultSource()
    {
        return $this->container['result_source'];
    }

    /**
     * Sets result_source
     *
     * @param string $result_source Source of the results of the query.
     *
     * @return $this
     */
    public function setResultSource($result_source)
    {
        $this->container['result_source'] = $result_source;

        return $this;
    }

    /**
     * Gets look_id
     *
     * @return int
     */
    public function getLookId()
    {
        return $this->container['look_id'];
    }

    /**
     * Sets look_id
     *
     * @param int $look_id Id of look associated with query.
     *
     * @return $this
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

        return $this;
    }

    /**
     * Gets dashboard_id
     *
     * @return string
     */
    public function getDashboardId()
    {
        return $this->container['dashboard_id'];
    }

    /**
     * Sets dashboard_id
     *
     * @param string $dashboard_id Id of dashboard associated with query.
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

        return $this;
    }

    /**
     * Gets result_format
     *
     * @return string
     */
    public function getResultFormat()
    {
        return $this->container['result_format'];
    }

    /**
     * Sets result_format
     *
     * @param string $result_format The data format of the query results.
     *
     * @return $this
     */
    public function setResultFormat($result_format)
    {
        $this->container['result_format'] = $result_format;

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


