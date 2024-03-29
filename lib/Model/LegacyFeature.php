<?php
/**
 * LegacyFeature
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
 * LegacyFeature Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LegacyFeature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LegacyFeature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'enabled_locally' => 'bool',
        'enabled' => 'bool',
        'disallowed_as_of_version' => 'string',
        'disable_on_upgrade_to_version' => 'string',
        'end_of_life_version' => 'string',
        'documentation_url' => 'string',
        'approximate_disable_date' => '\DateTime',
        'approximate_end_of_life_date' => '\DateTime',
        'has_disabled_on_upgrade' => 'bool',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'enabled_locally' => null,
        'enabled' => null,
        'disallowed_as_of_version' => null,
        'disable_on_upgrade_to_version' => null,
        'end_of_life_version' => null,
        'documentation_url' => null,
        'approximate_disable_date' => 'date-time',
        'approximate_end_of_life_date' => 'date-time',
        'has_disabled_on_upgrade' => null,
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
        'description' => 'description',
        'enabled_locally' => 'enabled_locally',
        'enabled' => 'enabled',
        'disallowed_as_of_version' => 'disallowed_as_of_version',
        'disable_on_upgrade_to_version' => 'disable_on_upgrade_to_version',
        'end_of_life_version' => 'end_of_life_version',
        'documentation_url' => 'documentation_url',
        'approximate_disable_date' => 'approximate_disable_date',
        'approximate_end_of_life_date' => 'approximate_end_of_life_date',
        'has_disabled_on_upgrade' => 'has_disabled_on_upgrade',
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
        'description' => 'setDescription',
        'enabled_locally' => 'setEnabledLocally',
        'enabled' => 'setEnabled',
        'disallowed_as_of_version' => 'setDisallowedAsOfVersion',
        'disable_on_upgrade_to_version' => 'setDisableOnUpgradeToVersion',
        'end_of_life_version' => 'setEndOfLifeVersion',
        'documentation_url' => 'setDocumentationUrl',
        'approximate_disable_date' => 'setApproximateDisableDate',
        'approximate_end_of_life_date' => 'setApproximateEndOfLifeDate',
        'has_disabled_on_upgrade' => 'setHasDisabledOnUpgrade',
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
        'description' => 'getDescription',
        'enabled_locally' => 'getEnabledLocally',
        'enabled' => 'getEnabled',
        'disallowed_as_of_version' => 'getDisallowedAsOfVersion',
        'disable_on_upgrade_to_version' => 'getDisableOnUpgradeToVersion',
        'end_of_life_version' => 'getEndOfLifeVersion',
        'documentation_url' => 'getDocumentationUrl',
        'approximate_disable_date' => 'getApproximateDisableDate',
        'approximate_end_of_life_date' => 'getApproximateEndOfLifeDate',
        'has_disabled_on_upgrade' => 'getHasDisabledOnUpgrade',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled_locally'] = isset($data['enabled_locally']) ? $data['enabled_locally'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['disallowed_as_of_version'] = isset($data['disallowed_as_of_version']) ? $data['disallowed_as_of_version'] : null;
        $this->container['disable_on_upgrade_to_version'] = isset($data['disable_on_upgrade_to_version']) ? $data['disable_on_upgrade_to_version'] : null;
        $this->container['end_of_life_version'] = isset($data['end_of_life_version']) ? $data['end_of_life_version'] : null;
        $this->container['documentation_url'] = isset($data['documentation_url']) ? $data['documentation_url'] : null;
        $this->container['approximate_disable_date'] = isset($data['approximate_disable_date']) ? $data['approximate_disable_date'] : null;
        $this->container['approximate_end_of_life_date'] = isset($data['approximate_end_of_life_date']) ? $data['approximate_end_of_life_date'] : null;
        $this->container['has_disabled_on_upgrade'] = isset($data['has_disabled_on_upgrade']) ? $data['has_disabled_on_upgrade'] : null;
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
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets enabled_locally
     *
     * @return bool
     */
    public function getEnabledLocally()
    {
        return $this->container['enabled_locally'];
    }

    /**
     * Sets enabled_locally
     *
     * @param bool $enabled_locally Whether this feature has been enabled by a user
     *
     * @return $this
     */
    public function setEnabledLocally($enabled_locally)
    {
        $this->container['enabled_locally'] = $enabled_locally;

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
     * @param bool $enabled Whether this feature is currently enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets disallowed_as_of_version
     *
     * @return string
     */
    public function getDisallowedAsOfVersion()
    {
        return $this->container['disallowed_as_of_version'];
    }

    /**
     * Sets disallowed_as_of_version
     *
     * @param string $disallowed_as_of_version Looker version where this feature became a legacy feature
     *
     * @return $this
     */
    public function setDisallowedAsOfVersion($disallowed_as_of_version)
    {
        $this->container['disallowed_as_of_version'] = $disallowed_as_of_version;

        return $this;
    }

    /**
     * Gets disable_on_upgrade_to_version
     *
     * @return string
     */
    public function getDisableOnUpgradeToVersion()
    {
        return $this->container['disable_on_upgrade_to_version'];
    }

    /**
     * Sets disable_on_upgrade_to_version
     *
     * @param string $disable_on_upgrade_to_version Looker version where this feature will be automatically disabled
     *
     * @return $this
     */
    public function setDisableOnUpgradeToVersion($disable_on_upgrade_to_version)
    {
        $this->container['disable_on_upgrade_to_version'] = $disable_on_upgrade_to_version;

        return $this;
    }

    /**
     * Gets end_of_life_version
     *
     * @return string
     */
    public function getEndOfLifeVersion()
    {
        return $this->container['end_of_life_version'];
    }

    /**
     * Sets end_of_life_version
     *
     * @param string $end_of_life_version Future Looker version where this feature will be removed
     *
     * @return $this
     */
    public function setEndOfLifeVersion($end_of_life_version)
    {
        $this->container['end_of_life_version'] = $end_of_life_version;

        return $this;
    }

    /**
     * Gets documentation_url
     *
     * @return string
     */
    public function getDocumentationUrl()
    {
        return $this->container['documentation_url'];
    }

    /**
     * Sets documentation_url
     *
     * @param string $documentation_url URL for documentation about this feature
     *
     * @return $this
     */
    public function setDocumentationUrl($documentation_url)
    {
        $this->container['documentation_url'] = $documentation_url;

        return $this;
    }

    /**
     * Gets approximate_disable_date
     *
     * @return \DateTime
     */
    public function getApproximateDisableDate()
    {
        return $this->container['approximate_disable_date'];
    }

    /**
     * Sets approximate_disable_date
     *
     * @param \DateTime $approximate_disable_date Approximate date that this feature will be automatically disabled.
     *
     * @return $this
     */
    public function setApproximateDisableDate($approximate_disable_date)
    {
        $this->container['approximate_disable_date'] = $approximate_disable_date;

        return $this;
    }

    /**
     * Gets approximate_end_of_life_date
     *
     * @return \DateTime
     */
    public function getApproximateEndOfLifeDate()
    {
        return $this->container['approximate_end_of_life_date'];
    }

    /**
     * Sets approximate_end_of_life_date
     *
     * @param \DateTime $approximate_end_of_life_date Approximate date that this feature will be removed.
     *
     * @return $this
     */
    public function setApproximateEndOfLifeDate($approximate_end_of_life_date)
    {
        $this->container['approximate_end_of_life_date'] = $approximate_end_of_life_date;

        return $this;
    }

    /**
     * Gets has_disabled_on_upgrade
     *
     * @return bool
     */
    public function getHasDisabledOnUpgrade()
    {
        return $this->container['has_disabled_on_upgrade'];
    }

    /**
     * Sets has_disabled_on_upgrade
     *
     * @param bool $has_disabled_on_upgrade Whether this legacy feature may have been automatically disabled when upgrading to the current version.
     *
     * @return $this
     */
    public function setHasDisabledOnUpgrade($has_disabled_on_upgrade)
    {
        $this->container['has_disabled_on_upgrade'] = $has_disabled_on_upgrade;

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


