<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avatar_url' => 'string',
        'avatar_url_without_sizing' => 'string',
        'credentials_api3' => '\Funeralzone\LookerClient\Model\CredentialsApi3[]',
        'credentials_email' => '\Funeralzone\LookerClient\Model\CredentialsEmail',
        'credentials_embed' => '\Funeralzone\LookerClient\Model\CredentialsEmbed[]',
        'credentials_google' => '\Funeralzone\LookerClient\Model\CredentialsGoogle',
        'credentials_ldap' => '\Funeralzone\LookerClient\Model\CredentialsLDAP',
        'credentials_looker_openid' => '\Funeralzone\LookerClient\Model\CredentialsLookerOpenid',
        'credentials_oidc' => '\Funeralzone\LookerClient\Model\CredentialsOIDC',
        'credentials_saml' => '\Funeralzone\LookerClient\Model\CredentialsSaml',
        'credentials_totp' => '\Funeralzone\LookerClient\Model\CredentialsTotp',
        'display_name' => 'string',
        'email' => 'string',
        'embed_group_space_id' => 'int',
        'first_name' => 'string',
        'group_ids' => 'int[]',
        'home_space_id' => 'string',
        'home_folder_id' => 'string',
        'id' => 'int',
        'is_disabled' => 'bool',
        'last_name' => 'string',
        'locale' => 'string',
        'looker_versions' => 'string[]',
        'models_dir_validated' => 'bool',
        'personal_space_id' => 'int',
        'personal_folder_id' => 'int',
        'presumed_looker_employee' => 'bool',
        'role_ids' => 'int[]',
        'sessions' => '\Funeralzone\LookerClient\Model\Session[]',
        'ui_state' => 'map[string,string]',
        'verified_looker_employee' => 'bool',
        'roles_externally_managed' => 'bool',
        'url' => 'string',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'avatar_url' => 'uri',
        'avatar_url_without_sizing' => 'uri',
        'credentials_api3' => null,
        'credentials_email' => null,
        'credentials_embed' => null,
        'credentials_google' => null,
        'credentials_ldap' => null,
        'credentials_looker_openid' => null,
        'credentials_oidc' => null,
        'credentials_saml' => null,
        'credentials_totp' => null,
        'display_name' => null,
        'email' => null,
        'embed_group_space_id' => 'int64',
        'first_name' => null,
        'group_ids' => 'int64',
        'home_space_id' => null,
        'home_folder_id' => null,
        'id' => 'int64',
        'is_disabled' => null,
        'last_name' => null,
        'locale' => null,
        'looker_versions' => null,
        'models_dir_validated' => null,
        'personal_space_id' => 'int64',
        'personal_folder_id' => 'int64',
        'presumed_looker_employee' => null,
        'role_ids' => 'int64',
        'sessions' => null,
        'ui_state' => null,
        'verified_looker_employee' => null,
        'roles_externally_managed' => null,
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
        'avatar_url' => 'avatar_url',
        'avatar_url_without_sizing' => 'avatar_url_without_sizing',
        'credentials_api3' => 'credentials_api3',
        'credentials_email' => 'credentials_email',
        'credentials_embed' => 'credentials_embed',
        'credentials_google' => 'credentials_google',
        'credentials_ldap' => 'credentials_ldap',
        'credentials_looker_openid' => 'credentials_looker_openid',
        'credentials_oidc' => 'credentials_oidc',
        'credentials_saml' => 'credentials_saml',
        'credentials_totp' => 'credentials_totp',
        'display_name' => 'display_name',
        'email' => 'email',
        'embed_group_space_id' => 'embed_group_space_id',
        'first_name' => 'first_name',
        'group_ids' => 'group_ids',
        'home_space_id' => 'home_space_id',
        'home_folder_id' => 'home_folder_id',
        'id' => 'id',
        'is_disabled' => 'is_disabled',
        'last_name' => 'last_name',
        'locale' => 'locale',
        'looker_versions' => 'looker_versions',
        'models_dir_validated' => 'models_dir_validated',
        'personal_space_id' => 'personal_space_id',
        'personal_folder_id' => 'personal_folder_id',
        'presumed_looker_employee' => 'presumed_looker_employee',
        'role_ids' => 'role_ids',
        'sessions' => 'sessions',
        'ui_state' => 'ui_state',
        'verified_looker_employee' => 'verified_looker_employee',
        'roles_externally_managed' => 'roles_externally_managed',
        'url' => 'url',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avatar_url' => 'setAvatarUrl',
        'avatar_url_without_sizing' => 'setAvatarUrlWithoutSizing',
        'credentials_api3' => 'setCredentialsApi3',
        'credentials_email' => 'setCredentialsEmail',
        'credentials_embed' => 'setCredentialsEmbed',
        'credentials_google' => 'setCredentialsGoogle',
        'credentials_ldap' => 'setCredentialsLdap',
        'credentials_looker_openid' => 'setCredentialsLookerOpenid',
        'credentials_oidc' => 'setCredentialsOidc',
        'credentials_saml' => 'setCredentialsSaml',
        'credentials_totp' => 'setCredentialsTotp',
        'display_name' => 'setDisplayName',
        'email' => 'setEmail',
        'embed_group_space_id' => 'setEmbedGroupSpaceId',
        'first_name' => 'setFirstName',
        'group_ids' => 'setGroupIds',
        'home_space_id' => 'setHomeSpaceId',
        'home_folder_id' => 'setHomeFolderId',
        'id' => 'setId',
        'is_disabled' => 'setIsDisabled',
        'last_name' => 'setLastName',
        'locale' => 'setLocale',
        'looker_versions' => 'setLookerVersions',
        'models_dir_validated' => 'setModelsDirValidated',
        'personal_space_id' => 'setPersonalSpaceId',
        'personal_folder_id' => 'setPersonalFolderId',
        'presumed_looker_employee' => 'setPresumedLookerEmployee',
        'role_ids' => 'setRoleIds',
        'sessions' => 'setSessions',
        'ui_state' => 'setUiState',
        'verified_looker_employee' => 'setVerifiedLookerEmployee',
        'roles_externally_managed' => 'setRolesExternallyManaged',
        'url' => 'setUrl',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avatar_url' => 'getAvatarUrl',
        'avatar_url_without_sizing' => 'getAvatarUrlWithoutSizing',
        'credentials_api3' => 'getCredentialsApi3',
        'credentials_email' => 'getCredentialsEmail',
        'credentials_embed' => 'getCredentialsEmbed',
        'credentials_google' => 'getCredentialsGoogle',
        'credentials_ldap' => 'getCredentialsLdap',
        'credentials_looker_openid' => 'getCredentialsLookerOpenid',
        'credentials_oidc' => 'getCredentialsOidc',
        'credentials_saml' => 'getCredentialsSaml',
        'credentials_totp' => 'getCredentialsTotp',
        'display_name' => 'getDisplayName',
        'email' => 'getEmail',
        'embed_group_space_id' => 'getEmbedGroupSpaceId',
        'first_name' => 'getFirstName',
        'group_ids' => 'getGroupIds',
        'home_space_id' => 'getHomeSpaceId',
        'home_folder_id' => 'getHomeFolderId',
        'id' => 'getId',
        'is_disabled' => 'getIsDisabled',
        'last_name' => 'getLastName',
        'locale' => 'getLocale',
        'looker_versions' => 'getLookerVersions',
        'models_dir_validated' => 'getModelsDirValidated',
        'personal_space_id' => 'getPersonalSpaceId',
        'personal_folder_id' => 'getPersonalFolderId',
        'presumed_looker_employee' => 'getPresumedLookerEmployee',
        'role_ids' => 'getRoleIds',
        'sessions' => 'getSessions',
        'ui_state' => 'getUiState',
        'verified_looker_employee' => 'getVerifiedLookerEmployee',
        'roles_externally_managed' => 'getRolesExternallyManaged',
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
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['avatar_url_without_sizing'] = isset($data['avatar_url_without_sizing']) ? $data['avatar_url_without_sizing'] : null;
        $this->container['credentials_api3'] = isset($data['credentials_api3']) ? $data['credentials_api3'] : null;
        $this->container['credentials_email'] = isset($data['credentials_email']) ? $data['credentials_email'] : null;
        $this->container['credentials_embed'] = isset($data['credentials_embed']) ? $data['credentials_embed'] : null;
        $this->container['credentials_google'] = isset($data['credentials_google']) ? $data['credentials_google'] : null;
        $this->container['credentials_ldap'] = isset($data['credentials_ldap']) ? $data['credentials_ldap'] : null;
        $this->container['credentials_looker_openid'] = isset($data['credentials_looker_openid']) ? $data['credentials_looker_openid'] : null;
        $this->container['credentials_oidc'] = isset($data['credentials_oidc']) ? $data['credentials_oidc'] : null;
        $this->container['credentials_saml'] = isset($data['credentials_saml']) ? $data['credentials_saml'] : null;
        $this->container['credentials_totp'] = isset($data['credentials_totp']) ? $data['credentials_totp'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['embed_group_space_id'] = isset($data['embed_group_space_id']) ? $data['embed_group_space_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['group_ids'] = isset($data['group_ids']) ? $data['group_ids'] : null;
        $this->container['home_space_id'] = isset($data['home_space_id']) ? $data['home_space_id'] : null;
        $this->container['home_folder_id'] = isset($data['home_folder_id']) ? $data['home_folder_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_disabled'] = isset($data['is_disabled']) ? $data['is_disabled'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['looker_versions'] = isset($data['looker_versions']) ? $data['looker_versions'] : null;
        $this->container['models_dir_validated'] = isset($data['models_dir_validated']) ? $data['models_dir_validated'] : null;
        $this->container['personal_space_id'] = isset($data['personal_space_id']) ? $data['personal_space_id'] : null;
        $this->container['personal_folder_id'] = isset($data['personal_folder_id']) ? $data['personal_folder_id'] : null;
        $this->container['presumed_looker_employee'] = isset($data['presumed_looker_employee']) ? $data['presumed_looker_employee'] : null;
        $this->container['role_ids'] = isset($data['role_ids']) ? $data['role_ids'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
        $this->container['ui_state'] = isset($data['ui_state']) ? $data['ui_state'] : null;
        $this->container['verified_looker_employee'] = isset($data['verified_looker_employee']) ? $data['verified_looker_employee'] : null;
        $this->container['roles_externally_managed'] = isset($data['roles_externally_managed']) ? $data['roles_externally_managed'] : null;
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
     * Gets avatar_url
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string $avatar_url URL for the avatar image (may be generic)
     *
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets avatar_url_without_sizing
     *
     * @return string
     */
    public function getAvatarUrlWithoutSizing()
    {
        return $this->container['avatar_url_without_sizing'];
    }

    /**
     * Sets avatar_url_without_sizing
     *
     * @param string $avatar_url_without_sizing URL for the avatar image (may be generic), does not specify size
     *
     * @return $this
     */
    public function setAvatarUrlWithoutSizing($avatar_url_without_sizing)
    {
        $this->container['avatar_url_without_sizing'] = $avatar_url_without_sizing;

        return $this;
    }

    /**
     * Gets credentials_api3
     *
     * @return \Funeralzone\LookerClient\Model\CredentialsApi3[]
     */
    public function getCredentialsApi3()
    {
        return $this->container['credentials_api3'];
    }

    /**
     * Sets credentials_api3
     *
     * @param \Funeralzone\LookerClient\Model\CredentialsApi3[] $credentials_api3 API 3 credentials
     *
     * @return $this
     */
    public function setCredentialsApi3($credentials_api3)
    {
        $this->container['credentials_api3'] = $credentials_api3;

        return $this;
    }

    /**
     * Gets credentials_email
     *
     * @return \Funeralzone\LookerClient\Model\CredentialsEmail
     */
    public function getCredentialsEmail()
    {
        return $this->container['credentials_email'];
    }

    /**
     * Sets credentials_email
     *
     * @param \Funeralzone\LookerClient\Model\CredentialsEmail $credentials_email Email/Password login credentials
     *
     * @return $this
     */
    public function setCredentialsEmail($credentials_email)
    {
        $this->container['credentials_email'] = $credentials_email;

        return $this;
    }

    /**
     * Gets credentials_embed
     *
     * @return \Funeralzone\LookerClient\Model\CredentialsEmbed[]
     */
    public function getCredentialsEmbed()
    {
        return $this->container['credentials_embed'];
    }

    /**
     * Sets credentials_embed
     *
     * @param \Funeralzone\LookerClient\Model\CredentialsEmbed[] $credentials_embed Embed credentials
     *
     * @return $this
     */
    public function setCredentialsEmbed($credentials_embed)
    {
        $this->container['credentials_embed'] = $credentials_embed;

        return $this;
    }

    /**
     * Gets credentials_google
     *
     * @return \Funeralzone\LookerClient\Model\CredentialsGoogle
     */
    public function getCredentialsGoogle()
    {
        return $this->container['credentials_google'];
    }

    /**
     * Sets credentials_google
     *
     * @param \Funeralzone\LookerClient\Model\CredentialsGoogle $credentials_google Google auth credentials
     *
     * @return $this
     */
    public function setCredentialsGoogle($credentials_google)
    {
        $this->container['credentials_google'] = $credentials_google;

        return $this;
    }

    /**
     * Gets credentials_ldap
     *
     * @return \Funeralzone\LookerClient\Model\CredentialsLDAP
     */
    public function getCredentialsLdap()
    {
        return $this->container['credentials_ldap'];
    }

    /**
     * Sets credentials_ldap
     *
     * @param \Funeralzone\LookerClient\Model\CredentialsLDAP $credentials_ldap LDAP credentials
     *
     * @return $this
     */
    public function setCredentialsLdap($credentials_ldap)
    {
        $this->container['credentials_ldap'] = $credentials_ldap;

        return $this;
    }

    /**
     * Gets credentials_looker_openid
     *
     * @return \Funeralzone\LookerClient\Model\CredentialsLookerOpenid
     */
    public function getCredentialsLookerOpenid()
    {
        return $this->container['credentials_looker_openid'];
    }

    /**
     * Sets credentials_looker_openid
     *
     * @param \Funeralzone\LookerClient\Model\CredentialsLookerOpenid $credentials_looker_openid LookerOpenID credentials. Used for login by Looker Analysts
     *
     * @return $this
     */
    public function setCredentialsLookerOpenid($credentials_looker_openid)
    {
        $this->container['credentials_looker_openid'] = $credentials_looker_openid;

        return $this;
    }

    /**
     * Gets credentials_oidc
     *
     * @return \Funeralzone\LookerClient\Model\CredentialsOIDC
     */
    public function getCredentialsOidc()
    {
        return $this->container['credentials_oidc'];
    }

    /**
     * Sets credentials_oidc
     *
     * @param \Funeralzone\LookerClient\Model\CredentialsOIDC $credentials_oidc OpenID Connect auth credentials
     *
     * @return $this
     */
    public function setCredentialsOidc($credentials_oidc)
    {
        $this->container['credentials_oidc'] = $credentials_oidc;

        return $this;
    }

    /**
     * Gets credentials_saml
     *
     * @return \Funeralzone\LookerClient\Model\CredentialsSaml
     */
    public function getCredentialsSaml()
    {
        return $this->container['credentials_saml'];
    }

    /**
     * Sets credentials_saml
     *
     * @param \Funeralzone\LookerClient\Model\CredentialsSaml $credentials_saml Saml auth credentials
     *
     * @return $this
     */
    public function setCredentialsSaml($credentials_saml)
    {
        $this->container['credentials_saml'] = $credentials_saml;

        return $this;
    }

    /**
     * Gets credentials_totp
     *
     * @return \Funeralzone\LookerClient\Model\CredentialsTotp
     */
    public function getCredentialsTotp()
    {
        return $this->container['credentials_totp'];
    }

    /**
     * Sets credentials_totp
     *
     * @param \Funeralzone\LookerClient\Model\CredentialsTotp $credentials_totp Two-factor credentials
     *
     * @return $this
     */
    public function setCredentialsTotp($credentials_totp)
    {
        $this->container['credentials_totp'] = $credentials_totp;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Full name for display (available only if both first_name and last_name are set)
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email EMail address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets embed_group_space_id
     *
     * @return int
     */
    public function getEmbedGroupSpaceId()
    {
        return $this->container['embed_group_space_id'];
    }

    /**
     * Sets embed_group_space_id
     *
     * @param int $embed_group_space_id (Embed only) ID of user's group space based on the external_group_id optionally specified during embed user login
     *
     * @return $this
     */
    public function setEmbedGroupSpaceId($embed_group_space_id)
    {
        $this->container['embed_group_space_id'] = $embed_group_space_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets group_ids
     *
     * @return int[]
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     *
     * @param int[] $group_ids Array of ids of the groups for this user
     *
     * @return $this
     */
    public function setGroupIds($group_ids)
    {
        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets home_space_id
     *
     * @return string
     */
    public function getHomeSpaceId()
    {
        return $this->container['home_space_id'];
    }

    /**
     * Sets home_space_id
     *
     * @param string $home_space_id ID string for user's home space
     *
     * @return $this
     */
    public function setHomeSpaceId($home_space_id)
    {
        $this->container['home_space_id'] = $home_space_id;

        return $this;
    }

    /**
     * Gets home_folder_id
     *
     * @return string
     */
    public function getHomeFolderId()
    {
        return $this->container['home_folder_id'];
    }

    /**
     * Sets home_folder_id
     *
     * @param string $home_folder_id ID string for user's home folder
     *
     * @return $this
     */
    public function setHomeFolderId($home_folder_id)
    {
        $this->container['home_folder_id'] = $home_folder_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_disabled
     *
     * @return bool
     */
    public function getIsDisabled()
    {
        return $this->container['is_disabled'];
    }

    /**
     * Sets is_disabled
     *
     * @param bool $is_disabled Account has been disabled
     *
     * @return $this
     */
    public function setIsDisabled($is_disabled)
    {
        $this->container['is_disabled'] = $is_disabled;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale User's preferred locale. User locale takes precedence over Looker's system-wide default locale. Locale determines language of display strings and date and numeric formatting in API responses. Locale string must be a 2 letter language code or a combination of language code and region code: 'en' or 'en-US', for example.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets looker_versions
     *
     * @return string[]
     */
    public function getLookerVersions()
    {
        return $this->container['looker_versions'];
    }

    /**
     * Sets looker_versions
     *
     * @param string[] $looker_versions Array of strings representing the Looker versions that this user has used (this only goes back as far as '3.54.0')
     *
     * @return $this
     */
    public function setLookerVersions($looker_versions)
    {
        $this->container['looker_versions'] = $looker_versions;

        return $this;
    }

    /**
     * Gets models_dir_validated
     *
     * @return bool
     */
    public function getModelsDirValidated()
    {
        return $this->container['models_dir_validated'];
    }

    /**
     * Sets models_dir_validated
     *
     * @param bool $models_dir_validated User's dev workspace has been checked for presence of applicable production projects
     *
     * @return $this
     */
    public function setModelsDirValidated($models_dir_validated)
    {
        $this->container['models_dir_validated'] = $models_dir_validated;

        return $this;
    }

    /**
     * Gets personal_space_id
     *
     * @return int
     */
    public function getPersonalSpaceId()
    {
        return $this->container['personal_space_id'];
    }

    /**
     * Sets personal_space_id
     *
     * @param int $personal_space_id ID of user's personal space
     *
     * @return $this
     */
    public function setPersonalSpaceId($personal_space_id)
    {
        $this->container['personal_space_id'] = $personal_space_id;

        return $this;
    }

    /**
     * Gets personal_folder_id
     *
     * @return int
     */
    public function getPersonalFolderId()
    {
        return $this->container['personal_folder_id'];
    }

    /**
     * Sets personal_folder_id
     *
     * @param int $personal_folder_id ID of user's personal folder
     *
     * @return $this
     */
    public function setPersonalFolderId($personal_folder_id)
    {
        $this->container['personal_folder_id'] = $personal_folder_id;

        return $this;
    }

    /**
     * Gets presumed_looker_employee
     *
     * @return bool
     */
    public function getPresumedLookerEmployee()
    {
        return $this->container['presumed_looker_employee'];
    }

    /**
     * Sets presumed_looker_employee
     *
     * @param bool $presumed_looker_employee User is identified as an employee of Looker
     *
     * @return $this
     */
    public function setPresumedLookerEmployee($presumed_looker_employee)
    {
        $this->container['presumed_looker_employee'] = $presumed_looker_employee;

        return $this;
    }

    /**
     * Gets role_ids
     *
     * @return int[]
     */
    public function getRoleIds()
    {
        return $this->container['role_ids'];
    }

    /**
     * Sets role_ids
     *
     * @param int[] $role_ids Array of ids of the roles for this user
     *
     * @return $this
     */
    public function setRoleIds($role_ids)
    {
        $this->container['role_ids'] = $role_ids;

        return $this;
    }

    /**
     * Gets sessions
     *
     * @return \Funeralzone\LookerClient\Model\Session[]
     */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
     * Sets sessions
     *
     * @param \Funeralzone\LookerClient\Model\Session[] $sessions Active sessions
     *
     * @return $this
     */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;

        return $this;
    }

    /**
     * Gets ui_state
     *
     * @return map[string,string]
     */
    public function getUiState()
    {
        return $this->container['ui_state'];
    }

    /**
     * Sets ui_state
     *
     * @param map[string,string] $ui_state Per user dictionary of undocumented state information owned by the Looker UI.
     *
     * @return $this
     */
    public function setUiState($ui_state)
    {
        $this->container['ui_state'] = $ui_state;

        return $this;
    }

    /**
     * Gets verified_looker_employee
     *
     * @return bool
     */
    public function getVerifiedLookerEmployee()
    {
        return $this->container['verified_looker_employee'];
    }

    /**
     * Sets verified_looker_employee
     *
     * @param bool $verified_looker_employee User is identified as an employee of Looker who has been verified via Looker corporate authentication
     *
     * @return $this
     */
    public function setVerifiedLookerEmployee($verified_looker_employee)
    {
        $this->container['verified_looker_employee'] = $verified_looker_employee;

        return $this;
    }

    /**
     * Gets roles_externally_managed
     *
     * @return bool
     */
    public function getRolesExternallyManaged()
    {
        return $this->container['roles_externally_managed'];
    }

    /**
     * Sets roles_externally_managed
     *
     * @param bool $roles_externally_managed User's roles are managed by an external directory like SAML or LDAP and can not be changed directly.
     *
     * @return $this
     */
    public function setRolesExternallyManaged($roles_externally_managed)
    {
        $this->container['roles_externally_managed'] = $roles_externally_managed;

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

