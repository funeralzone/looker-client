<?php
/**
 * Dialect
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
 * Dialect Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Dialect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Dialect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'label' => 'string',
        'supports_cost_estimate' => 'bool',
        'supports_upload_tables' => 'bool',
        'persistent_table_indexes' => 'string',
        'persistent_table_sortkeys' => 'string',
        'persistent_table_distkey' => 'string',
        'supports_streaming' => 'bool',
        'automatically_run_sql_runner_snippets' => 'bool',
        'connection_tests' => 'string[]',
        'supports_inducer' => 'bool',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'label' => null,
        'supports_cost_estimate' => null,
        'supports_upload_tables' => null,
        'persistent_table_indexes' => null,
        'persistent_table_sortkeys' => null,
        'persistent_table_distkey' => null,
        'supports_streaming' => null,
        'automatically_run_sql_runner_snippets' => null,
        'connection_tests' => null,
        'supports_inducer' => null,
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
        'name' => 'name',
        'label' => 'label',
        'supports_cost_estimate' => 'supports_cost_estimate',
        'supports_upload_tables' => 'supports_upload_tables',
        'persistent_table_indexes' => 'persistent_table_indexes',
        'persistent_table_sortkeys' => 'persistent_table_sortkeys',
        'persistent_table_distkey' => 'persistent_table_distkey',
        'supports_streaming' => 'supports_streaming',
        'automatically_run_sql_runner_snippets' => 'automatically_run_sql_runner_snippets',
        'connection_tests' => 'connection_tests',
        'supports_inducer' => 'supports_inducer',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'label' => 'setLabel',
        'supports_cost_estimate' => 'setSupportsCostEstimate',
        'supports_upload_tables' => 'setSupportsUploadTables',
        'persistent_table_indexes' => 'setPersistentTableIndexes',
        'persistent_table_sortkeys' => 'setPersistentTableSortkeys',
        'persistent_table_distkey' => 'setPersistentTableDistkey',
        'supports_streaming' => 'setSupportsStreaming',
        'automatically_run_sql_runner_snippets' => 'setAutomaticallyRunSqlRunnerSnippets',
        'connection_tests' => 'setConnectionTests',
        'supports_inducer' => 'setSupportsInducer',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'label' => 'getLabel',
        'supports_cost_estimate' => 'getSupportsCostEstimate',
        'supports_upload_tables' => 'getSupportsUploadTables',
        'persistent_table_indexes' => 'getPersistentTableIndexes',
        'persistent_table_sortkeys' => 'getPersistentTableSortkeys',
        'persistent_table_distkey' => 'getPersistentTableDistkey',
        'supports_streaming' => 'getSupportsStreaming',
        'automatically_run_sql_runner_snippets' => 'getAutomaticallyRunSqlRunnerSnippets',
        'connection_tests' => 'getConnectionTests',
        'supports_inducer' => 'getSupportsInducer',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['supports_cost_estimate'] = isset($data['supports_cost_estimate']) ? $data['supports_cost_estimate'] : null;
        $this->container['supports_upload_tables'] = isset($data['supports_upload_tables']) ? $data['supports_upload_tables'] : null;
        $this->container['persistent_table_indexes'] = isset($data['persistent_table_indexes']) ? $data['persistent_table_indexes'] : null;
        $this->container['persistent_table_sortkeys'] = isset($data['persistent_table_sortkeys']) ? $data['persistent_table_sortkeys'] : null;
        $this->container['persistent_table_distkey'] = isset($data['persistent_table_distkey']) ? $data['persistent_table_distkey'] : null;
        $this->container['supports_streaming'] = isset($data['supports_streaming']) ? $data['supports_streaming'] : null;
        $this->container['automatically_run_sql_runner_snippets'] = isset($data['automatically_run_sql_runner_snippets']) ? $data['automatically_run_sql_runner_snippets'] : null;
        $this->container['connection_tests'] = isset($data['connection_tests']) ? $data['connection_tests'] : null;
        $this->container['supports_inducer'] = isset($data['supports_inducer']) ? $data['supports_inducer'] : null;
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
     * @param string $name The name of the dialect
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
     * @param string $label The human-readable label of the connection
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets supports_cost_estimate
     *
     * @return bool
     */
    public function getSupportsCostEstimate()
    {
        return $this->container['supports_cost_estimate'];
    }

    /**
     * Sets supports_cost_estimate
     *
     * @param bool $supports_cost_estimate Whether the dialect supports query cost estimates
     *
     * @return $this
     */
    public function setSupportsCostEstimate($supports_cost_estimate)
    {
        $this->container['supports_cost_estimate'] = $supports_cost_estimate;

        return $this;
    }

    /**
     * Gets supports_upload_tables
     *
     * @return bool
     */
    public function getSupportsUploadTables()
    {
        return $this->container['supports_upload_tables'];
    }

    /**
     * Sets supports_upload_tables
     *
     * @param bool $supports_upload_tables Whether the dialect supports uploading tables
     *
     * @return $this
     */
    public function setSupportsUploadTables($supports_upload_tables)
    {
        $this->container['supports_upload_tables'] = $supports_upload_tables;

        return $this;
    }

    /**
     * Gets persistent_table_indexes
     *
     * @return string
     */
    public function getPersistentTableIndexes()
    {
        return $this->container['persistent_table_indexes'];
    }

    /**
     * Sets persistent_table_indexes
     *
     * @param string $persistent_table_indexes PDT index columns
     *
     * @return $this
     */
    public function setPersistentTableIndexes($persistent_table_indexes)
    {
        $this->container['persistent_table_indexes'] = $persistent_table_indexes;

        return $this;
    }

    /**
     * Gets persistent_table_sortkeys
     *
     * @return string
     */
    public function getPersistentTableSortkeys()
    {
        return $this->container['persistent_table_sortkeys'];
    }

    /**
     * Sets persistent_table_sortkeys
     *
     * @param string $persistent_table_sortkeys PDT sortkey columns
     *
     * @return $this
     */
    public function setPersistentTableSortkeys($persistent_table_sortkeys)
    {
        $this->container['persistent_table_sortkeys'] = $persistent_table_sortkeys;

        return $this;
    }

    /**
     * Gets persistent_table_distkey
     *
     * @return string
     */
    public function getPersistentTableDistkey()
    {
        return $this->container['persistent_table_distkey'];
    }

    /**
     * Sets persistent_table_distkey
     *
     * @param string $persistent_table_distkey PDT distkey column
     *
     * @return $this
     */
    public function setPersistentTableDistkey($persistent_table_distkey)
    {
        $this->container['persistent_table_distkey'] = $persistent_table_distkey;

        return $this;
    }

    /**
     * Gets supports_streaming
     *
     * @return bool
     */
    public function getSupportsStreaming()
    {
        return $this->container['supports_streaming'];
    }

    /**
     * Sets supports_streaming
     *
     * @param bool $supports_streaming Suports streaming results
     *
     * @return $this
     */
    public function setSupportsStreaming($supports_streaming)
    {
        $this->container['supports_streaming'] = $supports_streaming;

        return $this;
    }

    /**
     * Gets automatically_run_sql_runner_snippets
     *
     * @return bool
     */
    public function getAutomaticallyRunSqlRunnerSnippets()
    {
        return $this->container['automatically_run_sql_runner_snippets'];
    }

    /**
     * Sets automatically_run_sql_runner_snippets
     *
     * @param bool $automatically_run_sql_runner_snippets Should SQL Runner snippets automatically be run
     *
     * @return $this
     */
    public function setAutomaticallyRunSqlRunnerSnippets($automatically_run_sql_runner_snippets)
    {
        $this->container['automatically_run_sql_runner_snippets'] = $automatically_run_sql_runner_snippets;

        return $this;
    }

    /**
     * Gets connection_tests
     *
     * @return string[]
     */
    public function getConnectionTests()
    {
        return $this->container['connection_tests'];
    }

    /**
     * Sets connection_tests
     *
     * @param string[] $connection_tests Array of names of the tests that can be run on a connection using this dialect
     *
     * @return $this
     */
    public function setConnectionTests($connection_tests)
    {
        $this->container['connection_tests'] = $connection_tests;

        return $this;
    }

    /**
     * Gets supports_inducer
     *
     * @return bool
     */
    public function getSupportsInducer()
    {
        return $this->container['supports_inducer'];
    }

    /**
     * Sets supports_inducer
     *
     * @param bool $supports_inducer Is supported with the inducer (i.e. generate from sql)
     *
     * @return $this
     */
    public function setSupportsInducer($supports_inducer)
    {
        $this->container['supports_inducer'] = $supports_inducer;

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


