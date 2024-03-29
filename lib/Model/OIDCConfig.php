<?php
/**
 * OIDCConfig
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
 * OIDCConfig Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OIDCConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OIDCConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alternate_email_login_allowed' => 'bool',
        'audience' => 'string',
        'auth_requires_role' => 'bool',
        'authorization_endpoint' => 'string',
        'default_new_user_group_ids' => 'int[]',
        'default_new_user_groups' => '\Funeralzone\LookerClient\Model\Group[]',
        'default_new_user_role_ids' => 'int[]',
        'default_new_user_roles' => '\Funeralzone\LookerClient\Model\Role[]',
        'enabled' => 'bool',
        'groups' => '\Funeralzone\LookerClient\Model\OIDCGroupRead[]',
        'groups_attribute' => 'string',
        'groups_with_role_ids' => '\Funeralzone\LookerClient\Model\OIDCGroupWrite[]',
        'identifier' => 'string',
        'issuer' => 'string',
        'modified_at' => '\DateTime',
        'modified_by' => 'int',
        'new_user_migration_types' => 'string',
        'scopes' => 'string[]',
        'secret' => 'string',
        'set_roles_from_groups' => 'bool',
        'test_slug' => 'string',
        'token_endpoint' => 'string',
        'user_attribute_map_email' => 'string',
        'user_attribute_map_first_name' => 'string',
        'user_attribute_map_last_name' => 'string',
        'user_attributes' => '\Funeralzone\LookerClient\Model\OIDCUserAttributeRead[]',
        'user_attributes_with_ids' => '\Funeralzone\LookerClient\Model\OIDCUserAttributeWrite[]',
        'userinfo_endpoint' => 'string',
        'url' => 'string',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alternate_email_login_allowed' => null,
        'audience' => null,
        'auth_requires_role' => null,
        'authorization_endpoint' => 'uri',
        'default_new_user_group_ids' => 'int64',
        'default_new_user_groups' => null,
        'default_new_user_role_ids' => 'int64',
        'default_new_user_roles' => null,
        'enabled' => null,
        'groups' => null,
        'groups_attribute' => null,
        'groups_with_role_ids' => null,
        'identifier' => null,
        'issuer' => null,
        'modified_at' => 'date-time',
        'modified_by' => 'int64',
        'new_user_migration_types' => null,
        'scopes' => null,
        'secret' => null,
        'set_roles_from_groups' => null,
        'test_slug' => null,
        'token_endpoint' => null,
        'user_attribute_map_email' => null,
        'user_attribute_map_first_name' => null,
        'user_attribute_map_last_name' => null,
        'user_attributes' => null,
        'user_attributes_with_ids' => null,
        'userinfo_endpoint' => 'uri',
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
        'alternate_email_login_allowed' => 'alternate_email_login_allowed',
        'audience' => 'audience',
        'auth_requires_role' => 'auth_requires_role',
        'authorization_endpoint' => 'authorization_endpoint',
        'default_new_user_group_ids' => 'default_new_user_group_ids',
        'default_new_user_groups' => 'default_new_user_groups',
        'default_new_user_role_ids' => 'default_new_user_role_ids',
        'default_new_user_roles' => 'default_new_user_roles',
        'enabled' => 'enabled',
        'groups' => 'groups',
        'groups_attribute' => 'groups_attribute',
        'groups_with_role_ids' => 'groups_with_role_ids',
        'identifier' => 'identifier',
        'issuer' => 'issuer',
        'modified_at' => 'modified_at',
        'modified_by' => 'modified_by',
        'new_user_migration_types' => 'new_user_migration_types',
        'scopes' => 'scopes',
        'secret' => 'secret',
        'set_roles_from_groups' => 'set_roles_from_groups',
        'test_slug' => 'test_slug',
        'token_endpoint' => 'token_endpoint',
        'user_attribute_map_email' => 'user_attribute_map_email',
        'user_attribute_map_first_name' => 'user_attribute_map_first_name',
        'user_attribute_map_last_name' => 'user_attribute_map_last_name',
        'user_attributes' => 'user_attributes',
        'user_attributes_with_ids' => 'user_attributes_with_ids',
        'userinfo_endpoint' => 'userinfo_endpoint',
        'url' => 'url',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alternate_email_login_allowed' => 'setAlternateEmailLoginAllowed',
        'audience' => 'setAudience',
        'auth_requires_role' => 'setAuthRequiresRole',
        'authorization_endpoint' => 'setAuthorizationEndpoint',
        'default_new_user_group_ids' => 'setDefaultNewUserGroupIds',
        'default_new_user_groups' => 'setDefaultNewUserGroups',
        'default_new_user_role_ids' => 'setDefaultNewUserRoleIds',
        'default_new_user_roles' => 'setDefaultNewUserRoles',
        'enabled' => 'setEnabled',
        'groups' => 'setGroups',
        'groups_attribute' => 'setGroupsAttribute',
        'groups_with_role_ids' => 'setGroupsWithRoleIds',
        'identifier' => 'setIdentifier',
        'issuer' => 'setIssuer',
        'modified_at' => 'setModifiedAt',
        'modified_by' => 'setModifiedBy',
        'new_user_migration_types' => 'setNewUserMigrationTypes',
        'scopes' => 'setScopes',
        'secret' => 'setSecret',
        'set_roles_from_groups' => 'setSetRolesFromGroups',
        'test_slug' => 'setTestSlug',
        'token_endpoint' => 'setTokenEndpoint',
        'user_attribute_map_email' => 'setUserAttributeMapEmail',
        'user_attribute_map_first_name' => 'setUserAttributeMapFirstName',
        'user_attribute_map_last_name' => 'setUserAttributeMapLastName',
        'user_attributes' => 'setUserAttributes',
        'user_attributes_with_ids' => 'setUserAttributesWithIds',
        'userinfo_endpoint' => 'setUserinfoEndpoint',
        'url' => 'setUrl',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alternate_email_login_allowed' => 'getAlternateEmailLoginAllowed',
        'audience' => 'getAudience',
        'auth_requires_role' => 'getAuthRequiresRole',
        'authorization_endpoint' => 'getAuthorizationEndpoint',
        'default_new_user_group_ids' => 'getDefaultNewUserGroupIds',
        'default_new_user_groups' => 'getDefaultNewUserGroups',
        'default_new_user_role_ids' => 'getDefaultNewUserRoleIds',
        'default_new_user_roles' => 'getDefaultNewUserRoles',
        'enabled' => 'getEnabled',
        'groups' => 'getGroups',
        'groups_attribute' => 'getGroupsAttribute',
        'groups_with_role_ids' => 'getGroupsWithRoleIds',
        'identifier' => 'getIdentifier',
        'issuer' => 'getIssuer',
        'modified_at' => 'getModifiedAt',
        'modified_by' => 'getModifiedBy',
        'new_user_migration_types' => 'getNewUserMigrationTypes',
        'scopes' => 'getScopes',
        'secret' => 'getSecret',
        'set_roles_from_groups' => 'getSetRolesFromGroups',
        'test_slug' => 'getTestSlug',
        'token_endpoint' => 'getTokenEndpoint',
        'user_attribute_map_email' => 'getUserAttributeMapEmail',
        'user_attribute_map_first_name' => 'getUserAttributeMapFirstName',
        'user_attribute_map_last_name' => 'getUserAttributeMapLastName',
        'user_attributes' => 'getUserAttributes',
        'user_attributes_with_ids' => 'getUserAttributesWithIds',
        'userinfo_endpoint' => 'getUserinfoEndpoint',
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
        $this->container['alternate_email_login_allowed'] = isset($data['alternate_email_login_allowed']) ? $data['alternate_email_login_allowed'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['auth_requires_role'] = isset($data['auth_requires_role']) ? $data['auth_requires_role'] : null;
        $this->container['authorization_endpoint'] = isset($data['authorization_endpoint']) ? $data['authorization_endpoint'] : null;
        $this->container['default_new_user_group_ids'] = isset($data['default_new_user_group_ids']) ? $data['default_new_user_group_ids'] : null;
        $this->container['default_new_user_groups'] = isset($data['default_new_user_groups']) ? $data['default_new_user_groups'] : null;
        $this->container['default_new_user_role_ids'] = isset($data['default_new_user_role_ids']) ? $data['default_new_user_role_ids'] : null;
        $this->container['default_new_user_roles'] = isset($data['default_new_user_roles']) ? $data['default_new_user_roles'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['groups_attribute'] = isset($data['groups_attribute']) ? $data['groups_attribute'] : null;
        $this->container['groups_with_role_ids'] = isset($data['groups_with_role_ids']) ? $data['groups_with_role_ids'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
        $this->container['modified_by'] = isset($data['modified_by']) ? $data['modified_by'] : null;
        $this->container['new_user_migration_types'] = isset($data['new_user_migration_types']) ? $data['new_user_migration_types'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['set_roles_from_groups'] = isset($data['set_roles_from_groups']) ? $data['set_roles_from_groups'] : null;
        $this->container['test_slug'] = isset($data['test_slug']) ? $data['test_slug'] : null;
        $this->container['token_endpoint'] = isset($data['token_endpoint']) ? $data['token_endpoint'] : null;
        $this->container['user_attribute_map_email'] = isset($data['user_attribute_map_email']) ? $data['user_attribute_map_email'] : null;
        $this->container['user_attribute_map_first_name'] = isset($data['user_attribute_map_first_name']) ? $data['user_attribute_map_first_name'] : null;
        $this->container['user_attribute_map_last_name'] = isset($data['user_attribute_map_last_name']) ? $data['user_attribute_map_last_name'] : null;
        $this->container['user_attributes'] = isset($data['user_attributes']) ? $data['user_attributes'] : null;
        $this->container['user_attributes_with_ids'] = isset($data['user_attributes_with_ids']) ? $data['user_attributes_with_ids'] : null;
        $this->container['userinfo_endpoint'] = isset($data['userinfo_endpoint']) ? $data['userinfo_endpoint'] : null;
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
     * Gets audience
     *
     * @return string
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     *
     * @param string $audience OpenID Provider Audience
     *
     * @return $this
     */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;

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
     * @param bool $auth_requires_role Users will not be allowed to login at all unless a role for them is found in OIDC if set to true
     *
     * @return $this
     */
    public function setAuthRequiresRole($auth_requires_role)
    {
        $this->container['auth_requires_role'] = $auth_requires_role;

        return $this;
    }

    /**
     * Gets authorization_endpoint
     *
     * @return string
     */
    public function getAuthorizationEndpoint()
    {
        return $this->container['authorization_endpoint'];
    }

    /**
     * Sets authorization_endpoint
     *
     * @param string $authorization_endpoint OpenID Provider Authorization Url
     *
     * @return $this
     */
    public function setAuthorizationEndpoint($authorization_endpoint)
    {
        $this->container['authorization_endpoint'] = $authorization_endpoint;

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
     * @param int[] $default_new_user_group_ids (Write-Only) Array of ids of groups that will be applied to new users the first time they login via OIDC
     *
     * @return $this
     */
    public function setDefaultNewUserGroupIds($default_new_user_group_ids)
    {
        $this->container['default_new_user_group_ids'] = $default_new_user_group_ids;

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
     * @param \Funeralzone\LookerClient\Model\Group[] $default_new_user_groups (Read-only) Groups that will be applied to new users the first time they login via OIDC
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
     * @param int[] $default_new_user_role_ids (Write-Only) Array of ids of roles that will be applied to new users the first time they login via OIDC
     *
     * @return $this
     */
    public function setDefaultNewUserRoleIds($default_new_user_role_ids)
    {
        $this->container['default_new_user_role_ids'] = $default_new_user_role_ids;

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
     * @param \Funeralzone\LookerClient\Model\Role[] $default_new_user_roles (Read-only) Roles that will be applied to new users the first time they login via OIDC
     *
     * @return $this
     */
    public function setDefaultNewUserRoles($default_new_user_roles)
    {
        $this->container['default_new_user_roles'] = $default_new_user_roles;

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
     * @param bool $enabled Enable/Disable OIDC authentication for the server
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \Funeralzone\LookerClient\Model\OIDCGroupRead[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \Funeralzone\LookerClient\Model\OIDCGroupRead[] $groups (Read-only) Array of mappings between OIDC Groups and Looker Roles
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

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
     * Gets groups_with_role_ids
     *
     * @return \Funeralzone\LookerClient\Model\OIDCGroupWrite[]
     */
    public function getGroupsWithRoleIds()
    {
        return $this->container['groups_with_role_ids'];
    }

    /**
     * Sets groups_with_role_ids
     *
     * @param \Funeralzone\LookerClient\Model\OIDCGroupWrite[] $groups_with_role_ids (Read/Write) Array of mappings between OIDC Groups and arrays of Looker Role ids
     *
     * @return $this
     */
    public function setGroupsWithRoleIds($groups_with_role_ids)
    {
        $this->container['groups_with_role_ids'] = $groups_with_role_ids;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Relying Party Identifier (provided by OpenID Provider)
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string $issuer OpenID Provider Issuer
     *
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets modified_at
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param \DateTime $modified_at When this config was last modified
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
     * @return int
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     *
     * @param int $modified_by User id of user who last modified this config
     *
     * @return $this
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

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
     * @param string $new_user_migration_types Merge first-time oidc login to existing user account by email addresses. When a user logs in for the first time via oidc this option will connect this user into their existing account by finding the account with a matching email address by testing the given types of credentials for existing users. Otherwise a new user account will be created for the user. This list (if provided) must be a comma separated list of string like 'email,ldap,google'
     *
     * @return $this
     */
    public function setNewUserMigrationTypes($new_user_migration_types)
    {
        $this->container['new_user_migration_types'] = $new_user_migration_types;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return string[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param string[] $scopes Array of scopes to request.
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string $secret (Write-Only) Relying Party Secret (provided by OpenID Provider)
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

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
     * @param bool $set_roles_from_groups Set user roles in Looker based on groups from OIDC
     *
     * @return $this
     */
    public function setSetRolesFromGroups($set_roles_from_groups)
    {
        $this->container['set_roles_from_groups'] = $set_roles_from_groups;

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
     * @param string $test_slug Slug to identify configurations that are created in order to run a OIDC config test
     *
     * @return $this
     */
    public function setTestSlug($test_slug)
    {
        $this->container['test_slug'] = $test_slug;

        return $this;
    }

    /**
     * Gets token_endpoint
     *
     * @return string
     */
    public function getTokenEndpoint()
    {
        return $this->container['token_endpoint'];
    }

    /**
     * Sets token_endpoint
     *
     * @param string $token_endpoint OpenID Provider Token Url
     *
     * @return $this
     */
    public function setTokenEndpoint($token_endpoint)
    {
        $this->container['token_endpoint'] = $token_endpoint;

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
     * Gets user_attributes
     *
     * @return \Funeralzone\LookerClient\Model\OIDCUserAttributeRead[]
     */
    public function getUserAttributes()
    {
        return $this->container['user_attributes'];
    }

    /**
     * Sets user_attributes
     *
     * @param \Funeralzone\LookerClient\Model\OIDCUserAttributeRead[] $user_attributes (Read-only) Array of mappings between OIDC User Attributes and Looker User Attributes
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
     * @return \Funeralzone\LookerClient\Model\OIDCUserAttributeWrite[]
     */
    public function getUserAttributesWithIds()
    {
        return $this->container['user_attributes_with_ids'];
    }

    /**
     * Sets user_attributes_with_ids
     *
     * @param \Funeralzone\LookerClient\Model\OIDCUserAttributeWrite[] $user_attributes_with_ids (Read/Write) Array of mappings between OIDC User Attributes and arrays of Looker User Attribute ids
     *
     * @return $this
     */
    public function setUserAttributesWithIds($user_attributes_with_ids)
    {
        $this->container['user_attributes_with_ids'] = $user_attributes_with_ids;

        return $this;
    }

    /**
     * Gets userinfo_endpoint
     *
     * @return string
     */
    public function getUserinfoEndpoint()
    {
        return $this->container['userinfo_endpoint'];
    }

    /**
     * Sets userinfo_endpoint
     *
     * @param string $userinfo_endpoint OpenID Provider User Information Url
     *
     * @return $this
     */
    public function setUserinfoEndpoint($userinfo_endpoint)
    {
        $this->container['userinfo_endpoint'] = $userinfo_endpoint;

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


