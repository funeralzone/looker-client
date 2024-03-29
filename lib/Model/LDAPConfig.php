<?php
/**
 * LDAPConfig
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
 * LDAPConfig Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LDAPConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LDAPConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alternate_email_login_allowed' => 'bool',
        'auth_password' => 'string',
        'auth_requires_role' => 'bool',
        'auth_username' => 'string',
        'connection_host' => 'string',
        'connection_port' => 'string',
        'connection_tls' => 'bool',
        'connection_tls_no_verify' => 'bool',
        'default_new_user_group_ids' => 'int[]',
        'default_new_user_groups' => '\Funeralzone\LookerClient\Model\Group[]',
        'default_new_user_role_ids' => 'int[]',
        'default_new_user_roles' => '\Funeralzone\LookerClient\Model\Role[]',
        'enabled' => 'bool',
        'force_no_page' => 'bool',
        'groups' => '\Funeralzone\LookerClient\Model\LDAPGroupRead[]',
        'groups_base_dn' => 'string',
        'groups_finder_type' => 'string',
        'groups_member_attribute' => 'string',
        'groups_objectclasses' => 'string',
        'groups_user_attribute' => 'string',
        'groups_with_role_ids' => '\Funeralzone\LookerClient\Model\LDAPGroupWrite[]',
        'has_auth_password' => 'bool',
        'merge_new_users_by_email' => 'bool',
        'modified_at' => 'string',
        'modified_by' => 'string',
        'set_roles_from_groups' => 'bool',
        'test_ldap_password' => 'string',
        'test_ldap_user' => 'string',
        'user_attribute_map_email' => 'string',
        'user_attribute_map_first_name' => 'string',
        'user_attribute_map_last_name' => 'string',
        'user_attribute_map_ldap_id' => 'string',
        'user_attributes' => '\Funeralzone\LookerClient\Model\LDAPUserAttributeRead[]',
        'user_attributes_with_ids' => '\Funeralzone\LookerClient\Model\LDAPUserAttributeWrite[]',
        'user_bind_base_dn' => 'string',
        'user_custom_filter' => 'string',
        'user_id_attribute_names' => 'string',
        'user_objectclass' => 'string',
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
        'auth_password' => null,
        'auth_requires_role' => null,
        'auth_username' => null,
        'connection_host' => null,
        'connection_port' => null,
        'connection_tls' => null,
        'connection_tls_no_verify' => null,
        'default_new_user_group_ids' => 'int64',
        'default_new_user_groups' => null,
        'default_new_user_role_ids' => 'int64',
        'default_new_user_roles' => null,
        'enabled' => null,
        'force_no_page' => null,
        'groups' => null,
        'groups_base_dn' => null,
        'groups_finder_type' => null,
        'groups_member_attribute' => null,
        'groups_objectclasses' => null,
        'groups_user_attribute' => null,
        'groups_with_role_ids' => null,
        'has_auth_password' => null,
        'merge_new_users_by_email' => null,
        'modified_at' => null,
        'modified_by' => null,
        'set_roles_from_groups' => null,
        'test_ldap_password' => null,
        'test_ldap_user' => null,
        'user_attribute_map_email' => null,
        'user_attribute_map_first_name' => null,
        'user_attribute_map_last_name' => null,
        'user_attribute_map_ldap_id' => null,
        'user_attributes' => null,
        'user_attributes_with_ids' => null,
        'user_bind_base_dn' => null,
        'user_custom_filter' => null,
        'user_id_attribute_names' => null,
        'user_objectclass' => null,
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
        'auth_password' => 'auth_password',
        'auth_requires_role' => 'auth_requires_role',
        'auth_username' => 'auth_username',
        'connection_host' => 'connection_host',
        'connection_port' => 'connection_port',
        'connection_tls' => 'connection_tls',
        'connection_tls_no_verify' => 'connection_tls_no_verify',
        'default_new_user_group_ids' => 'default_new_user_group_ids',
        'default_new_user_groups' => 'default_new_user_groups',
        'default_new_user_role_ids' => 'default_new_user_role_ids',
        'default_new_user_roles' => 'default_new_user_roles',
        'enabled' => 'enabled',
        'force_no_page' => 'force_no_page',
        'groups' => 'groups',
        'groups_base_dn' => 'groups_base_dn',
        'groups_finder_type' => 'groups_finder_type',
        'groups_member_attribute' => 'groups_member_attribute',
        'groups_objectclasses' => 'groups_objectclasses',
        'groups_user_attribute' => 'groups_user_attribute',
        'groups_with_role_ids' => 'groups_with_role_ids',
        'has_auth_password' => 'has_auth_password',
        'merge_new_users_by_email' => 'merge_new_users_by_email',
        'modified_at' => 'modified_at',
        'modified_by' => 'modified_by',
        'set_roles_from_groups' => 'set_roles_from_groups',
        'test_ldap_password' => 'test_ldap_password',
        'test_ldap_user' => 'test_ldap_user',
        'user_attribute_map_email' => 'user_attribute_map_email',
        'user_attribute_map_first_name' => 'user_attribute_map_first_name',
        'user_attribute_map_last_name' => 'user_attribute_map_last_name',
        'user_attribute_map_ldap_id' => 'user_attribute_map_ldap_id',
        'user_attributes' => 'user_attributes',
        'user_attributes_with_ids' => 'user_attributes_with_ids',
        'user_bind_base_dn' => 'user_bind_base_dn',
        'user_custom_filter' => 'user_custom_filter',
        'user_id_attribute_names' => 'user_id_attribute_names',
        'user_objectclass' => 'user_objectclass',
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
        'auth_password' => 'setAuthPassword',
        'auth_requires_role' => 'setAuthRequiresRole',
        'auth_username' => 'setAuthUsername',
        'connection_host' => 'setConnectionHost',
        'connection_port' => 'setConnectionPort',
        'connection_tls' => 'setConnectionTls',
        'connection_tls_no_verify' => 'setConnectionTlsNoVerify',
        'default_new_user_group_ids' => 'setDefaultNewUserGroupIds',
        'default_new_user_groups' => 'setDefaultNewUserGroups',
        'default_new_user_role_ids' => 'setDefaultNewUserRoleIds',
        'default_new_user_roles' => 'setDefaultNewUserRoles',
        'enabled' => 'setEnabled',
        'force_no_page' => 'setForceNoPage',
        'groups' => 'setGroups',
        'groups_base_dn' => 'setGroupsBaseDn',
        'groups_finder_type' => 'setGroupsFinderType',
        'groups_member_attribute' => 'setGroupsMemberAttribute',
        'groups_objectclasses' => 'setGroupsObjectclasses',
        'groups_user_attribute' => 'setGroupsUserAttribute',
        'groups_with_role_ids' => 'setGroupsWithRoleIds',
        'has_auth_password' => 'setHasAuthPassword',
        'merge_new_users_by_email' => 'setMergeNewUsersByEmail',
        'modified_at' => 'setModifiedAt',
        'modified_by' => 'setModifiedBy',
        'set_roles_from_groups' => 'setSetRolesFromGroups',
        'test_ldap_password' => 'setTestLdapPassword',
        'test_ldap_user' => 'setTestLdapUser',
        'user_attribute_map_email' => 'setUserAttributeMapEmail',
        'user_attribute_map_first_name' => 'setUserAttributeMapFirstName',
        'user_attribute_map_last_name' => 'setUserAttributeMapLastName',
        'user_attribute_map_ldap_id' => 'setUserAttributeMapLdapId',
        'user_attributes' => 'setUserAttributes',
        'user_attributes_with_ids' => 'setUserAttributesWithIds',
        'user_bind_base_dn' => 'setUserBindBaseDn',
        'user_custom_filter' => 'setUserCustomFilter',
        'user_id_attribute_names' => 'setUserIdAttributeNames',
        'user_objectclass' => 'setUserObjectclass',
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
        'auth_password' => 'getAuthPassword',
        'auth_requires_role' => 'getAuthRequiresRole',
        'auth_username' => 'getAuthUsername',
        'connection_host' => 'getConnectionHost',
        'connection_port' => 'getConnectionPort',
        'connection_tls' => 'getConnectionTls',
        'connection_tls_no_verify' => 'getConnectionTlsNoVerify',
        'default_new_user_group_ids' => 'getDefaultNewUserGroupIds',
        'default_new_user_groups' => 'getDefaultNewUserGroups',
        'default_new_user_role_ids' => 'getDefaultNewUserRoleIds',
        'default_new_user_roles' => 'getDefaultNewUserRoles',
        'enabled' => 'getEnabled',
        'force_no_page' => 'getForceNoPage',
        'groups' => 'getGroups',
        'groups_base_dn' => 'getGroupsBaseDn',
        'groups_finder_type' => 'getGroupsFinderType',
        'groups_member_attribute' => 'getGroupsMemberAttribute',
        'groups_objectclasses' => 'getGroupsObjectclasses',
        'groups_user_attribute' => 'getGroupsUserAttribute',
        'groups_with_role_ids' => 'getGroupsWithRoleIds',
        'has_auth_password' => 'getHasAuthPassword',
        'merge_new_users_by_email' => 'getMergeNewUsersByEmail',
        'modified_at' => 'getModifiedAt',
        'modified_by' => 'getModifiedBy',
        'set_roles_from_groups' => 'getSetRolesFromGroups',
        'test_ldap_password' => 'getTestLdapPassword',
        'test_ldap_user' => 'getTestLdapUser',
        'user_attribute_map_email' => 'getUserAttributeMapEmail',
        'user_attribute_map_first_name' => 'getUserAttributeMapFirstName',
        'user_attribute_map_last_name' => 'getUserAttributeMapLastName',
        'user_attribute_map_ldap_id' => 'getUserAttributeMapLdapId',
        'user_attributes' => 'getUserAttributes',
        'user_attributes_with_ids' => 'getUserAttributesWithIds',
        'user_bind_base_dn' => 'getUserBindBaseDn',
        'user_custom_filter' => 'getUserCustomFilter',
        'user_id_attribute_names' => 'getUserIdAttributeNames',
        'user_objectclass' => 'getUserObjectclass',
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
        $this->container['auth_password'] = isset($data['auth_password']) ? $data['auth_password'] : null;
        $this->container['auth_requires_role'] = isset($data['auth_requires_role']) ? $data['auth_requires_role'] : null;
        $this->container['auth_username'] = isset($data['auth_username']) ? $data['auth_username'] : null;
        $this->container['connection_host'] = isset($data['connection_host']) ? $data['connection_host'] : null;
        $this->container['connection_port'] = isset($data['connection_port']) ? $data['connection_port'] : null;
        $this->container['connection_tls'] = isset($data['connection_tls']) ? $data['connection_tls'] : null;
        $this->container['connection_tls_no_verify'] = isset($data['connection_tls_no_verify']) ? $data['connection_tls_no_verify'] : null;
        $this->container['default_new_user_group_ids'] = isset($data['default_new_user_group_ids']) ? $data['default_new_user_group_ids'] : null;
        $this->container['default_new_user_groups'] = isset($data['default_new_user_groups']) ? $data['default_new_user_groups'] : null;
        $this->container['default_new_user_role_ids'] = isset($data['default_new_user_role_ids']) ? $data['default_new_user_role_ids'] : null;
        $this->container['default_new_user_roles'] = isset($data['default_new_user_roles']) ? $data['default_new_user_roles'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['force_no_page'] = isset($data['force_no_page']) ? $data['force_no_page'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['groups_base_dn'] = isset($data['groups_base_dn']) ? $data['groups_base_dn'] : null;
        $this->container['groups_finder_type'] = isset($data['groups_finder_type']) ? $data['groups_finder_type'] : null;
        $this->container['groups_member_attribute'] = isset($data['groups_member_attribute']) ? $data['groups_member_attribute'] : null;
        $this->container['groups_objectclasses'] = isset($data['groups_objectclasses']) ? $data['groups_objectclasses'] : null;
        $this->container['groups_user_attribute'] = isset($data['groups_user_attribute']) ? $data['groups_user_attribute'] : null;
        $this->container['groups_with_role_ids'] = isset($data['groups_with_role_ids']) ? $data['groups_with_role_ids'] : null;
        $this->container['has_auth_password'] = isset($data['has_auth_password']) ? $data['has_auth_password'] : null;
        $this->container['merge_new_users_by_email'] = isset($data['merge_new_users_by_email']) ? $data['merge_new_users_by_email'] : null;
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
        $this->container['modified_by'] = isset($data['modified_by']) ? $data['modified_by'] : null;
        $this->container['set_roles_from_groups'] = isset($data['set_roles_from_groups']) ? $data['set_roles_from_groups'] : null;
        $this->container['test_ldap_password'] = isset($data['test_ldap_password']) ? $data['test_ldap_password'] : null;
        $this->container['test_ldap_user'] = isset($data['test_ldap_user']) ? $data['test_ldap_user'] : null;
        $this->container['user_attribute_map_email'] = isset($data['user_attribute_map_email']) ? $data['user_attribute_map_email'] : null;
        $this->container['user_attribute_map_first_name'] = isset($data['user_attribute_map_first_name']) ? $data['user_attribute_map_first_name'] : null;
        $this->container['user_attribute_map_last_name'] = isset($data['user_attribute_map_last_name']) ? $data['user_attribute_map_last_name'] : null;
        $this->container['user_attribute_map_ldap_id'] = isset($data['user_attribute_map_ldap_id']) ? $data['user_attribute_map_ldap_id'] : null;
        $this->container['user_attributes'] = isset($data['user_attributes']) ? $data['user_attributes'] : null;
        $this->container['user_attributes_with_ids'] = isset($data['user_attributes_with_ids']) ? $data['user_attributes_with_ids'] : null;
        $this->container['user_bind_base_dn'] = isset($data['user_bind_base_dn']) ? $data['user_bind_base_dn'] : null;
        $this->container['user_custom_filter'] = isset($data['user_custom_filter']) ? $data['user_custom_filter'] : null;
        $this->container['user_id_attribute_names'] = isset($data['user_id_attribute_names']) ? $data['user_id_attribute_names'] : null;
        $this->container['user_objectclass'] = isset($data['user_objectclass']) ? $data['user_objectclass'] : null;
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
     * Gets auth_password
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->container['auth_password'];
    }

    /**
     * Sets auth_password
     *
     * @param string $auth_password (Write-Only)  Password for the LDAP account used to access the LDAP server
     *
     * @return $this
     */
    public function setAuthPassword($auth_password)
    {
        $this->container['auth_password'] = $auth_password;

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
     * @param bool $auth_requires_role Users will not be allowed to login at all unless a role for them is found in LDAP if set to true
     *
     * @return $this
     */
    public function setAuthRequiresRole($auth_requires_role)
    {
        $this->container['auth_requires_role'] = $auth_requires_role;

        return $this;
    }

    /**
     * Gets auth_username
     *
     * @return string
     */
    public function getAuthUsername()
    {
        return $this->container['auth_username'];
    }

    /**
     * Sets auth_username
     *
     * @param string $auth_username Distinguished name of LDAP account used to access the LDAP server
     *
     * @return $this
     */
    public function setAuthUsername($auth_username)
    {
        $this->container['auth_username'] = $auth_username;

        return $this;
    }

    /**
     * Gets connection_host
     *
     * @return string
     */
    public function getConnectionHost()
    {
        return $this->container['connection_host'];
    }

    /**
     * Sets connection_host
     *
     * @param string $connection_host LDAP server hostname
     *
     * @return $this
     */
    public function setConnectionHost($connection_host)
    {
        $this->container['connection_host'] = $connection_host;

        return $this;
    }

    /**
     * Gets connection_port
     *
     * @return string
     */
    public function getConnectionPort()
    {
        return $this->container['connection_port'];
    }

    /**
     * Sets connection_port
     *
     * @param string $connection_port LDAP host port
     *
     * @return $this
     */
    public function setConnectionPort($connection_port)
    {
        $this->container['connection_port'] = $connection_port;

        return $this;
    }

    /**
     * Gets connection_tls
     *
     * @return bool
     */
    public function getConnectionTls()
    {
        return $this->container['connection_tls'];
    }

    /**
     * Sets connection_tls
     *
     * @param bool $connection_tls Use Transport Layer Security
     *
     * @return $this
     */
    public function setConnectionTls($connection_tls)
    {
        $this->container['connection_tls'] = $connection_tls;

        return $this;
    }

    /**
     * Gets connection_tls_no_verify
     *
     * @return bool
     */
    public function getConnectionTlsNoVerify()
    {
        return $this->container['connection_tls_no_verify'];
    }

    /**
     * Sets connection_tls_no_verify
     *
     * @param bool $connection_tls_no_verify Do not verify peer when using TLS
     *
     * @return $this
     */
    public function setConnectionTlsNoVerify($connection_tls_no_verify)
    {
        $this->container['connection_tls_no_verify'] = $connection_tls_no_verify;

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
     * @param int[] $default_new_user_group_ids (Write-Only)  Array of ids of groups that will be applied to new users the first time they login via LDAP
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
     * @param \Funeralzone\LookerClient\Model\Group[] $default_new_user_groups (Read-only) Groups that will be applied to new users the first time they login via LDAP
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
     * @param int[] $default_new_user_role_ids (Write-Only)  Array of ids of roles that will be applied to new users the first time they login via LDAP
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
     * @param \Funeralzone\LookerClient\Model\Role[] $default_new_user_roles (Read-only) Roles that will be applied to new users the first time they login via LDAP
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
     * @param bool $enabled Enable/Disable LDAP authentication for the server
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets force_no_page
     *
     * @return bool
     */
    public function getForceNoPage()
    {
        return $this->container['force_no_page'];
    }

    /**
     * Sets force_no_page
     *
     * @param bool $force_no_page Don't attempt to do LDAP search result paging (RFC 2696) even if the LDAP server claims to support it.
     *
     * @return $this
     */
    public function setForceNoPage($force_no_page)
    {
        $this->container['force_no_page'] = $force_no_page;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \Funeralzone\LookerClient\Model\LDAPGroupRead[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \Funeralzone\LookerClient\Model\LDAPGroupRead[] $groups (Read-only) Array of mappings between LDAP Groups and Looker Roles
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets groups_base_dn
     *
     * @return string
     */
    public function getGroupsBaseDn()
    {
        return $this->container['groups_base_dn'];
    }

    /**
     * Sets groups_base_dn
     *
     * @param string $groups_base_dn Base dn for finding groups in LDAP searches
     *
     * @return $this
     */
    public function setGroupsBaseDn($groups_base_dn)
    {
        $this->container['groups_base_dn'] = $groups_base_dn;

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
     * @param string $groups_finder_type Identifier for a strategy for how Looker will search for groups in the LDAP server
     *
     * @return $this
     */
    public function setGroupsFinderType($groups_finder_type)
    {
        $this->container['groups_finder_type'] = $groups_finder_type;

        return $this;
    }

    /**
     * Gets groups_member_attribute
     *
     * @return string
     */
    public function getGroupsMemberAttribute()
    {
        return $this->container['groups_member_attribute'];
    }

    /**
     * Sets groups_member_attribute
     *
     * @param string $groups_member_attribute LDAP Group attribute that signifies the members of the groups. Most commonly 'member'
     *
     * @return $this
     */
    public function setGroupsMemberAttribute($groups_member_attribute)
    {
        $this->container['groups_member_attribute'] = $groups_member_attribute;

        return $this;
    }

    /**
     * Gets groups_objectclasses
     *
     * @return string
     */
    public function getGroupsObjectclasses()
    {
        return $this->container['groups_objectclasses'];
    }

    /**
     * Sets groups_objectclasses
     *
     * @param string $groups_objectclasses Optional comma-separated list of supported LDAP objectclass for groups when doing groups searches
     *
     * @return $this
     */
    public function setGroupsObjectclasses($groups_objectclasses)
    {
        $this->container['groups_objectclasses'] = $groups_objectclasses;

        return $this;
    }

    /**
     * Gets groups_user_attribute
     *
     * @return string
     */
    public function getGroupsUserAttribute()
    {
        return $this->container['groups_user_attribute'];
    }

    /**
     * Sets groups_user_attribute
     *
     * @param string $groups_user_attribute LDAP Group attribute that signifies the user in a group. Most commonly 'dn'
     *
     * @return $this
     */
    public function setGroupsUserAttribute($groups_user_attribute)
    {
        $this->container['groups_user_attribute'] = $groups_user_attribute;

        return $this;
    }

    /**
     * Gets groups_with_role_ids
     *
     * @return \Funeralzone\LookerClient\Model\LDAPGroupWrite[]
     */
    public function getGroupsWithRoleIds()
    {
        return $this->container['groups_with_role_ids'];
    }

    /**
     * Sets groups_with_role_ids
     *
     * @param \Funeralzone\LookerClient\Model\LDAPGroupWrite[] $groups_with_role_ids (Read/Write) Array of mappings between LDAP Groups and arrays of Looker Role ids
     *
     * @return $this
     */
    public function setGroupsWithRoleIds($groups_with_role_ids)
    {
        $this->container['groups_with_role_ids'] = $groups_with_role_ids;

        return $this;
    }

    /**
     * Gets has_auth_password
     *
     * @return bool
     */
    public function getHasAuthPassword()
    {
        return $this->container['has_auth_password'];
    }

    /**
     * Sets has_auth_password
     *
     * @param bool $has_auth_password (Read-only) Has the password been set for the LDAP account used to access the LDAP server
     *
     * @return $this
     */
    public function setHasAuthPassword($has_auth_password)
    {
        $this->container['has_auth_password'] = $has_auth_password;

        return $this;
    }

    /**
     * Gets merge_new_users_by_email
     *
     * @return bool
     */
    public function getMergeNewUsersByEmail()
    {
        return $this->container['merge_new_users_by_email'];
    }

    /**
     * Sets merge_new_users_by_email
     *
     * @param bool $merge_new_users_by_email Merge first-time ldap login to existing user account by email addresses. When a user logs in for the first time via ldap this option will connect this user into their existing account by finding the account with a matching email address. Otherwise a new user account will be created for the user.
     *
     * @return $this
     */
    public function setMergeNewUsersByEmail($merge_new_users_by_email)
    {
        $this->container['merge_new_users_by_email'] = $merge_new_users_by_email;

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
     * @param bool $set_roles_from_groups Set user roles in Looker based on groups from LDAP
     *
     * @return $this
     */
    public function setSetRolesFromGroups($set_roles_from_groups)
    {
        $this->container['set_roles_from_groups'] = $set_roles_from_groups;

        return $this;
    }

    /**
     * Gets test_ldap_password
     *
     * @return string
     */
    public function getTestLdapPassword()
    {
        return $this->container['test_ldap_password'];
    }

    /**
     * Sets test_ldap_password
     *
     * @param string $test_ldap_password (Write-Only)  Test LDAP user password. For ldap tests only.
     *
     * @return $this
     */
    public function setTestLdapPassword($test_ldap_password)
    {
        $this->container['test_ldap_password'] = $test_ldap_password;

        return $this;
    }

    /**
     * Gets test_ldap_user
     *
     * @return string
     */
    public function getTestLdapUser()
    {
        return $this->container['test_ldap_user'];
    }

    /**
     * Sets test_ldap_user
     *
     * @param string $test_ldap_user (Write-Only)  Test LDAP user login id. For ldap tests only.
     *
     * @return $this
     */
    public function setTestLdapUser($test_ldap_user)
    {
        $this->container['test_ldap_user'] = $test_ldap_user;

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
     * Gets user_attribute_map_ldap_id
     *
     * @return string
     */
    public function getUserAttributeMapLdapId()
    {
        return $this->container['user_attribute_map_ldap_id'];
    }

    /**
     * Sets user_attribute_map_ldap_id
     *
     * @param string $user_attribute_map_ldap_id Name of user record attributes used to indicate unique record id
     *
     * @return $this
     */
    public function setUserAttributeMapLdapId($user_attribute_map_ldap_id)
    {
        $this->container['user_attribute_map_ldap_id'] = $user_attribute_map_ldap_id;

        return $this;
    }

    /**
     * Gets user_attributes
     *
     * @return \Funeralzone\LookerClient\Model\LDAPUserAttributeRead[]
     */
    public function getUserAttributes()
    {
        return $this->container['user_attributes'];
    }

    /**
     * Sets user_attributes
     *
     * @param \Funeralzone\LookerClient\Model\LDAPUserAttributeRead[] $user_attributes (Read-only) Array of mappings between LDAP User Attributes and Looker User Attributes
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
     * @return \Funeralzone\LookerClient\Model\LDAPUserAttributeWrite[]
     */
    public function getUserAttributesWithIds()
    {
        return $this->container['user_attributes_with_ids'];
    }

    /**
     * Sets user_attributes_with_ids
     *
     * @param \Funeralzone\LookerClient\Model\LDAPUserAttributeWrite[] $user_attributes_with_ids (Read/Write) Array of mappings between LDAP User Attributes and arrays of Looker User Attribute ids
     *
     * @return $this
     */
    public function setUserAttributesWithIds($user_attributes_with_ids)
    {
        $this->container['user_attributes_with_ids'] = $user_attributes_with_ids;

        return $this;
    }

    /**
     * Gets user_bind_base_dn
     *
     * @return string
     */
    public function getUserBindBaseDn()
    {
        return $this->container['user_bind_base_dn'];
    }

    /**
     * Sets user_bind_base_dn
     *
     * @param string $user_bind_base_dn Distinguished name of LDAP node used as the base for user searches
     *
     * @return $this
     */
    public function setUserBindBaseDn($user_bind_base_dn)
    {
        $this->container['user_bind_base_dn'] = $user_bind_base_dn;

        return $this;
    }

    /**
     * Gets user_custom_filter
     *
     * @return string
     */
    public function getUserCustomFilter()
    {
        return $this->container['user_custom_filter'];
    }

    /**
     * Sets user_custom_filter
     *
     * @param string $user_custom_filter (Optional) Custom RFC-2254 filter clause for use in finding user during login. Combined via 'and' with the other generated filter clauses.
     *
     * @return $this
     */
    public function setUserCustomFilter($user_custom_filter)
    {
        $this->container['user_custom_filter'] = $user_custom_filter;

        return $this;
    }

    /**
     * Gets user_id_attribute_names
     *
     * @return string
     */
    public function getUserIdAttributeNames()
    {
        return $this->container['user_id_attribute_names'];
    }

    /**
     * Sets user_id_attribute_names
     *
     * @param string $user_id_attribute_names Name(s) of user record attributes used for matching user login id (comma separated list)
     *
     * @return $this
     */
    public function setUserIdAttributeNames($user_id_attribute_names)
    {
        $this->container['user_id_attribute_names'] = $user_id_attribute_names;

        return $this;
    }

    /**
     * Gets user_objectclass
     *
     * @return string
     */
    public function getUserObjectclass()
    {
        return $this->container['user_objectclass'];
    }

    /**
     * Sets user_objectclass
     *
     * @param string $user_objectclass (Optional) Name of user record objectclass used for finding user during login id
     *
     * @return $this
     */
    public function setUserObjectclass($user_objectclass)
    {
        $this->container['user_objectclass'] = $user_objectclass;

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


