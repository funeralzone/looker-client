<?php
/**
 * Integration
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
 * Integration Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Integration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Integration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'integration_hub_id' => 'int',
        'label' => 'string',
        'description' => 'string',
        'enabled' => 'bool',
        'params' => '\Funeralzone\LookerClient\Model\IntegrationParam[]',
        'supported_formats' => 'string[]',
        'supported_action_types' => 'string[]',
        'supported_formattings' => 'string[]',
        'supported_visualization_formattings' => 'string[]',
        'supported_download_settings' => 'string[]',
        'icon_url' => 'string',
        'uses_oauth' => 'bool',
        'delegate_oauth' => 'bool',
        'installed_delegate_oauth' => 'string',
        'required_fields' => '\Funeralzone\LookerClient\Model\IntegrationRequiredField[]',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'integration_hub_id' => 'int64',
        'label' => null,
        'description' => null,
        'enabled' => null,
        'params' => null,
        'supported_formats' => null,
        'supported_action_types' => null,
        'supported_formattings' => null,
        'supported_visualization_formattings' => null,
        'supported_download_settings' => null,
        'icon_url' => null,
        'uses_oauth' => null,
        'delegate_oauth' => null,
        'installed_delegate_oauth' => null,
        'required_fields' => null,
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
        'integration_hub_id' => 'integration_hub_id',
        'label' => 'label',
        'description' => 'description',
        'enabled' => 'enabled',
        'params' => 'params',
        'supported_formats' => 'supported_formats',
        'supported_action_types' => 'supported_action_types',
        'supported_formattings' => 'supported_formattings',
        'supported_visualization_formattings' => 'supported_visualization_formattings',
        'supported_download_settings' => 'supported_download_settings',
        'icon_url' => 'icon_url',
        'uses_oauth' => 'uses_oauth',
        'delegate_oauth' => 'delegate_oauth',
        'installed_delegate_oauth' => 'installed_delegate_oauth',
        'required_fields' => 'required_fields',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'integration_hub_id' => 'setIntegrationHubId',
        'label' => 'setLabel',
        'description' => 'setDescription',
        'enabled' => 'setEnabled',
        'params' => 'setParams',
        'supported_formats' => 'setSupportedFormats',
        'supported_action_types' => 'setSupportedActionTypes',
        'supported_formattings' => 'setSupportedFormattings',
        'supported_visualization_formattings' => 'setSupportedVisualizationFormattings',
        'supported_download_settings' => 'setSupportedDownloadSettings',
        'icon_url' => 'setIconUrl',
        'uses_oauth' => 'setUsesOauth',
        'delegate_oauth' => 'setDelegateOauth',
        'installed_delegate_oauth' => 'setInstalledDelegateOauth',
        'required_fields' => 'setRequiredFields',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'integration_hub_id' => 'getIntegrationHubId',
        'label' => 'getLabel',
        'description' => 'getDescription',
        'enabled' => 'getEnabled',
        'params' => 'getParams',
        'supported_formats' => 'getSupportedFormats',
        'supported_action_types' => 'getSupportedActionTypes',
        'supported_formattings' => 'getSupportedFormattings',
        'supported_visualization_formattings' => 'getSupportedVisualizationFormattings',
        'supported_download_settings' => 'getSupportedDownloadSettings',
        'icon_url' => 'getIconUrl',
        'uses_oauth' => 'getUsesOauth',
        'delegate_oauth' => 'getDelegateOauth',
        'installed_delegate_oauth' => 'getInstalledDelegateOauth',
        'required_fields' => 'getRequiredFields',
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
        $this->container['integration_hub_id'] = isset($data['integration_hub_id']) ? $data['integration_hub_id'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['supported_formats'] = isset($data['supported_formats']) ? $data['supported_formats'] : null;
        $this->container['supported_action_types'] = isset($data['supported_action_types']) ? $data['supported_action_types'] : null;
        $this->container['supported_formattings'] = isset($data['supported_formattings']) ? $data['supported_formattings'] : null;
        $this->container['supported_visualization_formattings'] = isset($data['supported_visualization_formattings']) ? $data['supported_visualization_formattings'] : null;
        $this->container['supported_download_settings'] = isset($data['supported_download_settings']) ? $data['supported_download_settings'] : null;
        $this->container['icon_url'] = isset($data['icon_url']) ? $data['icon_url'] : null;
        $this->container['uses_oauth'] = isset($data['uses_oauth']) ? $data['uses_oauth'] : null;
        $this->container['delegate_oauth'] = isset($data['delegate_oauth']) ? $data['delegate_oauth'] : null;
        $this->container['installed_delegate_oauth'] = isset($data['installed_delegate_oauth']) ? $data['installed_delegate_oauth'] : null;
        $this->container['required_fields'] = isset($data['required_fields']) ? $data['required_fields'] : null;
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
     * @param string $id ID of the integration.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets integration_hub_id
     *
     * @return int
     */
    public function getIntegrationHubId()
    {
        return $this->container['integration_hub_id'];
    }

    /**
     * Sets integration_hub_id
     *
     * @param int $integration_hub_id ID of the integration hub.
     *
     * @return $this
     */
    public function setIntegrationHubId($integration_hub_id)
    {
        $this->container['integration_hub_id'] = $integration_hub_id;

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
     * @param string $label Label for the integration.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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
     * @param string $description Description of the integration.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param bool $enabled Whether the integration is available to users.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets params
     *
     * @return \Funeralzone\LookerClient\Model\IntegrationParam[]
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param \Funeralzone\LookerClient\Model\IntegrationParam[] $params Array of params for the integration.
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets supported_formats
     *
     * @return string[]
     */
    public function getSupportedFormats()
    {
        return $this->container['supported_formats'];
    }

    /**
     * Sets supported_formats
     *
     * @param string[] $supported_formats A list of data formats the integration supports. If unspecified, this will default to [\"txt\", \"csv\", \"inline_json\", \"json\", \"json_label\", \"json_detail\", \"json_detail_lite_stream\", \"xlsx\", \"html\", \"wysiwyg_pdf\", \"assembled_pdf\", \"wysiwyg_png\", \"csv_zip\"]. Valid values are: \"txt\", \"csv\", \"inline_json\", \"json\", \"json_label\", \"json_detail\", \"json_detail_lite_stream\", \"xlsx\", \"html\", \"wysiwyg_pdf\", \"assembled_pdf\", \"wysiwyg_png\", \"csv_zip\".
     *
     * @return $this
     */
    public function setSupportedFormats($supported_formats)
    {
        $this->container['supported_formats'] = $supported_formats;

        return $this;
    }

    /**
     * Gets supported_action_types
     *
     * @return string[]
     */
    public function getSupportedActionTypes()
    {
        return $this->container['supported_action_types'];
    }

    /**
     * Sets supported_action_types
     *
     * @param string[] $supported_action_types A list of action types the integration supports. Valid values are: \"cell\", \"query\", \"dashboard\".
     *
     * @return $this
     */
    public function setSupportedActionTypes($supported_action_types)
    {
        $this->container['supported_action_types'] = $supported_action_types;

        return $this;
    }

    /**
     * Gets supported_formattings
     *
     * @return string[]
     */
    public function getSupportedFormattings()
    {
        return $this->container['supported_formattings'];
    }

    /**
     * Sets supported_formattings
     *
     * @param string[] $supported_formattings A list of formatting options the integration supports. If unspecified, this will default to [\"formatted\", \"unformatted\"]. Valid values are: \"formatted\", \"unformatted\".
     *
     * @return $this
     */
    public function setSupportedFormattings($supported_formattings)
    {
        $this->container['supported_formattings'] = $supported_formattings;

        return $this;
    }

    /**
     * Gets supported_visualization_formattings
     *
     * @return string[]
     */
    public function getSupportedVisualizationFormattings()
    {
        return $this->container['supported_visualization_formattings'];
    }

    /**
     * Sets supported_visualization_formattings
     *
     * @param string[] $supported_visualization_formattings A list of visualization formatting options the integration supports. If unspecified, this will default to [\"apply\", \"noapply\"]. Valid values are: \"apply\", \"noapply\".
     *
     * @return $this
     */
    public function setSupportedVisualizationFormattings($supported_visualization_formattings)
    {
        $this->container['supported_visualization_formattings'] = $supported_visualization_formattings;

        return $this;
    }

    /**
     * Gets supported_download_settings
     *
     * @return string[]
     */
    public function getSupportedDownloadSettings()
    {
        return $this->container['supported_download_settings'];
    }

    /**
     * Sets supported_download_settings
     *
     * @param string[] $supported_download_settings A list of all the download mechanisms the integration supports. The order is undefined: Looker will select the most appropriate supported download mechanism for a given query. The integration must ensure it can handle any of the mechanisms it claims to support. If unspecified, this will default to [\"push\"]. Valid values are: \"push\", \"url\".
     *
     * @return $this
     */
    public function setSupportedDownloadSettings($supported_download_settings)
    {
        $this->container['supported_download_settings'] = $supported_download_settings;

        return $this;
    }

    /**
     * Gets icon_url
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string $icon_url URL to an icon for the integration.
     *
     * @return $this
     */
    public function setIconUrl($icon_url)
    {
        $this->container['icon_url'] = $icon_url;

        return $this;
    }

    /**
     * Gets uses_oauth
     *
     * @return bool
     */
    public function getUsesOauth()
    {
        return $this->container['uses_oauth'];
    }

    /**
     * Sets uses_oauth
     *
     * @param bool $uses_oauth Whether the integration uses oauth.
     *
     * @return $this
     */
    public function setUsesOauth($uses_oauth)
    {
        $this->container['uses_oauth'] = $uses_oauth;

        return $this;
    }

    /**
     * Gets delegate_oauth
     *
     * @return bool
     */
    public function getDelegateOauth()
    {
        return $this->container['delegate_oauth'];
    }

    /**
     * Sets delegate_oauth
     *
     * @param bool $delegate_oauth Whether the integration uses delegate oauth, which allows federation between an integration installation scope specific entity (like org, group, and team, etc.) and Looker.
     *
     * @return $this
     */
    public function setDelegateOauth($delegate_oauth)
    {
        $this->container['delegate_oauth'] = $delegate_oauth;

        return $this;
    }

    /**
     * Gets installed_delegate_oauth
     *
     * @return string
     */
    public function getInstalledDelegateOauth()
    {
        return $this->container['installed_delegate_oauth'];
    }

    /**
     * Sets installed_delegate_oauth
     *
     * @param string $installed_delegate_oauth OAuth info when the admin installed the integration using delegate oauth.
     *
     * @return $this
     */
    public function setInstalledDelegateOauth($installed_delegate_oauth)
    {
        $this->container['installed_delegate_oauth'] = $installed_delegate_oauth;

        return $this;
    }

    /**
     * Gets required_fields
     *
     * @return \Funeralzone\LookerClient\Model\IntegrationRequiredField[]
     */
    public function getRequiredFields()
    {
        return $this->container['required_fields'];
    }

    /**
     * Sets required_fields
     *
     * @param \Funeralzone\LookerClient\Model\IntegrationRequiredField[] $required_fields A list of descriptions of required fields that this integration is compatible with. If there are multiple entries in this list, the integration requires more than one field. If unspecified, no fields will be required.
     *
     * @return $this
     */
    public function setRequiredFields($required_fields)
    {
        $this->container['required_fields'] = $required_fields;

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


