<?php
/**
 * WriteScheduledPlan
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
 * WriteScheduledPlan Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WriteScheduledPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WriteScheduledPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'user_id' => 'int',
        'run_as_recipient' => 'bool',
        'enabled' => 'bool',
        'look_id' => 'int',
        'dashboard_id' => 'int',
        'lookml_dashboard_id' => 'string',
        'filters_string' => 'string',
        'dashboard_filters' => 'string',
        'require_results' => 'bool',
        'require_no_results' => 'bool',
        'require_change' => 'bool',
        'send_all_results' => 'bool',
        'crontab' => 'string',
        'datagroup' => 'string',
        'timezone' => 'string',
        'query_id' => 'string',
        'scheduled_plan_destination' => '\Funeralzone\LookerClient\Model\ScheduledPlanDestination[]',
        'run_once' => 'bool',
        'include_links' => 'bool',
        'pdf_paper_size' => 'string',
        'pdf_landscape' => 'bool',
        'embed' => 'bool',
        'color_theme' => 'string',
        'long_tables' => 'bool',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'user_id' => 'int64',
        'run_as_recipient' => null,
        'enabled' => null,
        'look_id' => 'int64',
        'dashboard_id' => 'int64',
        'lookml_dashboard_id' => null,
        'filters_string' => null,
        'dashboard_filters' => null,
        'require_results' => null,
        'require_no_results' => null,
        'require_change' => null,
        'send_all_results' => null,
        'crontab' => null,
        'datagroup' => null,
        'timezone' => null,
        'query_id' => null,
        'scheduled_plan_destination' => null,
        'run_once' => null,
        'include_links' => null,
        'pdf_paper_size' => null,
        'pdf_landscape' => null,
        'embed' => null,
        'color_theme' => null,
        'long_tables' => null,
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
        'user_id' => 'user_id',
        'run_as_recipient' => 'run_as_recipient',
        'enabled' => 'enabled',
        'look_id' => 'look_id',
        'dashboard_id' => 'dashboard_id',
        'lookml_dashboard_id' => 'lookml_dashboard_id',
        'filters_string' => 'filters_string',
        'dashboard_filters' => 'dashboard_filters',
        'require_results' => 'require_results',
        'require_no_results' => 'require_no_results',
        'require_change' => 'require_change',
        'send_all_results' => 'send_all_results',
        'crontab' => 'crontab',
        'datagroup' => 'datagroup',
        'timezone' => 'timezone',
        'query_id' => 'query_id',
        'scheduled_plan_destination' => 'scheduled_plan_destination',
        'run_once' => 'run_once',
        'include_links' => 'include_links',
        'pdf_paper_size' => 'pdf_paper_size',
        'pdf_landscape' => 'pdf_landscape',
        'embed' => 'embed',
        'color_theme' => 'color_theme',
        'long_tables' => 'long_tables',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'user_id' => 'setUserId',
        'run_as_recipient' => 'setRunAsRecipient',
        'enabled' => 'setEnabled',
        'look_id' => 'setLookId',
        'dashboard_id' => 'setDashboardId',
        'lookml_dashboard_id' => 'setLookmlDashboardId',
        'filters_string' => 'setFiltersString',
        'dashboard_filters' => 'setDashboardFilters',
        'require_results' => 'setRequireResults',
        'require_no_results' => 'setRequireNoResults',
        'require_change' => 'setRequireChange',
        'send_all_results' => 'setSendAllResults',
        'crontab' => 'setCrontab',
        'datagroup' => 'setDatagroup',
        'timezone' => 'setTimezone',
        'query_id' => 'setQueryId',
        'scheduled_plan_destination' => 'setScheduledPlanDestination',
        'run_once' => 'setRunOnce',
        'include_links' => 'setIncludeLinks',
        'pdf_paper_size' => 'setPdfPaperSize',
        'pdf_landscape' => 'setPdfLandscape',
        'embed' => 'setEmbed',
        'color_theme' => 'setColorTheme',
        'long_tables' => 'setLongTables',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'user_id' => 'getUserId',
        'run_as_recipient' => 'getRunAsRecipient',
        'enabled' => 'getEnabled',
        'look_id' => 'getLookId',
        'dashboard_id' => 'getDashboardId',
        'lookml_dashboard_id' => 'getLookmlDashboardId',
        'filters_string' => 'getFiltersString',
        'dashboard_filters' => 'getDashboardFilters',
        'require_results' => 'getRequireResults',
        'require_no_results' => 'getRequireNoResults',
        'require_change' => 'getRequireChange',
        'send_all_results' => 'getSendAllResults',
        'crontab' => 'getCrontab',
        'datagroup' => 'getDatagroup',
        'timezone' => 'getTimezone',
        'query_id' => 'getQueryId',
        'scheduled_plan_destination' => 'getScheduledPlanDestination',
        'run_once' => 'getRunOnce',
        'include_links' => 'getIncludeLinks',
        'pdf_paper_size' => 'getPdfPaperSize',
        'pdf_landscape' => 'getPdfLandscape',
        'embed' => 'getEmbed',
        'color_theme' => 'getColorTheme',
        'long_tables' => 'getLongTables',
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['run_as_recipient'] = isset($data['run_as_recipient']) ? $data['run_as_recipient'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['lookml_dashboard_id'] = isset($data['lookml_dashboard_id']) ? $data['lookml_dashboard_id'] : null;
        $this->container['filters_string'] = isset($data['filters_string']) ? $data['filters_string'] : null;
        $this->container['dashboard_filters'] = isset($data['dashboard_filters']) ? $data['dashboard_filters'] : null;
        $this->container['require_results'] = isset($data['require_results']) ? $data['require_results'] : null;
        $this->container['require_no_results'] = isset($data['require_no_results']) ? $data['require_no_results'] : null;
        $this->container['require_change'] = isset($data['require_change']) ? $data['require_change'] : null;
        $this->container['send_all_results'] = isset($data['send_all_results']) ? $data['send_all_results'] : null;
        $this->container['crontab'] = isset($data['crontab']) ? $data['crontab'] : null;
        $this->container['datagroup'] = isset($data['datagroup']) ? $data['datagroup'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['scheduled_plan_destination'] = isset($data['scheduled_plan_destination']) ? $data['scheduled_plan_destination'] : null;
        $this->container['run_once'] = isset($data['run_once']) ? $data['run_once'] : null;
        $this->container['include_links'] = isset($data['include_links']) ? $data['include_links'] : null;
        $this->container['pdf_paper_size'] = isset($data['pdf_paper_size']) ? $data['pdf_paper_size'] : null;
        $this->container['pdf_landscape'] = isset($data['pdf_landscape']) ? $data['pdf_landscape'] : null;
        $this->container['embed'] = isset($data['embed']) ? $data['embed'] : null;
        $this->container['color_theme'] = isset($data['color_theme']) ? $data['color_theme'] : null;
        $this->container['long_tables'] = isset($data['long_tables']) ? $data['long_tables'] : null;
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
     * @param string $name Name of this scheduled plan
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param int $user_id User Id which owns this scheduled plan
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets run_as_recipient
     *
     * @return bool
     */
    public function getRunAsRecipient()
    {
        return $this->container['run_as_recipient'];
    }

    /**
     * Sets run_as_recipient
     *
     * @param bool $run_as_recipient Whether schedule is run as recipient (only applicable for email recipients)
     *
     * @return $this
     */
    public function setRunAsRecipient($run_as_recipient)
    {
        $this->container['run_as_recipient'] = $run_as_recipient;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Whether the ScheduledPlan is enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * @param int $look_id Id of a look
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
     * @return int
     */
    public function getDashboardId()
    {
        return $this->container['dashboard_id'];
    }

    /**
     * Sets dashboard_id
     *
     * @param int $dashboard_id Id of a dashboard
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

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
     * @param string $lookml_dashboard_id Id of a LookML dashboard
     *
     * @return $this
     */
    public function setLookmlDashboardId($lookml_dashboard_id)
    {
        $this->container['lookml_dashboard_id'] = $lookml_dashboard_id;

        return $this;
    }

    /**
     * Gets filters_string
     *
     * @return string
     */
    public function getFiltersString()
    {
        return $this->container['filters_string'];
    }

    /**
     * Sets filters_string
     *
     * @param string $filters_string Query string to run look or dashboard with
     *
     * @return $this
     */
    public function setFiltersString($filters_string)
    {
        $this->container['filters_string'] = $filters_string;

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
     * @param string $dashboard_filters (DEPRECATED) Alias for filters_string field
     *
     * @return $this
     */
    public function setDashboardFilters($dashboard_filters)
    {
        $this->container['dashboard_filters'] = $dashboard_filters;

        return $this;
    }

    /**
     * Gets require_results
     *
     * @return bool
     */
    public function getRequireResults()
    {
        return $this->container['require_results'];
    }

    /**
     * Sets require_results
     *
     * @param bool $require_results Delivery should occur if running the dashboard or look returns results
     *
     * @return $this
     */
    public function setRequireResults($require_results)
    {
        $this->container['require_results'] = $require_results;

        return $this;
    }

    /**
     * Gets require_no_results
     *
     * @return bool
     */
    public function getRequireNoResults()
    {
        return $this->container['require_no_results'];
    }

    /**
     * Sets require_no_results
     *
     * @param bool $require_no_results Delivery should occur if the dashboard look does not return results
     *
     * @return $this
     */
    public function setRequireNoResults($require_no_results)
    {
        $this->container['require_no_results'] = $require_no_results;

        return $this;
    }

    /**
     * Gets require_change
     *
     * @return bool
     */
    public function getRequireChange()
    {
        return $this->container['require_change'];
    }

    /**
     * Sets require_change
     *
     * @param bool $require_change Delivery should occur if data have changed since the last run
     *
     * @return $this
     */
    public function setRequireChange($require_change)
    {
        $this->container['require_change'] = $require_change;

        return $this;
    }

    /**
     * Gets send_all_results
     *
     * @return bool
     */
    public function getSendAllResults()
    {
        return $this->container['send_all_results'];
    }

    /**
     * Sets send_all_results
     *
     * @param bool $send_all_results Will run an unlimited query and send all results.
     *
     * @return $this
     */
    public function setSendAllResults($send_all_results)
    {
        $this->container['send_all_results'] = $send_all_results;

        return $this;
    }

    /**
     * Gets crontab
     *
     * @return string
     */
    public function getCrontab()
    {
        return $this->container['crontab'];
    }

    /**
     * Sets crontab
     *
     * @param string $crontab Vixie-Style crontab specification when to run
     *
     * @return $this
     */
    public function setCrontab($crontab)
    {
        $this->container['crontab'] = $crontab;

        return $this;
    }

    /**
     * Gets datagroup
     *
     * @return string
     */
    public function getDatagroup()
    {
        return $this->container['datagroup'];
    }

    /**
     * Sets datagroup
     *
     * @param string $datagroup Name of a datagroup; if specified will run when datagroup triggered (can't be used with cron string)
     *
     * @return $this
     */
    public function setDatagroup($datagroup)
    {
        $this->container['datagroup'] = $datagroup;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone Timezone for interpreting the specified crontab (default is Looker instance timezone)
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets query_id
     *
     * @return string
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param string $query_id Query id
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets scheduled_plan_destination
     *
     * @return \Funeralzone\LookerClient\Model\ScheduledPlanDestination[]
     */
    public function getScheduledPlanDestination()
    {
        return $this->container['scheduled_plan_destination'];
    }

    /**
     * Sets scheduled_plan_destination
     *
     * @param \Funeralzone\LookerClient\Model\ScheduledPlanDestination[] $scheduled_plan_destination Scheduled plan destinations
     *
     * @return $this
     */
    public function setScheduledPlanDestination($scheduled_plan_destination)
    {
        $this->container['scheduled_plan_destination'] = $scheduled_plan_destination;

        return $this;
    }

    /**
     * Gets run_once
     *
     * @return bool
     */
    public function getRunOnce()
    {
        return $this->container['run_once'];
    }

    /**
     * Sets run_once
     *
     * @param bool $run_once Whether the plan in question should only be run once (usually for testing)
     *
     * @return $this
     */
    public function setRunOnce($run_once)
    {
        $this->container['run_once'] = $run_once;

        return $this;
    }

    /**
     * Gets include_links
     *
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->container['include_links'];
    }

    /**
     * Sets include_links
     *
     * @param bool $include_links Whether links back to Looker should be included in this ScheduledPlan
     *
     * @return $this
     */
    public function setIncludeLinks($include_links)
    {
        $this->container['include_links'] = $include_links;

        return $this;
    }

    /**
     * Gets pdf_paper_size
     *
     * @return string
     */
    public function getPdfPaperSize()
    {
        return $this->container['pdf_paper_size'];
    }

    /**
     * Sets pdf_paper_size
     *
     * @param string $pdf_paper_size The size of paper a PDF should be rendered for
     *
     * @return $this
     */
    public function setPdfPaperSize($pdf_paper_size)
    {
        $this->container['pdf_paper_size'] = $pdf_paper_size;

        return $this;
    }

    /**
     * Gets pdf_landscape
     *
     * @return bool
     */
    public function getPdfLandscape()
    {
        return $this->container['pdf_landscape'];
    }

    /**
     * Sets pdf_landscape
     *
     * @param bool $pdf_landscape Whether the paper should be landscape
     *
     * @return $this
     */
    public function setPdfLandscape($pdf_landscape)
    {
        $this->container['pdf_landscape'] = $pdf_landscape;

        return $this;
    }

    /**
     * Gets embed
     *
     * @return bool
     */
    public function getEmbed()
    {
        return $this->container['embed'];
    }

    /**
     * Sets embed
     *
     * @param bool $embed Whether this schedule is in an embed context or not
     *
     * @return $this
     */
    public function setEmbed($embed)
    {
        $this->container['embed'] = $embed;

        return $this;
    }

    /**
     * Gets color_theme
     *
     * @return string
     */
    public function getColorTheme()
    {
        return $this->container['color_theme'];
    }

    /**
     * Sets color_theme
     *
     * @param string $color_theme Color scheme of the dashboard if applicable
     *
     * @return $this
     */
    public function setColorTheme($color_theme)
    {
        $this->container['color_theme'] = $color_theme;

        return $this;
    }

    /**
     * Gets long_tables
     *
     * @return bool
     */
    public function getLongTables()
    {
        return $this->container['long_tables'];
    }

    /**
     * Sets long_tables
     *
     * @param bool $long_tables Whether or not to expand table vis to full length
     *
     * @return $this
     */
    public function setLongTables($long_tables)
    {
        $this->container['long_tables'] = $long_tables;

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


