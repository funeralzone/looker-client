<?php
/**
 * SamlConfig
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
 * SamlConfig Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SamlConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SamlConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'idp_cert' => 'string',
        'idp_url' => 'string',
        'idp_issuer' => 'string',
        'idp_audience' => 'string',
        'allowed_clock_drift' => 'int',
        'user_attribute_map_email' => 'string',
        'user_attribute_map_first_name' => 'string',
        'user_attribute_map_last_name' => 'string',
        'new_user_migration_types' => 'string',
        'alternate_email_login_allowed' => 'bool',
        'test_slug' => 'string',
        'modified_at' => 'string',
        'modified_by' => 'string',
        'default_new_user_roles' => '\Funeralzone\LookerClient\Model\Role[]',
        'default_new_user_groups' => '\Funeralzone\LookerClient\Model\Group[]',
        'default_new_user_role_ids' => 'int[]',
        'default_new_user_group_ids' => 'int[]',
        'set_roles_from_groups' => 'bool',
        'groups_attribute' => 'string',
        'groups' => '\Funeralzone\LookerClient\Model\SamlGroupRead[]',
        'groups_with_role_ids' => '\Funeralzone\LookerClient\Model\SamlGroupWrite[]',
        'auth_requires_role' => 'bool',
        'user_attributes' => '\Funeralzone\LookerClient\Model\SamlUserAttributeRead[]',
        'user_attributes_with_ids' => '\Funeralzone\LookerClient\Model\SamlUserAttributeWrite[]',
        'groups_finder_type' => 'string',
        'groups_member_value' => 'string',
        'bypass_login_page' => 'bool',
        'url' => 'string',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'idp_cert' => null,
        'idp_url' => null,
        'idp_issuer' => null,
        'idp_audience' => null,
        'allowed_clock_drift' => 'int64',
        'user_attribute_map_email' => null,
        'user_attribute_map_first_name' => null,
        'user_attribute_map_last_name' => null,
        'new_user_migration_types' => null,
        'alternate_email_login_allowed' => null,
        'test_slug' => null,
        'modified_at' => null,
        'modified_by' => null,
        'default_new_user_roles' => null,
        'default_new_user_groups' => null,
        'default_new_user_role_ids' => 'int64',
        'default_new_user_group_ids' => 'int64',
        'set_roles_from_groups' => null,
        'groups_attribute' => null,
        'groups' => null,
        'groups_with_role_ids' => null,
        'auth_requires_role' => null,
        'user_attributes' => null,
        'user_attributes_with_ids' => null,
        'groups_finder_type' => null,
        'groups_member_value' => null,
        'bypass_login_page' => null,
        'url' => 'uri',
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
        'enabled' => 'enabled',
        'idp_cert' => 'idp_cert',
        'idp_url' => 'idp_url',
        'idp_issuer' => 'idp_issuer',
        'idp_audience' => 'idp_audience',
        'allowed_clock_drift' => 'allowed_clock_drift',
        'user_attribute_map_email' => 'user_attribute_map_email',
        'user_attribute_map_first_name' => 'user_attribute_map_first_name',
        'user_attribute_map_last_name' => 'user_attribute_map_last_name',
        'new_user_migration_types' => 'new_user_migration_types',
        'alternate_email_login_allowed' => 'alternate_email_login_allowed',
        'test_slug' => 'test_slug',
        'modified_at' => 'modified_at',
        'modified_by' => 'modified_by',
        'default_new_user_roles' => 'default_new_user_roles',
        'default_new_user_groups' => 'default_new_user_groups',
        'default_new_user_role_ids' => 'default_new_user_role_ids',
        'default_new_user_group_ids' => 'default_new_user_group_ids',
        'set_roles_from_groups' => 'set_roles_from_groups',
        'groups_attribute' => 'groups_attribute',
        'groups' => 'groups',
        'groups_with_role_ids' => 'groups_with_role_ids',
        'auth_requires_role' => 'auth_requires_role',
        'user_attributes' => 'user_attributes',
        'user_attributes_with_ids' => 'user_attributes_with_ids',
        'groups_finder_type' => 'groups_finder_type',
        'groups_member_value' => 'groups_member_value',
        'bypass_login_page' => 'bypass_login_page',
        'url' => 'url',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'idp_cert' => 'setIdpCert',
        'idp_url' => 'setIdpUrl',
        'idp_issuer' => 'setIdpIssuer',
        'idp_audience' => 'setIdpAudience',
        'allowed_clock_drift' => 'setAllowedClockDrift',
        'user_attribute_map_email' => 'setUserAttributeMapEmail',
        'user_attribute_map_first_name' => 'setUserAttributeMapFirstName',
        'user_attribute_map_last_name' => 'setUserAttributeMapLastName',
        'new_user_migration_types' => 'setNewUserMigrationTypes',
        'alternate_email_login_allowed' => 'setAlternateEmailLoginAllowed',
        'test_slug' => 'setTestSlug',
        'modified_at' => 'setModifiedAt',
        'modified_by' => 'setModifiedBy',
        'default_new_user_roles' => 'setDefaultNewUserRoles',
        'default_new_user_groups' => 'setDefaultNewUserGroups',
        'default_new_user_role_ids' => 'setDefaultNewUserRoleIds',
        'default_new_user_group_ids' => 'setDefaultNewUserGroupIds',
        'set_roles_from_groups' => 'setSetRolesFromGroups',
        'groups_attribute' => 'setGroupsAttribute',
        'groups' => 'setGroups',
        'groups_with_role_ids' => 'setGroupsWithRoleIds',
        'auth_requires_role' => 'setAuthRequiresRole',
        'user_attributes' => 'setUserAttributes',
        'user_attributes_with_ids' => 'setUserAttributesWithIds',
        'groups_finder_type' => 'setGroupsFinderType',
        'groups_member_value' => 'setGroupsMemberValue',
        'bypass_login_page' => 'setBypassLoginPage',
        'url' => 'setUrl',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'idp_cert' => 'getIdpCert',
        'idp_url' => 'getIdpUrl',
        'idp_issuer' => 'getIdpIssuer',
        'idp_audience' => 'getIdpAudience',
        'allowed_clock_drift' => 'getAllowedClockDrift',
        'user_attribute_map_email' => 'getUserAttributeMapEmail',
        'user_attribute_map_first_name' => 'getUserAttributeMapFirstName',
        'user_attribute_map_last_name' => 'getUserAttributeMapLastName',
        'new_user_migration_types' => 'getNewUserMigrationTypes',
        'alternate_email_login_allowed' => 'getAlternateEmailLoginAllowed',
        'test_slug' => 'getTestSlug',
        'modified_at' => 'getModifiedAt',
        'modified_by' => 'getModifiedBy',
        'default_new_user_roles' => 'getDefaultNewUserRoles',
        'default_new_user_groups' => 'getDefaultNewUserGroups',
        'default_new_user_role_ids' => 'getDefaultNewUserRoleIds',
        'default_new_user_group_ids' => 'getDefaultNewUserGroupIds',
        'set_roles_from_groups' => 'getSetRolesFromGroups',
        'groups_attribute' => 'getGroupsAttribute',
        'groups' => 'getGroups',
        'groups_with_role_ids' => 'getGroupsWithRoleIds',
        'auth_requires_role' => 'getAuthRequiresRole',
        'user_attributes' => 'getUserAttributes',
        'user_attributes_with_ids' => 'getUserAttributesWithIds',
        'groups_finder_type' => 'getGroupsFinderType',
        'groups_member_value' => 'getGroupsMemberValue',
        'bypass_login_page' => 'getBypassLoginPage',
        'url' => 'getUrl',
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['idp_cert'] = isset($data['idp_cert']) ? $data['idp_cert'] : null;
        $this->container['idp_url'] = isset($data['idp_url']) ? $data['idp_url'] : null;
        $this->container['idp_issuer'] = isset($data['idp_issuer']) ? $data['idp_issuer'] : null;
        $this->container['idp_audience'] = isset($data['idp_audience']) ? $data['idp_audience'] : null;
        $this->container['allowed_clock_drift'] = isset($data['allowed_clock_drift']) ? $data['allowed_clock_drift'] : null;
        $this->container['user_attribute_map_email'] = isset($data['user_attribute_map_email']) ? $data['user_attribute_map_email'] : null;
        $this->container['user_attribute_map_first_name'] = isset($data['user_attribute_map_first_name']) ? $data['user_attribute_map_first_name'] : null;
        $this->container['user_attribute_map_last_name'] = isset($data['user_attribute_map_last_name']) ? $data['user_attribute_map_last_name'] : null;
        $this->container['new_user_migration_types'] = isset($data['new_user_migration_types']) ? $data['new_user_migration_types'] : null;
        $this->container['alternate_email_login_allowed'] = isset($data['alternate_email_login_allowed']) ? $data['alternate_email_login_allowed'] : null;
        $this->container['test_slug'] = isset($data['test_slug']) ? $data['test_slug'] : null;
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
        $this->container['modified_by'] = isset($data['modified_by']) ? $data['modified_by'] : null;
        $this->container['default_new_user_roles'] = isset($data['default_new_user_roles']) ? $data['default_new_user_roles'] : null;
        $this->container['default_new_user_groups'] = isset($data['default_new_user_groups']) ? $data['default_new_user_groups'] : null;
        $this->container['default_new_user_role_ids'] = isset($data['default_new_user_role_ids']) ? $data['default_new_user_role_ids'] : null;
        $this->container['default_new_user_group_ids'] = isset($data['default_new_user_group_ids']) ? $data['default_new_user_group_ids'] : null;
        $this->container['set_roles_from_groups'] = isset($data['set_roles_from_groups']) ? $data['set_roles_from_groups'] : null;
        $this->container['groups_attribute'] = isset($data['groups_attribute']) ? $data['groups_attribute'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['groups_with_role_ids'] = isset($data['groups_with_role_ids']) ? $data['groups_with_role_ids'] : null;
        $this->container['auth_requires_role'] = isset($data['auth_requires_role']) ? $data['auth_requires_role'] : null;
        $this->container['user_attributes'] = isset($data['user_attributes']) ? $data['user_attributes'] : null;
        $this->container['user_attributes_with_ids'] = isset($data['user_attributes_with_ids']) ? $data['user_attributes_with_ids'] : null;
        $this->container['groups_finder_type'] = isset($data['groups_finder_type']) ? $data['groups_finder_type'] : null;
        $this->container['groups_member_value'] = isset($data['groups_member_value']) ? $data['groups_member_value'] : null;
        $this->container['bypass_login_page'] = isset($data['bypass_login_page']) ? $data['bypass_login_page'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * @param bool $enabled Enable/Disable Saml authentication for the server
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets idp_cert
     *
     * @return string
     */
    public function getIdpCert()
    {
        return $this->container['idp_cert'];
    }

    /**
     * Sets idp_cert
     *
     * @param string $idp_cert Identity Provider Certificate (provided by IdP)
     *
     * @return $this
     */
    public function setIdpCert($idp_cert)
    {
        $this->container['idp_cert'] = $idp_cert;

        return $this;
    }

    /**
     * Gets idp_url
     *
     * @return string
     */
    public function getIdpUrl()
    {
        return $this->container['idp_url'];
    }

    /**
     * Sets idp_url
     *
     * @param string $idp_url Identity Provider Url (provided by IdP)
     *
     * @return $this
     */
    public function setIdpUrl($idp_url)
    {
        $this->container['idp_url'] = $idp_url;

        return $this;
    }

    /**
     * Gets idp_issuer
     *
     * @return string
     */
    public function getIdpIssuer()
    {
        return $this->container['idp_issuer'];
    }

    /**
     * Sets idp_issuer
     *
     * @param string $idp_issuer Identity Provider Issuer (provided by IdP)
     *
     * @return $this
     */
    public function setIdpIssuer($idp_issuer)
    {
        $this->container['idp_issuer'] = $idp_issuer;

        return $this;
    }

    /**
     * Gets idp_audience
     *
     * @return string
     */
    public function getIdpAudience()
    {
        return $this->container['idp_audience'];
    }

    /**
     * Sets idp_audience
     *
     * @param string $idp_audience Identity Provider Audience (set in IdP config). Optional in Looker. Set this only if you want Looker to validate the audience value returned by the IdP.
     *
     * @return $this
     */
    public function setIdpAudience($idp_audience)
    {
        $this->container['idp_audience'] = $idp_audience;

        return $this;
    }

    /**
     * Gets allowed_clock_drift
     *
     * @return int
     */
    public function getAllowedClockDrift()
    {
        return $this->container['allowed_clock_drift'];
    }

    /**
     * Sets allowed_clock_drift
     *
     * @param int $allowed_clock_drift Count of seconds of clock drift to allow when validating timestamps of assertions.
     *
     * @return $this
     */
    public function setAllowedClockDrift($allowed_clock_drift)
    {
        $this->container['allowed_clock_drift'] = $allowed_clock_drift;

        return $this;
    }

    /**
     * Gets user_attribute_map_email
     *
     * @return string
     */
    public function getUserAttributeMapEmail()
    {
        return $this->container['user_attribute_map_email'];
    }

    /**
     * Sets user_attribute_map_email
     *
     * @param string $user_attribute_map_email Name of user record attributes used to indicate email address field
     *
     * @return $this
     */
    public function setUserAttributeMapEmail($user_attribute_map_email)
    {
        $this->container['user_attribute_map_email'] = $user_attribute_map_email;

        return $this;
    }

    /**
     * Gets user_attribute_map_first_name
     *
     * @return string
     */
    public function getUserAttributeMapFirstName()
    {
        return $this->container['user_attribute_map_first_name'];
    }

    /**
     * Sets user_attribute_map_first_name
     *
     * @param string $user_attribute_map_first_name Name of user record attributes used to indicate first name
     *
     * @return $this
     */
    public function setUserAttributeMapFirstName($user_attribute_map_first_name)
    {
        $this->container['user_attribute_map_first_name'] = $user_attribute_map_first_name;

        return $this;
    }

    /**
     * Gets user_attribute_map_last_name
     *
     * @return string
     */
    public function getUserAttributeMapLastName()
    {
        return $this->container['user_attribute_map_last_name'];
    }

    /**
     * Sets user_attribute_map_last_name
     *
     * @param string $user_attribute_map_last_name Name of user record attributes used to indicate last name
     *
     * @return $this
     */
    public function setUserAttributeMapLastName($user_attribute_map_last_name)
    {
        $this->container['user_attribute_map_last_name'] = $user_attribute_map_last_name;

        return $this;
    }

    /**
     * Gets new_user_migration_types
     *
     * @return string
     */
    public function getNewUserMigrationTypes()
    {
        return $this->container['new_user_migration_types'];
    }

    /**
     * Sets new_user_migration_types
     *
     * @param string $new_user_migration_types Merge first-time saml login to existing user account by email addresses. When a user logs in for the first time via saml this option will connect this user into their existing account by finding the account with a matching email address by testing the given types of credentials for existing users. Otherwise a new user account will be created for the user. This list (if provided) must be a comma separated list of string like 'email,ldap,google'
     *
     * @return $this
     */
    public function setNewUserMigrationTypes($new_user_migration_types)
    {
        $this->container['new_user_migration_types'] = $new_user_migration_types;

        return $this;
    }

    /**
     * Gets alternate_email_login_allowed
     *
     * @return bool
     */
    public function getAlternateEmailLoginAllowed()
    {
        return $this->container['alternate_email_login_allowed'];
    }

    /**
     * Sets alternate_email_login_allowed
     *
     * @param bool $alternate_email_login_allowed Allow alternate email-based login via '/login/email' for admins and for specified users with the 'login_special_email' permission. This option is useful as a fallback during ldap setup, if ldap config problems occur later, or if you need to support some users who are not in your ldap directory. Looker email/password logins are always disabled for regular users when ldap is enabled.
     *
     * @return $this
     */
    public function setAlternateEmailLoginAllowed($alternate_email_login_allowed)
    {
        $this->container['alternate_email_login_allowed'] = $alternate_email_login_allowed;

        return $this;
    }

    /**
     * Gets test_slug
     *
     * @return string
     */
    public function getTestSlug()
    {
        return $this->container['test_slug'];
    }

    /**
     * Sets test_slug
     *
     * @param string $test_slug Slug to identify configurations that are created in order to run a Saml config test
     *
     * @return $this
     */
    public function setTestSlug($test_slug)
    {
        $this->container['test_slug'] = $test_slug;

        return $this;
    }

    /**
     * Gets modified_at
     *
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param string $modified_at When this config was last modified
     *
     * @return $this
     */
    public function setModifiedAt($modified_at)
    {
        $this->container['modified_at'] = $modified_at;

        return $this;
    }

    /**
     * Gets modified_by
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     *
     * @param string $modified_by User id of user who last modified this config
     *
     * @return $this
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets default_new_user_roles
     *
     * @return \Funeralzone\LookerClient\Model\Role[]
     */
    public function getDefaultNewUserRoles()
    {
        return $this->container['default_new_user_roles'];
    }

    /**
     * Sets default_new_user_roles
     *
     * @param \Funeralzone\LookerClient\Model\Role[] $default_new_user_roles (Read-only) Roles that will be applied to new users the first time they login via Saml
     *
     * @return $this
     */
    public function setDefaultNewUserRoles($default_new_user_roles)
    {
        $this->container['default_new_user_roles'] = $default_new_user_roles;

        return $this;
    }

    /**
     * Gets default_new_user_groups
     *
     * @return \Funeralzone\LookerClient\Model\Group[]
     */
    public function getDefaultNewUserGroups()
    {
        return $this->container['default_new_user_groups'];
    }

    /**
     * Sets default_new_user_groups
     *
     * @param \Funeralzone\LookerClient\Model\Group[] $default_new_user_groups (Read-only) Groups that will be applied to new users the first time they login via Saml
     *
     * @return $this
     */
    public function setDefaultNewUserGroups($default_new_user_groups)
    {
        $this->container['default_new_user_groups'] = $default_new_user_groups;

        return $this;
    }

    /**
     * Gets default_new_user_role_ids
     *
     * @return int[]
     */
    public function getDefaultNewUserRoleIds()
    {
        return $this->container['default_new_user_role_ids'];
    }

    /**
     * Sets default_new_user_role_ids
     *
     * @param int[] $default_new_user_role_ids (Write-Only) Array of ids of roles that will be applied to new users the first time they login via Saml
     *
     * @return $this
     */
    public function setDefaultNewUserRoleIds($default_new_user_role_ids)
    {
        $this->container['default_new_user_role_ids'] = $default_new_user_role_ids;

        return $this;
    }

    /**
     * Gets default_new_user_group_ids
     *
     * @return int[]
     */
    public function getDefaultNewUserGroupIds()
    {
        return $this->container['default_new_user_group_ids'];
    }

    /**
     * Sets default_new_user_group_ids
     *
     * @param int[] $default_new_user_group_ids (Write-Only) Array of ids of groups that will be applied to new users the first time they login via Saml
     *
     * @return $this
     */
    public function setDefaultNewUserGroupIds($default_new_user_group_ids)
    {
        $this->container['default_new_user_group_ids'] = $default_new_user_group_ids;

        return $this;
    }

    /**
     * Gets set_roles_from_groups
     *
     * @return bool
     */
    public function getSetRolesFromGroups()
    {
        return $this->container['set_roles_from_groups'];
    }

    /**
     * Sets set_roles_from_groups
     *
     * @param bool $set_roles_from_groups Set user roles in Looker based on groups from Saml
     *
     * @return $this
     */
    public function setSetRolesFromGroups($set_roles_from_groups)
    {
        $this->container['set_roles_from_groups'] = $set_roles_from_groups;

        return $this;
    }

    /**
     * Gets groups_attribute
     *
     * @return string
     */
    public function getGroupsAttribute()
    {
        return $this->container['groups_attribute'];
    }

    /**
     * Sets groups_attribute
     *
     * @param string $groups_attribute Name of user record attributes used to indicate groups. Used when 'groups_finder_type' is set to 'grouped_attribute_values'
     *
     * @return $this
     */
    public function setGroupsAttribute($groups_attribute)
    {
        $this->container['groups_attribute'] = $groups_attribute;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \Funeralzone\LookerClient\Model\SamlGroupRead[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \Funeralzone\LookerClient\Model\SamlGroupRead[] $groups (Read-only) Array of mappings between Saml Groups and Looker Roles
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets groups_with_role_ids
     *
     * @return \Funeralzone\LookerClient\Model\SamlGroupWrite[]
     */
    public function getGroupsWithRoleIds()
    {
        return $this->container['groups_with_role_ids'];
    }

    /**
     * Sets groups_with_role_ids
     *
     * @param \Funeralzone\LookerClient\Model\SamlGroupWrite[] $groups_with_role_ids (Read/Write) Array of mappings between Saml Groups and arrays of Looker Role ids
     *
     * @return $this
     */
    public function setGroupsWithRoleIds($groups_with_role_ids)
    {
        $this->container['groups_with_role_ids'] = $groups_with_role_ids;

        return $this;
    }

    /**
     * Gets auth_requires_role
     *
     * @return bool
     */
    public function getAuthRequiresRole()
    {
        return $this->container['auth_requires_role'];
    }

    /**
     * Sets auth_requires_role
     *
     * @param bool $auth_requires_role Users will not be allowed to login at all unless a role for them is found in Saml if set to true
     *
     * @return $this
     */
    public function setAuthRequiresRole($auth_requires_role)
    {
        $this->container['auth_requires_role'] = $auth_requires_role;

        return $this;
    }

    /**
     * Gets user_attributes
     *
     * @return \Funeralzone\LookerClient\Model\SamlUserAttributeRead[]
     */
    public function getUserAttributes()
    {
        return $this->container['user_attributes'];
    }

    /**
     * Sets user_attributes
     *
     * @param \Funeralzone\LookerClient\Model\SamlUserAttributeRead[] $user_attributes (Read-only) Array of mappings between Saml User Attributes and Looker User Attributes
     *
     * @return $this
     */
    public function setUserAttributes($user_attributes)
    {
        $this->container['user_attributes'] = $user_attributes;

        return $this;
    }

    /**
     * Gets user_attributes_with_ids
     *
     * @return \Funeralzone\LookerClient\Model\SamlUserAttributeWrite[]
     */
    public function getUserAttributesWithIds()
    {
        return $this->container['user_attributes_with_ids'];
    }

    /**
     * Sets user_attributes_with_ids
     *
     * @param \Funeralzone\LookerClient\Model\SamlUserAttributeWrite[] $user_attributes_with_ids (Read/Write) Array of mappings between Saml User Attributes and arrays of Looker User Attribute ids
     *
     * @return $this
     */
    public function setUserAttributesWithIds($user_attributes_with_ids)
    {
        $this->container['user_attributes_with_ids'] = $user_attributes_with_ids;

        return $this;
    }

    /**
     * Gets groups_finder_type
     *
     * @return string
     */
    public function getGroupsFinderType()
    {
        return $this->container['groups_finder_type'];
    }

    /**
     * Sets groups_finder_type
     *
     * @param string $groups_finder_type Identifier for a strategy for how Looker will find groups in the SAML response. One of ['grouped_attribute_values', 'individual_attributes']
     *
     * @return $this
     */
    public function setGroupsFinderType($groups_finder_type)
    {
        $this->container['groups_finder_type'] = $groups_finder_type;

        return $this;
    }

    /**
     * Gets groups_member_value
     *
     * @return string
     */
    public function getGroupsMemberValue()
    {
        return $this->container['groups_member_value'];
    }

    /**
     * Sets groups_member_value
     *
     * @param string $groups_member_value Value for group attribute used to indicate membership. Used when 'groups_finder_type' is set to 'individual_attributes'
     *
     * @return $this
     */
    public function setGroupsMemberValue($groups_member_value)
    {
        $this->container['groups_member_value'] = $groups_member_value;

        return $this;
    }

    /**
     * Gets bypass_login_page
     *
     * @return bool
     */
    public function getBypassLoginPage()
    {
        return $this->container['bypass_login_page'];
    }

    /**
     * Sets bypass_login_page
     *
     * @param bool $bypass_login_page Bypass the login page when user authentication is required. Redirect to IdP immediately instead.
     *
     * @return $this
     */
    public function setBypassLoginPage($bypass_login_page)
    {
        $this->container['bypass_login_page'] = $bypass_login_page;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Link to get this item
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


