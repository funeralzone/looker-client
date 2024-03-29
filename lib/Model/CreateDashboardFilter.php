<?php
/**
 * CreateDashboardFilter
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
 * CreateDashboardFilter Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateDashboardFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateDashboardFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'dashboard_id' => 'string',
        'name' => 'string',
        'title' => 'string',
        'type' => 'string',
        'default_value' => 'string',
        'model' => 'string',
        'explore' => 'string',
        'dimension' => 'string',
        'field' => 'map[string,string]',
        'row' => 'int',
        'listens_to_filters' => 'string[]',
        'allow_multiple_values' => 'bool',
        'required' => 'bool',
        'ui_config' => 'map[string,string]',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'dashboard_id' => null,
        'name' => null,
        'title' => null,
        'type' => null,
        'default_value' => null,
        'model' => null,
        'explore' => null,
        'dimension' => null,
        'field' => 'any',
        'row' => 'int64',
        'listens_to_filters' => null,
        'allow_multiple_values' => null,
        'required' => null,
        'ui_config' => 'any',
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
        'dashboard_id' => 'dashboard_id',
        'name' => 'name',
        'title' => 'title',
        'type' => 'type',
        'default_value' => 'default_value',
        'model' => 'model',
        'explore' => 'explore',
        'dimension' => 'dimension',
        'field' => 'field',
        'row' => 'row',
        'listens_to_filters' => 'listens_to_filters',
        'allow_multiple_values' => 'allow_multiple_values',
        'required' => 'required',
        'ui_config' => 'ui_config',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'dashboard_id' => 'setDashboardId',
        'name' => 'setName',
        'title' => 'setTitle',
        'type' => 'setType',
        'default_value' => 'setDefaultValue',
        'model' => 'setModel',
        'explore' => 'setExplore',
        'dimension' => 'setDimension',
        'field' => 'setField',
        'row' => 'setRow',
        'listens_to_filters' => 'setListensToFilters',
        'allow_multiple_values' => 'setAllowMultipleValues',
        'required' => 'setRequired',
        'ui_config' => 'setUiConfig',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'dashboard_id' => 'getDashboardId',
        'name' => 'getName',
        'title' => 'getTitle',
        'type' => 'getType',
        'default_value' => 'getDefaultValue',
        'model' => 'getModel',
        'explore' => 'getExplore',
        'dimension' => 'getDimension',
        'field' => 'getField',
        'row' => 'getRow',
        'listens_to_filters' => 'getListensToFilters',
        'allow_multiple_values' => 'getAllowMultipleValues',
        'required' => 'getRequired',
        'ui_config' => 'getUiConfig',
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
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['explore'] = isset($data['explore']) ? $data['explore'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['listens_to_filters'] = isset($data['listens_to_filters']) ? $data['listens_to_filters'] : null;
        $this->container['allow_multiple_values'] = isset($data['allow_multiple_values']) ? $data['allow_multiple_values'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['ui_config'] = isset($data['ui_config']) ? $data['ui_config'] : null;
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

        if ($this->container['dashboard_id'] === null) {
            $invalidProperties[] = "'dashboard_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * @param string $dashboard_id Id of Dashboard
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

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
     * @param string $name Name of filter
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of filter
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $type Type of filter: one of date, number, string, or field
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
     * @param string $default_value Default value of filter
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model Model of filter (required if type = field)
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets explore
     *
     * @return string
     */
    public function getExplore()
    {
        return $this->container['explore'];
    }

    /**
     * Sets explore
     *
     * @param string $explore Explore of filter (required if type = field)
     *
     * @return $this
     */
    public function setExplore($explore)
    {
        $this->container['explore'] = $explore;

        return $this;
    }

    /**
     * Gets dimension
     *
     * @return string
     */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
     * Sets dimension
     *
     * @param string $dimension Dimension of filter (required if type = field)
     *
     * @return $this
     */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;

        return $this;
    }

    /**
     * Gets field
     *
     * @return map[string,string]
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param map[string,string] $field Field information
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets row
     *
     * @return int
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     * @param int $row Display order of this filter relative to other filters
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

        return $this;
    }

    /**
     * Gets listens_to_filters
     *
     * @return string[]
     */
    public function getListensToFilters()
    {
        return $this->container['listens_to_filters'];
    }

    /**
     * Sets listens_to_filters
     *
     * @param string[] $listens_to_filters Array of listeners for faceted filters
     *
     * @return $this
     */
    public function setListensToFilters($listens_to_filters)
    {
        $this->container['listens_to_filters'] = $listens_to_filters;

        return $this;
    }

    /**
     * Gets allow_multiple_values
     *
     * @return bool
     */
    public function getAllowMultipleValues()
    {
        return $this->container['allow_multiple_values'];
    }

    /**
     * Sets allow_multiple_values
     *
     * @param bool $allow_multiple_values Whether the filter allows multiple filter values
     *
     * @return $this
     */
    public function setAllowMultipleValues($allow_multiple_values)
    {
        $this->container['allow_multiple_values'] = $allow_multiple_values;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Whether the filter requires a value to run the dashboard
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets ui_config
     *
     * @return map[string,string]
     */
    public function getUiConfig()
    {
        return $this->container['ui_config'];
    }

    /**
     * Sets ui_config
     *
     * @param map[string,string] $ui_config The visual configuration for this filter. Used to set up how the UI for this filter should appear.
     *
     * @return $this
     */
    public function setUiConfig($ui_config)
    {
        $this->container['ui_config'] = $ui_config;

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


