<?php
/**
 * RenderTask
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
 * RenderTask Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RenderTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RenderTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_at' => 'string',
        'dashboard_filters' => 'string',
        'dashboard_id' => 'int',
        'dashboard_style' => 'string',
        'finalized_at' => 'string',
        'height' => 'int',
        'id' => 'string',
        'look_id' => 'int',
        'lookml_dashboard_id' => 'string',
        'query_id' => 'int',
        'query_runtime' => 'double',
        'render_runtime' => 'double',
        'result_format' => 'string',
        'runtime' => 'double',
        'status' => 'string',
        'status_detail' => 'string',
        'user_id' => 'int',
        'width' => 'int',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_at' => null,
        'dashboard_filters' => null,
        'dashboard_id' => 'int64',
        'dashboard_style' => null,
        'finalized_at' => null,
        'height' => 'int64',
        'id' => null,
        'look_id' => 'int64',
        'lookml_dashboard_id' => null,
        'query_id' => 'int64',
        'query_runtime' => 'double',
        'render_runtime' => 'double',
        'result_format' => null,
        'runtime' => 'double',
        'status' => null,
        'status_detail' => null,
        'user_id' => 'int64',
        'width' => 'int64',
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
        'created_at' => 'created_at',
        'dashboard_filters' => 'dashboard_filters',
        'dashboard_id' => 'dashboard_id',
        'dashboard_style' => 'dashboard_style',
        'finalized_at' => 'finalized_at',
        'height' => 'height',
        'id' => 'id',
        'look_id' => 'look_id',
        'lookml_dashboard_id' => 'lookml_dashboard_id',
        'query_id' => 'query_id',
        'query_runtime' => 'query_runtime',
        'render_runtime' => 'render_runtime',
        'result_format' => 'result_format',
        'runtime' => 'runtime',
        'status' => 'status',
        'status_detail' => 'status_detail',
        'user_id' => 'user_id',
        'width' => 'width',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'dashboard_filters' => 'setDashboardFilters',
        'dashboard_id' => 'setDashboardId',
        'dashboard_style' => 'setDashboardStyle',
        'finalized_at' => 'setFinalizedAt',
        'height' => 'setHeight',
        'id' => 'setId',
        'look_id' => 'setLookId',
        'lookml_dashboard_id' => 'setLookmlDashboardId',
        'query_id' => 'setQueryId',
        'query_runtime' => 'setQueryRuntime',
        'render_runtime' => 'setRenderRuntime',
        'result_format' => 'setResultFormat',
        'runtime' => 'setRuntime',
        'status' => 'setStatus',
        'status_detail' => 'setStatusDetail',
        'user_id' => 'setUserId',
        'width' => 'setWidth',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'dashboard_filters' => 'getDashboardFilters',
        'dashboard_id' => 'getDashboardId',
        'dashboard_style' => 'getDashboardStyle',
        'finalized_at' => 'getFinalizedAt',
        'height' => 'getHeight',
        'id' => 'getId',
        'look_id' => 'getLookId',
        'lookml_dashboard_id' => 'getLookmlDashboardId',
        'query_id' => 'getQueryId',
        'query_runtime' => 'getQueryRuntime',
        'render_runtime' => 'getRenderRuntime',
        'result_format' => 'getResultFormat',
        'runtime' => 'getRuntime',
        'status' => 'getStatus',
        'status_detail' => 'getStatusDetail',
        'user_id' => 'getUserId',
        'width' => 'getWidth',
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['dashboard_filters'] = isset($data['dashboard_filters']) ? $data['dashboard_filters'] : null;
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['dashboard_style'] = isset($data['dashboard_style']) ? $data['dashboard_style'] : null;
        $this->container['finalized_at'] = isset($data['finalized_at']) ? $data['finalized_at'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['lookml_dashboard_id'] = isset($data['lookml_dashboard_id']) ? $data['lookml_dashboard_id'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['query_runtime'] = isset($data['query_runtime']) ? $data['query_runtime'] : null;
        $this->container['render_runtime'] = isset($data['render_runtime']) ? $data['render_runtime'] : null;
        $this->container['result_format'] = isset($data['result_format']) ? $data['result_format'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_detail'] = isset($data['status_detail']) ? $data['status_detail'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
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
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at Date/Time render task was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets dashboard_filters
     *
     * @return string
     */
    public function getDashboardFilters()
    {
        return $this->container['dashboard_filters'];
    }

    /**
     * Sets dashboard_filters
     *
     * @param string $dashboard_filters Filter values to apply to the dashboard queries, in URL query format
     *
     * @return $this
     */
    public function setDashboardFilters($dashboard_filters)
    {
        $this->container['dashboard_filters'] = $dashboard_filters;

        return $this;
    }

    /**
     * Gets dashboard_id
     *
     * @return int
     */
    public function getDashboardId()
    {
        return $this->container['dashboard_id'];
    }

    /**
     * Sets dashboard_id
     *
     * @param int $dashboard_id Id of dashboard to render
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

        return $this;
    }

    /**
     * Gets dashboard_style
     *
     * @return string
     */
    public function getDashboardStyle()
    {
        return $this->container['dashboard_style'];
    }

    /**
     * Sets dashboard_style
     *
     * @param string $dashboard_style Dashboard layout style: single_column or tiled
     *
     * @return $this
     */
    public function setDashboardStyle($dashboard_style)
    {
        $this->container['dashboard_style'] = $dashboard_style;

        return $this;
    }

    /**
     * Gets finalized_at
     *
     * @return string
     */
    public function getFinalizedAt()
    {
        return $this->container['finalized_at'];
    }

    /**
     * Sets finalized_at
     *
     * @param string $finalized_at Date/Time render task was completed
     *
     * @return $this
     */
    public function setFinalizedAt($finalized_at)
    {
        $this->container['finalized_at'] = $finalized_at;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Output height in pixels. Flowed layouts may ignore this value.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
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
     * @param string $id Id of this render task
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param int $look_id Id of look to render
     *
     * @return $this
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

        return $this;
    }

    /**
     * Gets lookml_dashboard_id
     *
     * @return string
     */
    public function getLookmlDashboardId()
    {
        return $this->container['lookml_dashboard_id'];
    }

    /**
     * Sets lookml_dashboard_id
     *
     * @param string $lookml_dashboard_id Id of lookml dashboard to render
     *
     * @return $this
     */
    public function setLookmlDashboardId($lookml_dashboard_id)
    {
        $this->container['lookml_dashboard_id'] = $lookml_dashboard_id;

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
     * @param int $query_id Id of query to render
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets query_runtime
     *
     * @return double
     */
    public function getQueryRuntime()
    {
        return $this->container['query_runtime'];
    }

    /**
     * Sets query_runtime
     *
     * @param double $query_runtime Number of seconds elapsed running queries
     *
     * @return $this
     */
    public function setQueryRuntime($query_runtime)
    {
        $this->container['query_runtime'] = $query_runtime;

        return $this;
    }

    /**
     * Gets render_runtime
     *
     * @return double
     */
    public function getRenderRuntime()
    {
        return $this->container['render_runtime'];
    }

    /**
     * Sets render_runtime
     *
     * @param double $render_runtime Number of seconds elapsed rendering data
     *
     * @return $this
     */
    public function setRenderRuntime($render_runtime)
    {
        $this->container['render_runtime'] = $render_runtime;

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
     * @param string $result_format Output format: pdf, png, or jpg
     *
     * @return $this
     */
    public function setResultFormat($result_format)
    {
        $this->container['result_format'] = $result_format;

        return $this;
    }

    /**
     * Gets runtime
     *
     * @return double
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime
     *
     * @param double $runtime Total seconds elapsed for render task
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;

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
     * @param string $status Render task status: enqueued_for_query, querying, enqueued_for_render, rendering, success, failure
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_detail
     *
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->container['status_detail'];
    }

    /**
     * Sets status_detail
     *
     * @param string $status_detail Additional information about the current status
     *
     * @return $this
     */
    public function setStatusDetail($status_detail)
    {
        $this->container['status_detail'] = $status_detail;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id The user account permissions in which the render task will execute
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Output width in pixels
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


