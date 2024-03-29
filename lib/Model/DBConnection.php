<?php
/**
 * DBConnection
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
 * DBConnection Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DBConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DBConnection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'dialect' => '\Funeralzone\LookerClient\Model\Dialect',
        'snippets' => '\Funeralzone\LookerClient\Model\Snippet[]',
        'host' => 'string',
        'port' => 'string',
        'username' => 'string',
        'password' => 'string',
        'uses_oauth' => 'bool',
        'certificate' => 'string',
        'file_type' => 'string',
        'database' => 'string',
        'db_timezone' => 'string',
        'query_timezone' => 'string',
        'schema' => 'string',
        'max_connections' => 'int',
        'max_billing_gigabytes' => 'string',
        'ssl' => 'bool',
        'verify_ssl' => 'bool',
        'tmp_db_name' => 'string',
        'jdbc_additional_params' => 'string',
        'pool_timeout' => 'int',
        'dialect_name' => 'string',
        'created_at' => 'string',
        'user_id' => 'string',
        'example' => 'bool',
        'user_db_credentials' => 'bool',
        'user_attribute_fields' => 'string[]',
        'maintenance_cron' => 'string',
        'last_regen_at' => 'string',
        'last_reap_at' => 'string',
        'sql_runner_precache_tables' => 'bool',
        'after_connect_statements' => 'string',
        'pdt_context_override' => '\Funeralzone\LookerClient\Model\DBConnectionOverride',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'dialect' => null,
        'snippets' => null,
        'host' => null,
        'port' => null,
        'username' => null,
        'password' => null,
        'uses_oauth' => null,
        'certificate' => null,
        'file_type' => null,
        'database' => null,
        'db_timezone' => null,
        'query_timezone' => null,
        'schema' => null,
        'max_connections' => 'int64',
        'max_billing_gigabytes' => null,
        'ssl' => null,
        'verify_ssl' => null,
        'tmp_db_name' => null,
        'jdbc_additional_params' => null,
        'pool_timeout' => 'int64',
        'dialect_name' => null,
        'created_at' => null,
        'user_id' => null,
        'example' => null,
        'user_db_credentials' => null,
        'user_attribute_fields' => null,
        'maintenance_cron' => null,
        'last_regen_at' => null,
        'last_reap_at' => null,
        'sql_runner_precache_tables' => null,
        'after_connect_statements' => null,
        'pdt_context_override' => null,
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
        'dialect' => 'dialect',
        'snippets' => 'snippets',
        'host' => 'host',
        'port' => 'port',
        'username' => 'username',
        'password' => 'password',
        'uses_oauth' => 'uses_oauth',
        'certificate' => 'certificate',
        'file_type' => 'file_type',
        'database' => 'database',
        'db_timezone' => 'db_timezone',
        'query_timezone' => 'query_timezone',
        'schema' => 'schema',
        'max_connections' => 'max_connections',
        'max_billing_gigabytes' => 'max_billing_gigabytes',
        'ssl' => 'ssl',
        'verify_ssl' => 'verify_ssl',
        'tmp_db_name' => 'tmp_db_name',
        'jdbc_additional_params' => 'jdbc_additional_params',
        'pool_timeout' => 'pool_timeout',
        'dialect_name' => 'dialect_name',
        'created_at' => 'created_at',
        'user_id' => 'user_id',
        'example' => 'example',
        'user_db_credentials' => 'user_db_credentials',
        'user_attribute_fields' => 'user_attribute_fields',
        'maintenance_cron' => 'maintenance_cron',
        'last_regen_at' => 'last_regen_at',
        'last_reap_at' => 'last_reap_at',
        'sql_runner_precache_tables' => 'sql_runner_precache_tables',
        'after_connect_statements' => 'after_connect_statements',
        'pdt_context_override' => 'pdt_context_override',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'dialect' => 'setDialect',
        'snippets' => 'setSnippets',
        'host' => 'setHost',
        'port' => 'setPort',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'uses_oauth' => 'setUsesOauth',
        'certificate' => 'setCertificate',
        'file_type' => 'setFileType',
        'database' => 'setDatabase',
        'db_timezone' => 'setDbTimezone',
        'query_timezone' => 'setQueryTimezone',
        'schema' => 'setSchema',
        'max_connections' => 'setMaxConnections',
        'max_billing_gigabytes' => 'setMaxBillingGigabytes',
        'ssl' => 'setSsl',
        'verify_ssl' => 'setVerifySsl',
        'tmp_db_name' => 'setTmpDbName',
        'jdbc_additional_params' => 'setJdbcAdditionalParams',
        'pool_timeout' => 'setPoolTimeout',
        'dialect_name' => 'setDialectName',
        'created_at' => 'setCreatedAt',
        'user_id' => 'setUserId',
        'example' => 'setExample',
        'user_db_credentials' => 'setUserDbCredentials',
        'user_attribute_fields' => 'setUserAttributeFields',
        'maintenance_cron' => 'setMaintenanceCron',
        'last_regen_at' => 'setLastRegenAt',
        'last_reap_at' => 'setLastReapAt',
        'sql_runner_precache_tables' => 'setSqlRunnerPrecacheTables',
        'after_connect_statements' => 'setAfterConnectStatements',
        'pdt_context_override' => 'setPdtContextOverride',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'dialect' => 'getDialect',
        'snippets' => 'getSnippets',
        'host' => 'getHost',
        'port' => 'getPort',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'uses_oauth' => 'getUsesOauth',
        'certificate' => 'getCertificate',
        'file_type' => 'getFileType',
        'database' => 'getDatabase',
        'db_timezone' => 'getDbTimezone',
        'query_timezone' => 'getQueryTimezone',
        'schema' => 'getSchema',
        'max_connections' => 'getMaxConnections',
        'max_billing_gigabytes' => 'getMaxBillingGigabytes',
        'ssl' => 'getSsl',
        'verify_ssl' => 'getVerifySsl',
        'tmp_db_name' => 'getTmpDbName',
        'jdbc_additional_params' => 'getJdbcAdditionalParams',
        'pool_timeout' => 'getPoolTimeout',
        'dialect_name' => 'getDialectName',
        'created_at' => 'getCreatedAt',
        'user_id' => 'getUserId',
        'example' => 'getExample',
        'user_db_credentials' => 'getUserDbCredentials',
        'user_attribute_fields' => 'getUserAttributeFields',
        'maintenance_cron' => 'getMaintenanceCron',
        'last_regen_at' => 'getLastRegenAt',
        'last_reap_at' => 'getLastReapAt',
        'sql_runner_precache_tables' => 'getSqlRunnerPrecacheTables',
        'after_connect_statements' => 'getAfterConnectStatements',
        'pdt_context_override' => 'getPdtContextOverride',
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
        $this->container['dialect'] = isset($data['dialect']) ? $data['dialect'] : null;
        $this->container['snippets'] = isset($data['snippets']) ? $data['snippets'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['uses_oauth'] = isset($data['uses_oauth']) ? $data['uses_oauth'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['file_type'] = isset($data['file_type']) ? $data['file_type'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['db_timezone'] = isset($data['db_timezone']) ? $data['db_timezone'] : null;
        $this->container['query_timezone'] = isset($data['query_timezone']) ? $data['query_timezone'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['max_connections'] = isset($data['max_connections']) ? $data['max_connections'] : null;
        $this->container['max_billing_gigabytes'] = isset($data['max_billing_gigabytes']) ? $data['max_billing_gigabytes'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['verify_ssl'] = isset($data['verify_ssl']) ? $data['verify_ssl'] : null;
        $this->container['tmp_db_name'] = isset($data['tmp_db_name']) ? $data['tmp_db_name'] : null;
        $this->container['jdbc_additional_params'] = isset($data['jdbc_additional_params']) ? $data['jdbc_additional_params'] : null;
        $this->container['pool_timeout'] = isset($data['pool_timeout']) ? $data['pool_timeout'] : null;
        $this->container['dialect_name'] = isset($data['dialect_name']) ? $data['dialect_name'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['example'] = isset($data['example']) ? $data['example'] : null;
        $this->container['user_db_credentials'] = isset($data['user_db_credentials']) ? $data['user_db_credentials'] : null;
        $this->container['user_attribute_fields'] = isset($data['user_attribute_fields']) ? $data['user_attribute_fields'] : null;
        $this->container['maintenance_cron'] = isset($data['maintenance_cron']) ? $data['maintenance_cron'] : null;
        $this->container['last_regen_at'] = isset($data['last_regen_at']) ? $data['last_regen_at'] : null;
        $this->container['last_reap_at'] = isset($data['last_reap_at']) ? $data['last_reap_at'] : null;
        $this->container['sql_runner_precache_tables'] = isset($data['sql_runner_precache_tables']) ? $data['sql_runner_precache_tables'] : null;
        $this->container['after_connect_statements'] = isset($data['after_connect_statements']) ? $data['after_connect_statements'] : null;
        $this->container['pdt_context_override'] = isset($data['pdt_context_override']) ? $data['pdt_context_override'] : null;
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
     * @param string $name Name of the connection. Also used as the unique identifier
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dialect
     *
     * @return \Funeralzone\LookerClient\Model\Dialect
     */
    public function getDialect()
    {
        return $this->container['dialect'];
    }

    /**
     * Sets dialect
     *
     * @param \Funeralzone\LookerClient\Model\Dialect $dialect (Read-only) SQL Dialect details
     *
     * @return $this
     */
    public function setDialect($dialect)
    {
        $this->container['dialect'] = $dialect;

        return $this;
    }

    /**
     * Gets snippets
     *
     * @return \Funeralzone\LookerClient\Model\Snippet[]
     */
    public function getSnippets()
    {
        return $this->container['snippets'];
    }

    /**
     * Sets snippets
     *
     * @param \Funeralzone\LookerClient\Model\Snippet[] $snippets SQL Runner snippets for this connection
     *
     * @return $this
     */
    public function setSnippets($snippets)
    {
        $this->container['snippets'] = $snippets;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host Host name/address of server
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets port
     *
     * @return string
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param string $port Port number on server
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username Username for server authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password (Write-Only) Password for server authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

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
     * @param bool $uses_oauth Whether the connection uses OAuth for authentication.
     *
     * @return $this
     */
    public function setUsesOauth($uses_oauth)
    {
        $this->container['uses_oauth'] = $uses_oauth;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return string
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param string $certificate (Write-Only) Base64 encoded Certificate body for server authentication (when appropriate for dialect).
     *
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets file_type
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     *
     * @param string $file_type (Write-Only) Certificate keyfile type - .json or .p12
     *
     * @return $this
     */
    public function setFileType($file_type)
    {
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets database
     *
     * @return string
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param string $database Database name
     *
     * @return $this
     */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets db_timezone
     *
     * @return string
     */
    public function getDbTimezone()
    {
        return $this->container['db_timezone'];
    }

    /**
     * Sets db_timezone
     *
     * @param string $db_timezone Time zone of database
     *
     * @return $this
     */
    public function setDbTimezone($db_timezone)
    {
        $this->container['db_timezone'] = $db_timezone;

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
     * @param string $query_timezone Timezone to use in queries
     *
     * @return $this
     */
    public function setQueryTimezone($query_timezone)
    {
        $this->container['query_timezone'] = $query_timezone;

        return $this;
    }

    /**
     * Gets schema
     *
     * @return string
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param string $schema Scheme name
     *
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets max_connections
     *
     * @return int
     */
    public function getMaxConnections()
    {
        return $this->container['max_connections'];
    }

    /**
     * Sets max_connections
     *
     * @param int $max_connections Maximum number of concurrent connection to use
     *
     * @return $this
     */
    public function setMaxConnections($max_connections)
    {
        $this->container['max_connections'] = $max_connections;

        return $this;
    }

    /**
     * Gets max_billing_gigabytes
     *
     * @return string
     */
    public function getMaxBillingGigabytes()
    {
        return $this->container['max_billing_gigabytes'];
    }

    /**
     * Sets max_billing_gigabytes
     *
     * @param string $max_billing_gigabytes Maximum size of query in GBs (BigQuery only, can be a user_attribute name)
     *
     * @return $this
     */
    public function setMaxBillingGigabytes($max_billing_gigabytes)
    {
        $this->container['max_billing_gigabytes'] = $max_billing_gigabytes;

        return $this;
    }

    /**
     * Gets ssl
     *
     * @return bool
     */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
     * Sets ssl
     *
     * @param bool $ssl Use SSL/TLS when connecting to server
     *
     * @return $this
     */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;

        return $this;
    }

    /**
     * Gets verify_ssl
     *
     * @return bool
     */
    public function getVerifySsl()
    {
        return $this->container['verify_ssl'];
    }

    /**
     * Sets verify_ssl
     *
     * @param bool $verify_ssl Verify the SSL
     *
     * @return $this
     */
    public function setVerifySsl($verify_ssl)
    {
        $this->container['verify_ssl'] = $verify_ssl;

        return $this;
    }

    /**
     * Gets tmp_db_name
     *
     * @return string
     */
    public function getTmpDbName()
    {
        return $this->container['tmp_db_name'];
    }

    /**
     * Sets tmp_db_name
     *
     * @param string $tmp_db_name Name of temporary database (if used)
     *
     * @return $this
     */
    public function setTmpDbName($tmp_db_name)
    {
        $this->container['tmp_db_name'] = $tmp_db_name;

        return $this;
    }

    /**
     * Gets jdbc_additional_params
     *
     * @return string
     */
    public function getJdbcAdditionalParams()
    {
        return $this->container['jdbc_additional_params'];
    }

    /**
     * Sets jdbc_additional_params
     *
     * @param string $jdbc_additional_params Additional params to add to JDBC connection string
     *
     * @return $this
     */
    public function setJdbcAdditionalParams($jdbc_additional_params)
    {
        $this->container['jdbc_additional_params'] = $jdbc_additional_params;

        return $this;
    }

    /**
     * Gets pool_timeout
     *
     * @return int
     */
    public function getPoolTimeout()
    {
        return $this->container['pool_timeout'];
    }

    /**
     * Sets pool_timeout
     *
     * @param int $pool_timeout Pool Timeout
     *
     * @return $this
     */
    public function setPoolTimeout($pool_timeout)
    {
        $this->container['pool_timeout'] = $pool_timeout;

        return $this;
    }

    /**
     * Gets dialect_name
     *
     * @return string
     */
    public function getDialectName()
    {
        return $this->container['dialect_name'];
    }

    /**
     * Sets dialect_name
     *
     * @param string $dialect_name (Read/Write) SQL Dialect name
     *
     * @return $this
     */
    public function setDialectName($dialect_name)
    {
        $this->container['dialect_name'] = $dialect_name;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at Creation date for this connection
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id Id of user who last modified this connection configuration
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets example
     *
     * @return bool
     */
    public function getExample()
    {
        return $this->container['example'];
    }

    /**
     * Sets example
     *
     * @param bool $example Is this an example connection
     *
     * @return $this
     */
    public function setExample($example)
    {
        $this->container['example'] = $example;

        return $this;
    }

    /**
     * Gets user_db_credentials
     *
     * @return bool
     */
    public function getUserDbCredentials()
    {
        return $this->container['user_db_credentials'];
    }

    /**
     * Sets user_db_credentials
     *
     * @param bool $user_db_credentials (Limited access feature) Are per user db credentials enabled. Enabling will remove previously set username and password
     *
     * @return $this
     */
    public function setUserDbCredentials($user_db_credentials)
    {
        $this->container['user_db_credentials'] = $user_db_credentials;

        return $this;
    }

    /**
     * Gets user_attribute_fields
     *
     * @return string[]
     */
    public function getUserAttributeFields()
    {
        return $this->container['user_attribute_fields'];
    }

    /**
     * Sets user_attribute_fields
     *
     * @param string[] $user_attribute_fields Fields whose values map to user attribute names
     *
     * @return $this
     */
    public function setUserAttributeFields($user_attribute_fields)
    {
        $this->container['user_attribute_fields'] = $user_attribute_fields;

        return $this;
    }

    /**
     * Gets maintenance_cron
     *
     * @return string
     */
    public function getMaintenanceCron()
    {
        return $this->container['maintenance_cron'];
    }

    /**
     * Sets maintenance_cron
     *
     * @param string $maintenance_cron Cron string specifying when maintenance such as PDT trigger checks and drops should be performed
     *
     * @return $this
     */
    public function setMaintenanceCron($maintenance_cron)
    {
        $this->container['maintenance_cron'] = $maintenance_cron;

        return $this;
    }

    /**
     * Gets last_regen_at
     *
     * @return string
     */
    public function getLastRegenAt()
    {
        return $this->container['last_regen_at'];
    }

    /**
     * Sets last_regen_at
     *
     * @param string $last_regen_at Unix timestamp at start of last completed PDT trigger check process
     *
     * @return $this
     */
    public function setLastRegenAt($last_regen_at)
    {
        $this->container['last_regen_at'] = $last_regen_at;

        return $this;
    }

    /**
     * Gets last_reap_at
     *
     * @return string
     */
    public function getLastReapAt()
    {
        return $this->container['last_reap_at'];
    }

    /**
     * Sets last_reap_at
     *
     * @param string $last_reap_at Unix timestamp at start of last completed PDT reap process
     *
     * @return $this
     */
    public function setLastReapAt($last_reap_at)
    {
        $this->container['last_reap_at'] = $last_reap_at;

        return $this;
    }

    /**
     * Gets sql_runner_precache_tables
     *
     * @return bool
     */
    public function getSqlRunnerPrecacheTables()
    {
        return $this->container['sql_runner_precache_tables'];
    }

    /**
     * Sets sql_runner_precache_tables
     *
     * @param bool $sql_runner_precache_tables Precache tables in the SQL Runner
     *
     * @return $this
     */
    public function setSqlRunnerPrecacheTables($sql_runner_precache_tables)
    {
        $this->container['sql_runner_precache_tables'] = $sql_runner_precache_tables;

        return $this;
    }

    /**
     * Gets after_connect_statements
     *
     * @return string
     */
    public function getAfterConnectStatements()
    {
        return $this->container['after_connect_statements'];
    }

    /**
     * Sets after_connect_statements
     *
     * @param string $after_connect_statements SQL statements (semicolon separated) to issue after connecting to the database. Requires `custom_after_connect_statements` license feature
     *
     * @return $this
     */
    public function setAfterConnectStatements($after_connect_statements)
    {
        $this->container['after_connect_statements'] = $after_connect_statements;

        return $this;
    }

    /**
     * Gets pdt_context_override
     *
     * @return \Funeralzone\LookerClient\Model\DBConnectionOverride
     */
    public function getPdtContextOverride()
    {
        return $this->container['pdt_context_override'];
    }

    /**
     * Sets pdt_context_override
     *
     * @param \Funeralzone\LookerClient\Model\DBConnectionOverride $pdt_context_override db_connection_override for this connection in the `pdt` maintenance context
     *
     * @return $this
     */
    public function setPdtContextOverride($pdt_context_override)
    {
        $this->container['pdt_context_override'] = $pdt_context_override;

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


