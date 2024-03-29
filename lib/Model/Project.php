<?php
/**
 * Project
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
 * Project Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Project';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'uses_git' => 'bool',
        'git_remote_url' => 'string',
        'git_username' => 'string',
        'git_password' => 'string',
        'git_username_user_attribute' => 'string',
        'git_password_user_attribute' => 'string',
        'git_service_name' => 'string',
        'deploy_secret' => 'string',
        'unset_deploy_secret' => 'bool',
        'pull_request_mode' => 'string',
        'validation_required' => 'bool',
        'folders_enabled' => 'bool',
        'allow_warnings' => 'bool',
        'is_example' => 'bool',
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
        'uses_git' => null,
        'git_remote_url' => 'uri',
        'git_username' => null,
        'git_password' => null,
        'git_username_user_attribute' => null,
        'git_password_user_attribute' => null,
        'git_service_name' => null,
        'deploy_secret' => null,
        'unset_deploy_secret' => null,
        'pull_request_mode' => null,
        'validation_required' => null,
        'folders_enabled' => null,
        'allow_warnings' => null,
        'is_example' => null,
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
        'uses_git' => 'uses_git',
        'git_remote_url' => 'git_remote_url',
        'git_username' => 'git_username',
        'git_password' => 'git_password',
        'git_username_user_attribute' => 'git_username_user_attribute',
        'git_password_user_attribute' => 'git_password_user_attribute',
        'git_service_name' => 'git_service_name',
        'deploy_secret' => 'deploy_secret',
        'unset_deploy_secret' => 'unset_deploy_secret',
        'pull_request_mode' => 'pull_request_mode',
        'validation_required' => 'validation_required',
        'folders_enabled' => 'folders_enabled',
        'allow_warnings' => 'allow_warnings',
        'is_example' => 'is_example',
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
        'uses_git' => 'setUsesGit',
        'git_remote_url' => 'setGitRemoteUrl',
        'git_username' => 'setGitUsername',
        'git_password' => 'setGitPassword',
        'git_username_user_attribute' => 'setGitUsernameUserAttribute',
        'git_password_user_attribute' => 'setGitPasswordUserAttribute',
        'git_service_name' => 'setGitServiceName',
        'deploy_secret' => 'setDeploySecret',
        'unset_deploy_secret' => 'setUnsetDeploySecret',
        'pull_request_mode' => 'setPullRequestMode',
        'validation_required' => 'setValidationRequired',
        'folders_enabled' => 'setFoldersEnabled',
        'allow_warnings' => 'setAllowWarnings',
        'is_example' => 'setIsExample',
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
        'uses_git' => 'getUsesGit',
        'git_remote_url' => 'getGitRemoteUrl',
        'git_username' => 'getGitUsername',
        'git_password' => 'getGitPassword',
        'git_username_user_attribute' => 'getGitUsernameUserAttribute',
        'git_password_user_attribute' => 'getGitPasswordUserAttribute',
        'git_service_name' => 'getGitServiceName',
        'deploy_secret' => 'getDeploySecret',
        'unset_deploy_secret' => 'getUnsetDeploySecret',
        'pull_request_mode' => 'getPullRequestMode',
        'validation_required' => 'getValidationRequired',
        'folders_enabled' => 'getFoldersEnabled',
        'allow_warnings' => 'getAllowWarnings',
        'is_example' => 'getIsExample',
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
        $this->container['uses_git'] = isset($data['uses_git']) ? $data['uses_git'] : null;
        $this->container['git_remote_url'] = isset($data['git_remote_url']) ? $data['git_remote_url'] : null;
        $this->container['git_username'] = isset($data['git_username']) ? $data['git_username'] : null;
        $this->container['git_password'] = isset($data['git_password']) ? $data['git_password'] : null;
        $this->container['git_username_user_attribute'] = isset($data['git_username_user_attribute']) ? $data['git_username_user_attribute'] : null;
        $this->container['git_password_user_attribute'] = isset($data['git_password_user_attribute']) ? $data['git_password_user_attribute'] : null;
        $this->container['git_service_name'] = isset($data['git_service_name']) ? $data['git_service_name'] : null;
        $this->container['deploy_secret'] = isset($data['deploy_secret']) ? $data['deploy_secret'] : null;
        $this->container['unset_deploy_secret'] = isset($data['unset_deploy_secret']) ? $data['unset_deploy_secret'] : null;
        $this->container['pull_request_mode'] = isset($data['pull_request_mode']) ? $data['pull_request_mode'] : null;
        $this->container['validation_required'] = isset($data['validation_required']) ? $data['validation_required'] : null;
        $this->container['folders_enabled'] = isset($data['folders_enabled']) ? $data['folders_enabled'] : null;
        $this->container['allow_warnings'] = isset($data['allow_warnings']) ? $data['allow_warnings'] : null;
        $this->container['is_example'] = isset($data['is_example']) ? $data['is_example'] : null;
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
     * @param string $id Project Id
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
     * @param string $name Project display name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uses_git
     *
     * @return bool
     */
    public function getUsesGit()
    {
        return $this->container['uses_git'];
    }

    /**
     * Sets uses_git
     *
     * @param bool $uses_git If true the project is configured with a git repository
     *
     * @return $this
     */
    public function setUsesGit($uses_git)
    {
        $this->container['uses_git'] = $uses_git;

        return $this;
    }

    /**
     * Gets git_remote_url
     *
     * @return string
     */
    public function getGitRemoteUrl()
    {
        return $this->container['git_remote_url'];
    }

    /**
     * Sets git_remote_url
     *
     * @param string $git_remote_url Git remote repository url
     *
     * @return $this
     */
    public function setGitRemoteUrl($git_remote_url)
    {
        $this->container['git_remote_url'] = $git_remote_url;

        return $this;
    }

    /**
     * Gets git_username
     *
     * @return string
     */
    public function getGitUsername()
    {
        return $this->container['git_username'];
    }

    /**
     * Sets git_username
     *
     * @param string $git_username Git username for HTTPS authentication. (For production only, if using user attributes.)
     *
     * @return $this
     */
    public function setGitUsername($git_username)
    {
        $this->container['git_username'] = $git_username;

        return $this;
    }

    /**
     * Gets git_password
     *
     * @return string
     */
    public function getGitPassword()
    {
        return $this->container['git_password'];
    }

    /**
     * Sets git_password
     *
     * @param string $git_password (Write-Only) Git password for HTTPS authentication. (For production only, if using user attributes.)
     *
     * @return $this
     */
    public function setGitPassword($git_password)
    {
        $this->container['git_password'] = $git_password;

        return $this;
    }

    /**
     * Gets git_username_user_attribute
     *
     * @return string
     */
    public function getGitUsernameUserAttribute()
    {
        return $this->container['git_username_user_attribute'];
    }

    /**
     * Sets git_username_user_attribute
     *
     * @param string $git_username_user_attribute User attribute name for username in per-user HTTPS authentication.
     *
     * @return $this
     */
    public function setGitUsernameUserAttribute($git_username_user_attribute)
    {
        $this->container['git_username_user_attribute'] = $git_username_user_attribute;

        return $this;
    }

    /**
     * Gets git_password_user_attribute
     *
     * @return string
     */
    public function getGitPasswordUserAttribute()
    {
        return $this->container['git_password_user_attribute'];
    }

    /**
     * Sets git_password_user_attribute
     *
     * @param string $git_password_user_attribute User attribute name for password in per-user HTTPS authentication.
     *
     * @return $this
     */
    public function setGitPasswordUserAttribute($git_password_user_attribute)
    {
        $this->container['git_password_user_attribute'] = $git_password_user_attribute;

        return $this;
    }

    /**
     * Gets git_service_name
     *
     * @return string
     */
    public function getGitServiceName()
    {
        return $this->container['git_service_name'];
    }

    /**
     * Sets git_service_name
     *
     * @param string $git_service_name Name of the git service provider
     *
     * @return $this
     */
    public function setGitServiceName($git_service_name)
    {
        $this->container['git_service_name'] = $git_service_name;

        return $this;
    }

    /**
     * Gets deploy_secret
     *
     * @return string
     */
    public function getDeploySecret()
    {
        return $this->container['deploy_secret'];
    }

    /**
     * Sets deploy_secret
     *
     * @param string $deploy_secret (Write-Only) Optional secret token with which to authenticate requests to the webhook deploy endpoint. If not set, endpoint is unauthenticated.
     *
     * @return $this
     */
    public function setDeploySecret($deploy_secret)
    {
        $this->container['deploy_secret'] = $deploy_secret;

        return $this;
    }

    /**
     * Gets unset_deploy_secret
     *
     * @return bool
     */
    public function getUnsetDeploySecret()
    {
        return $this->container['unset_deploy_secret'];
    }

    /**
     * Sets unset_deploy_secret
     *
     * @param bool $unset_deploy_secret (Write-Only) When true, unsets the deploy secret to allow unauthenticated access to the webhook deploy endpoint.
     *
     * @return $this
     */
    public function setUnsetDeploySecret($unset_deploy_secret)
    {
        $this->container['unset_deploy_secret'] = $unset_deploy_secret;

        return $this;
    }

    /**
     * Gets pull_request_mode
     *
     * @return string
     */
    public function getPullRequestMode()
    {
        return $this->container['pull_request_mode'];
    }

    /**
     * Sets pull_request_mode
     *
     * @param string $pull_request_mode The git pull request policy for this project. Valid values are: \"off\", \"links\", \"recommended\", \"required\".
     *
     * @return $this
     */
    public function setPullRequestMode($pull_request_mode)
    {
        $this->container['pull_request_mode'] = $pull_request_mode;

        return $this;
    }

    /**
     * Gets validation_required
     *
     * @return bool
     */
    public function getValidationRequired()
    {
        return $this->container['validation_required'];
    }

    /**
     * Sets validation_required
     *
     * @param bool $validation_required Validation policy: If true, the project must pass validation checks before project changes can be committed to the git repository
     *
     * @return $this
     */
    public function setValidationRequired($validation_required)
    {
        $this->container['validation_required'] = $validation_required;

        return $this;
    }

    /**
     * Gets folders_enabled
     *
     * @return bool
     */
    public function getFoldersEnabled()
    {
        return $this->container['folders_enabled'];
    }

    /**
     * Sets folders_enabled
     *
     * @param bool $folders_enabled If true, folders are enabled for this project
     *
     * @return $this
     */
    public function setFoldersEnabled($folders_enabled)
    {
        $this->container['folders_enabled'] = $folders_enabled;

        return $this;
    }

    /**
     * Gets allow_warnings
     *
     * @return bool
     */
    public function getAllowWarnings()
    {
        return $this->container['allow_warnings'];
    }

    /**
     * Sets allow_warnings
     *
     * @param bool $allow_warnings Validation policy: If true, the project can be committed with warnings when `validation_required` is true. (`allow_warnings` does nothing if `validation_required` is false).
     *
     * @return $this
     */
    public function setAllowWarnings($allow_warnings)
    {
        $this->container['allow_warnings'] = $allow_warnings;

        return $this;
    }

    /**
     * Gets is_example
     *
     * @return bool
     */
    public function getIsExample()
    {
        return $this->container['is_example'];
    }

    /**
     * Sets is_example
     *
     * @param bool $is_example If true the project is an example project and cannot be modified
     *
     * @return $this
     */
    public function setIsExample($is_example)
    {
        $this->container['is_example'] = $is_example;

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


