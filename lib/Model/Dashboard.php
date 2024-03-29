<?php
/**
 * Dashboard
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
 * Dashboard Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Dashboard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Dashboard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'content_favorite_id' => 'int',
        'content_metadata_id' => 'int',
        'description' => 'string',
        'hidden' => 'bool',
        'id' => 'string',
        'model' => '\Funeralzone\LookerClient\Model\LookModel',
        'query_timezone' => 'string',
        'readonly' => 'bool',
        'refresh_interval' => 'string',
        'refresh_interval_to_i' => 'int',
        'space' => '\Funeralzone\LookerClient\Model\SpaceBase',
        'folder' => '\Funeralzone\LookerClient\Model\FolderBase',
        'title' => 'string',
        'user_id' => 'int',
        'background_color' => 'string',
        'created_at' => '\DateTime',
        'dashboard_elements' => '\Funeralzone\LookerClient\Model\DashboardElement[]',
        'dashboard_filters' => '\Funeralzone\LookerClient\Model\DashboardFilter[]',
        'dashboard_layouts' => '\Funeralzone\LookerClient\Model\DashboardLayout[]',
        'deleted' => 'bool',
        'deleted_at' => '\DateTime',
        'deleter_id' => 'int',
        'edit_uri' => 'string',
        'favorite_count' => 'int',
        'last_accessed_at' => '\DateTime',
        'last_viewed_at' => '\DateTime',
        'load_configuration' => 'string',
        'lookml_link_id' => 'string',
        'show_filters_bar' => 'bool',
        'show_title' => 'bool',
        'slug' => 'string',
        'space_id' => 'string',
        'folder_id' => 'string',
        'text_tile_text_color' => 'string',
        'tile_background_color' => 'string',
        'tile_text_color' => 'string',
        'title_color' => 'string',
        'view_count' => 'int',
        'settings' => '\Funeralzone\LookerClient\Model\DashboardSettings',
        'preferred_viewer' => 'string',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'content_favorite_id' => 'int64',
        'content_metadata_id' => 'int64',
        'description' => null,
        'hidden' => null,
        'id' => null,
        'model' => null,
        'query_timezone' => null,
        'readonly' => null,
        'refresh_interval' => null,
        'refresh_interval_to_i' => 'int64',
        'space' => null,
        'folder' => null,
        'title' => null,
        'user_id' => 'int64',
        'background_color' => null,
        'created_at' => 'date-time',
        'dashboard_elements' => null,
        'dashboard_filters' => null,
        'dashboard_layouts' => null,
        'deleted' => null,
        'deleted_at' => 'date-time',
        'deleter_id' => 'int64',
        'edit_uri' => 'uri',
        'favorite_count' => 'int64',
        'last_accessed_at' => 'date-time',
        'last_viewed_at' => 'date-time',
        'load_configuration' => null,
        'lookml_link_id' => null,
        'show_filters_bar' => null,
        'show_title' => null,
        'slug' => null,
        'space_id' => null,
        'folder_id' => null,
        'text_tile_text_color' => null,
        'tile_background_color' => null,
        'tile_text_color' => null,
        'title_color' => null,
        'view_count' => 'int64',
        'settings' => null,
        'preferred_viewer' => null,
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
        'content_favorite_id' => 'content_favorite_id',
        'content_metadata_id' => 'content_metadata_id',
        'description' => 'description',
        'hidden' => 'hidden',
        'id' => 'id',
        'model' => 'model',
        'query_timezone' => 'query_timezone',
        'readonly' => 'readonly',
        'refresh_interval' => 'refresh_interval',
        'refresh_interval_to_i' => 'refresh_interval_to_i',
        'space' => 'space',
        'folder' => 'folder',
        'title' => 'title',
        'user_id' => 'user_id',
        'background_color' => 'background_color',
        'created_at' => 'created_at',
        'dashboard_elements' => 'dashboard_elements',
        'dashboard_filters' => 'dashboard_filters',
        'dashboard_layouts' => 'dashboard_layouts',
        'deleted' => 'deleted',
        'deleted_at' => 'deleted_at',
        'deleter_id' => 'deleter_id',
        'edit_uri' => 'edit_uri',
        'favorite_count' => 'favorite_count',
        'last_accessed_at' => 'last_accessed_at',
        'last_viewed_at' => 'last_viewed_at',
        'load_configuration' => 'load_configuration',
        'lookml_link_id' => 'lookml_link_id',
        'show_filters_bar' => 'show_filters_bar',
        'show_title' => 'show_title',
        'slug' => 'slug',
        'space_id' => 'space_id',
        'folder_id' => 'folder_id',
        'text_tile_text_color' => 'text_tile_text_color',
        'tile_background_color' => 'tile_background_color',
        'tile_text_color' => 'tile_text_color',
        'title_color' => 'title_color',
        'view_count' => 'view_count',
        'settings' => 'settings',
        'preferred_viewer' => 'preferred_viewer',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_favorite_id' => 'setContentFavoriteId',
        'content_metadata_id' => 'setContentMetadataId',
        'description' => 'setDescription',
        'hidden' => 'setHidden',
        'id' => 'setId',
        'model' => 'setModel',
        'query_timezone' => 'setQueryTimezone',
        'readonly' => 'setReadonly',
        'refresh_interval' => 'setRefreshInterval',
        'refresh_interval_to_i' => 'setRefreshIntervalToI',
        'space' => 'setSpace',
        'folder' => 'setFolder',
        'title' => 'setTitle',
        'user_id' => 'setUserId',
        'background_color' => 'setBackgroundColor',
        'created_at' => 'setCreatedAt',
        'dashboard_elements' => 'setDashboardElements',
        'dashboard_filters' => 'setDashboardFilters',
        'dashboard_layouts' => 'setDashboardLayouts',
        'deleted' => 'setDeleted',
        'deleted_at' => 'setDeletedAt',
        'deleter_id' => 'setDeleterId',
        'edit_uri' => 'setEditUri',
        'favorite_count' => 'setFavoriteCount',
        'last_accessed_at' => 'setLastAccessedAt',
        'last_viewed_at' => 'setLastViewedAt',
        'load_configuration' => 'setLoadConfiguration',
        'lookml_link_id' => 'setLookmlLinkId',
        'show_filters_bar' => 'setShowFiltersBar',
        'show_title' => 'setShowTitle',
        'slug' => 'setSlug',
        'space_id' => 'setSpaceId',
        'folder_id' => 'setFolderId',
        'text_tile_text_color' => 'setTextTileTextColor',
        'tile_background_color' => 'setTileBackgroundColor',
        'tile_text_color' => 'setTileTextColor',
        'title_color' => 'setTitleColor',
        'view_count' => 'setViewCount',
        'settings' => 'setSettings',
        'preferred_viewer' => 'setPreferredViewer',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_favorite_id' => 'getContentFavoriteId',
        'content_metadata_id' => 'getContentMetadataId',
        'description' => 'getDescription',
        'hidden' => 'getHidden',
        'id' => 'getId',
        'model' => 'getModel',
        'query_timezone' => 'getQueryTimezone',
        'readonly' => 'getReadonly',
        'refresh_interval' => 'getRefreshInterval',
        'refresh_interval_to_i' => 'getRefreshIntervalToI',
        'space' => 'getSpace',
        'folder' => 'getFolder',
        'title' => 'getTitle',
        'user_id' => 'getUserId',
        'background_color' => 'getBackgroundColor',
        'created_at' => 'getCreatedAt',
        'dashboard_elements' => 'getDashboardElements',
        'dashboard_filters' => 'getDashboardFilters',
        'dashboard_layouts' => 'getDashboardLayouts',
        'deleted' => 'getDeleted',
        'deleted_at' => 'getDeletedAt',
        'deleter_id' => 'getDeleterId',
        'edit_uri' => 'getEditUri',
        'favorite_count' => 'getFavoriteCount',
        'last_accessed_at' => 'getLastAccessedAt',
        'last_viewed_at' => 'getLastViewedAt',
        'load_configuration' => 'getLoadConfiguration',
        'lookml_link_id' => 'getLookmlLinkId',
        'show_filters_bar' => 'getShowFiltersBar',
        'show_title' => 'getShowTitle',
        'slug' => 'getSlug',
        'space_id' => 'getSpaceId',
        'folder_id' => 'getFolderId',
        'text_tile_text_color' => 'getTextTileTextColor',
        'tile_background_color' => 'getTileBackgroundColor',
        'tile_text_color' => 'getTileTextColor',
        'title_color' => 'getTitleColor',
        'view_count' => 'getViewCount',
        'settings' => 'getSettings',
        'preferred_viewer' => 'getPreferredViewer',
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
        $this->container['content_favorite_id'] = isset($data['content_favorite_id']) ? $data['content_favorite_id'] : null;
        $this->container['content_metadata_id'] = isset($data['content_metadata_id']) ? $data['content_metadata_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['query_timezone'] = isset($data['query_timezone']) ? $data['query_timezone'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['refresh_interval'] = isset($data['refresh_interval']) ? $data['refresh_interval'] : null;
        $this->container['refresh_interval_to_i'] = isset($data['refresh_interval_to_i']) ? $data['refresh_interval_to_i'] : null;
        $this->container['space'] = isset($data['space']) ? $data['space'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['dashboard_elements'] = isset($data['dashboard_elements']) ? $data['dashboard_elements'] : null;
        $this->container['dashboard_filters'] = isset($data['dashboard_filters']) ? $data['dashboard_filters'] : null;
        $this->container['dashboard_layouts'] = isset($data['dashboard_layouts']) ? $data['dashboard_layouts'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['deleter_id'] = isset($data['deleter_id']) ? $data['deleter_id'] : null;
        $this->container['edit_uri'] = isset($data['edit_uri']) ? $data['edit_uri'] : null;
        $this->container['favorite_count'] = isset($data['favorite_count']) ? $data['favorite_count'] : null;
        $this->container['last_accessed_at'] = isset($data['last_accessed_at']) ? $data['last_accessed_at'] : null;
        $this->container['last_viewed_at'] = isset($data['last_viewed_at']) ? $data['last_viewed_at'] : null;
        $this->container['load_configuration'] = isset($data['load_configuration']) ? $data['load_configuration'] : null;
        $this->container['lookml_link_id'] = isset($data['lookml_link_id']) ? $data['lookml_link_id'] : null;
        $this->container['show_filters_bar'] = isset($data['show_filters_bar']) ? $data['show_filters_bar'] : null;
        $this->container['show_title'] = isset($data['show_title']) ? $data['show_title'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['space_id'] = isset($data['space_id']) ? $data['space_id'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['text_tile_text_color'] = isset($data['text_tile_text_color']) ? $data['text_tile_text_color'] : null;
        $this->container['tile_background_color'] = isset($data['tile_background_color']) ? $data['tile_background_color'] : null;
        $this->container['tile_text_color'] = isset($data['tile_text_color']) ? $data['tile_text_color'] : null;
        $this->container['title_color'] = isset($data['title_color']) ? $data['title_color'] : null;
        $this->container['view_count'] = isset($data['view_count']) ? $data['view_count'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['preferred_viewer'] = isset($data['preferred_viewer']) ? $data['preferred_viewer'] : null;
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
     * Gets content_favorite_id
     *
     * @return int
     */
    public function getContentFavoriteId()
    {
        return $this->container['content_favorite_id'];
    }

    /**
     * Sets content_favorite_id
     *
     * @param int $content_favorite_id Content Favorite Id
     *
     * @return $this
     */
    public function setContentFavoriteId($content_favorite_id)
    {
        $this->container['content_favorite_id'] = $content_favorite_id;

        return $this;
    }

    /**
     * Gets content_metadata_id
     *
     * @return int
     */
    public function getContentMetadataId()
    {
        return $this->container['content_metadata_id'];
    }

    /**
     * Sets content_metadata_id
     *
     * @param int $content_metadata_id Id of content metadata
     *
     * @return $this
     */
    public function setContentMetadataId($content_metadata_id)
    {
        $this->container['content_metadata_id'] = $content_metadata_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden Is Hidden
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

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
     * Gets model
     *
     * @return \Funeralzone\LookerClient\Model\LookModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Funeralzone\LookerClient\Model\LookModel $model Model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets query_timezone
     *
     * @return string
     */
    public function getQueryTimezone()
    {
        return $this->container['query_timezone'];
    }

    /**
     * Sets query_timezone
     *
     * @param string $query_timezone Timezone in which the Dashboard will run by default.
     *
     * @return $this
     */
    public function setQueryTimezone($query_timezone)
    {
        $this->container['query_timezone'] = $query_timezone;

        return $this;
    }

    /**
     * Gets readonly
     *
     * @return bool
     */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
     * Sets readonly
     *
     * @param bool $readonly Is Read-only
     *
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;

        return $this;
    }

    /**
     * Gets refresh_interval
     *
     * @return string
     */
    public function getRefreshInterval()
    {
        return $this->container['refresh_interval'];
    }

    /**
     * Sets refresh_interval
     *
     * @param string $refresh_interval Refresh Interval, as a time duration phrase like \"2 hours 30 minutes\". A number with no time units will be interpreted as whole seconds.
     *
     * @return $this
     */
    public function setRefreshInterval($refresh_interval)
    {
        $this->container['refresh_interval'] = $refresh_interval;

        return $this;
    }

    /**
     * Gets refresh_interval_to_i
     *
     * @return int
     */
    public function getRefreshIntervalToI()
    {
        return $this->container['refresh_interval_to_i'];
    }

    /**
     * Sets refresh_interval_to_i
     *
     * @param int $refresh_interval_to_i Refresh Interval in milliseconds
     *
     * @return $this
     */
    public function setRefreshIntervalToI($refresh_interval_to_i)
    {
        $this->container['refresh_interval_to_i'] = $refresh_interval_to_i;

        return $this;
    }

    /**
     * Gets space
     *
     * @return \Funeralzone\LookerClient\Model\SpaceBase
     */
    public function getSpace()
    {
        return $this->container['space'];
    }

    /**
     * Sets space
     *
     * @param \Funeralzone\LookerClient\Model\SpaceBase $space Space
     *
     * @return $this
     */
    public function setSpace($space)
    {
        $this->container['space'] = $space;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return \Funeralzone\LookerClient\Model\FolderBase
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param \Funeralzone\LookerClient\Model\FolderBase $folder Folder
     *
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

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
     * @param string $title Dashboard Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param int $user_id Id of User
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color Background color
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Time that the Dashboard was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets dashboard_elements
     *
     * @return \Funeralzone\LookerClient\Model\DashboardElement[]
     */
    public function getDashboardElements()
    {
        return $this->container['dashboard_elements'];
    }

    /**
     * Sets dashboard_elements
     *
     * @param \Funeralzone\LookerClient\Model\DashboardElement[] $dashboard_elements Elements
     *
     * @return $this
     */
    public function setDashboardElements($dashboard_elements)
    {
        $this->container['dashboard_elements'] = $dashboard_elements;

        return $this;
    }

    /**
     * Gets dashboard_filters
     *
     * @return \Funeralzone\LookerClient\Model\DashboardFilter[]
     */
    public function getDashboardFilters()
    {
        return $this->container['dashboard_filters'];
    }

    /**
     * Sets dashboard_filters
     *
     * @param \Funeralzone\LookerClient\Model\DashboardFilter[] $dashboard_filters Filters
     *
     * @return $this
     */
    public function setDashboardFilters($dashboard_filters)
    {
        $this->container['dashboard_filters'] = $dashboard_filters;

        return $this;
    }

    /**
     * Gets dashboard_layouts
     *
     * @return \Funeralzone\LookerClient\Model\DashboardLayout[]
     */
    public function getDashboardLayouts()
    {
        return $this->container['dashboard_layouts'];
    }

    /**
     * Sets dashboard_layouts
     *
     * @param \Funeralzone\LookerClient\Model\DashboardLayout[] $dashboard_layouts Layouts
     *
     * @return $this
     */
    public function setDashboardLayouts($dashboard_layouts)
    {
        $this->container['dashboard_layouts'] = $dashboard_layouts;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted Whether or not a dashboard is 'soft' deleted.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at Time that the Dashboard was 'soft' deleted.
     *
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets deleter_id
     *
     * @return int
     */
    public function getDeleterId()
    {
        return $this->container['deleter_id'];
    }

    /**
     * Sets deleter_id
     *
     * @param int $deleter_id Id of User that 'soft' deleted the dashboard.
     *
     * @return $this
     */
    public function setDeleterId($deleter_id)
    {
        $this->container['deleter_id'] = $deleter_id;

        return $this;
    }

    /**
     * Gets edit_uri
     *
     * @return string
     */
    public function getEditUri()
    {
        return $this->container['edit_uri'];
    }

    /**
     * Sets edit_uri
     *
     * @param string $edit_uri Relative path of URI of LookML file to edit the dashboard (LookML dashboard only).
     *
     * @return $this
     */
    public function setEditUri($edit_uri)
    {
        $this->container['edit_uri'] = $edit_uri;

        return $this;
    }

    /**
     * Gets favorite_count
     *
     * @return int
     */
    public function getFavoriteCount()
    {
        return $this->container['favorite_count'];
    }

    /**
     * Sets favorite_count
     *
     * @param int $favorite_count Number of times favorited
     *
     * @return $this
     */
    public function setFavoriteCount($favorite_count)
    {
        $this->container['favorite_count'] = $favorite_count;

        return $this;
    }

    /**
     * Gets last_accessed_at
     *
     * @return \DateTime
     */
    public function getLastAccessedAt()
    {
        return $this->container['last_accessed_at'];
    }

    /**
     * Sets last_accessed_at
     *
     * @param \DateTime $last_accessed_at Time the dashboard was last accessed
     *
     * @return $this
     */
    public function setLastAccessedAt($last_accessed_at)
    {
        $this->container['last_accessed_at'] = $last_accessed_at;

        return $this;
    }

    /**
     * Gets last_viewed_at
     *
     * @return \DateTime
     */
    public function getLastViewedAt()
    {
        return $this->container['last_viewed_at'];
    }

    /**
     * Sets last_viewed_at
     *
     * @param \DateTime $last_viewed_at Time last viewed in the Looker web UI
     *
     * @return $this
     */
    public function setLastViewedAt($last_viewed_at)
    {
        $this->container['last_viewed_at'] = $last_viewed_at;

        return $this;
    }

    /**
     * Gets load_configuration
     *
     * @return string
     */
    public function getLoadConfiguration()
    {
        return $this->container['load_configuration'];
    }

    /**
     * Sets load_configuration
     *
     * @param string $load_configuration configuration option that governs how dashboard loading will happen.
     *
     * @return $this
     */
    public function setLoadConfiguration($load_configuration)
    {
        $this->container['load_configuration'] = $load_configuration;

        return $this;
    }

    /**
     * Gets lookml_link_id
     *
     * @return string
     */
    public function getLookmlLinkId()
    {
        return $this->container['lookml_link_id'];
    }

    /**
     * Sets lookml_link_id
     *
     * @param string $lookml_link_id Links this dashboard to a particular LookML dashboard such that calling a **sync** operation on that LookML dashboard will update this dashboard to match.
     *
     * @return $this
     */
    public function setLookmlLinkId($lookml_link_id)
    {
        $this->container['lookml_link_id'] = $lookml_link_id;

        return $this;
    }

    /**
     * Gets show_filters_bar
     *
     * @return bool
     */
    public function getShowFiltersBar()
    {
        return $this->container['show_filters_bar'];
    }

    /**
     * Sets show_filters_bar
     *
     * @param bool $show_filters_bar Show filters bar.  **Security Note:** This property only affects the *cosmetic* appearance of the dashboard, not a user's ability to access data. Hiding the filters bar does **NOT** prevent users from changing filters by other means. For information on how to set up secure data access control policies, see [Control User Access to Data](https://looker.com/docs/r/api/control-access)
     *
     * @return $this
     */
    public function setShowFiltersBar($show_filters_bar)
    {
        $this->container['show_filters_bar'] = $show_filters_bar;

        return $this;
    }

    /**
     * Gets show_title
     *
     * @return bool
     */
    public function getShowTitle()
    {
        return $this->container['show_title'];
    }

    /**
     * Sets show_title
     *
     * @param bool $show_title Show title
     *
     * @return $this
     */
    public function setShowTitle($show_title)
    {
        $this->container['show_title'] = $show_title;

        return $this;
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
     * @param string $slug Content Metadata Slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets space_id
     *
     * @return string
     */
    public function getSpaceId()
    {
        return $this->container['space_id'];
    }

    /**
     * Sets space_id
     *
     * @param string $space_id Id of Space
     *
     * @return $this
     */
    public function setSpaceId($space_id)
    {
        $this->container['space_id'] = $space_id;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param string $folder_id Id of folder
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets text_tile_text_color
     *
     * @return string
     */
    public function getTextTileTextColor()
    {
        return $this->container['text_tile_text_color'];
    }

    /**
     * Sets text_tile_text_color
     *
     * @param string $text_tile_text_color Color of text on text tiles
     *
     * @return $this
     */
    public function setTextTileTextColor($text_tile_text_color)
    {
        $this->container['text_tile_text_color'] = $text_tile_text_color;

        return $this;
    }

    /**
     * Gets tile_background_color
     *
     * @return string
     */
    public function getTileBackgroundColor()
    {
        return $this->container['tile_background_color'];
    }

    /**
     * Sets tile_background_color
     *
     * @param string $tile_background_color Tile background color
     *
     * @return $this
     */
    public function setTileBackgroundColor($tile_background_color)
    {
        $this->container['tile_background_color'] = $tile_background_color;

        return $this;
    }

    /**
     * Gets tile_text_color
     *
     * @return string
     */
    public function getTileTextColor()
    {
        return $this->container['tile_text_color'];
    }

    /**
     * Sets tile_text_color
     *
     * @param string $tile_text_color Tile text color
     *
     * @return $this
     */
    public function setTileTextColor($tile_text_color)
    {
        $this->container['tile_text_color'] = $tile_text_color;

        return $this;
    }

    /**
     * Gets title_color
     *
     * @return string
     */
    public function getTitleColor()
    {
        return $this->container['title_color'];
    }

    /**
     * Sets title_color
     *
     * @param string $title_color Title color
     *
     * @return $this
     */
    public function setTitleColor($title_color)
    {
        $this->container['title_color'] = $title_color;

        return $this;
    }

    /**
     * Gets view_count
     *
     * @return int
     */
    public function getViewCount()
    {
        return $this->container['view_count'];
    }

    /**
     * Sets view_count
     *
     * @param int $view_count Number of times viewed in the Looker web UI
     *
     * @return $this
     */
    public function setViewCount($view_count)
    {
        $this->container['view_count'] = $view_count;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Funeralzone\LookerClient\Model\DashboardSettings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Funeralzone\LookerClient\Model\DashboardSettings $settings Dashboard visual settings only applicable to dashboards-next (beta)
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets preferred_viewer
     *
     * @return string
     */
    public function getPreferredViewer()
    {
        return $this->container['preferred_viewer'];
    }

    /**
     * Sets preferred_viewer
     *
     * @param string $preferred_viewer The preferred route for viewing this dashboard (ie: dashboards or dashboards-next)
     *
     * @return $this
     */
    public function setPreferredViewer($preferred_viewer)
    {
        $this->container['preferred_viewer'] = $preferred_viewer;

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


