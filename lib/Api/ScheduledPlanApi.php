<?php
/**
 * ScheduledPlanApi
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

namespace Funeralzone\LookerClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Funeralzone\LookerClient\ApiException;
use Funeralzone\LookerClient\Configuration;
use Funeralzone\LookerClient\HeaderSelector;
use Funeralzone\LookerClient\ObjectSerializer;

/**
 * ScheduledPlanApi Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduledPlanApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation allScheduledPlans
     *
     * Get All Scheduled Plans
     *
     * @param  int $user_id Return scheduled plans belonging to this user_id. If not provided, returns scheduled plans owned by the caller. (optional)
     * @param  string $fields Comma delimited list of field names. If provided, only the fields specified will be included in the response (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users (caller needs see_schedules permission) (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan[]
     */
    public function allScheduledPlans($user_id = null, $fields = null, $all_users = null)
    {
        list($response) = $this->allScheduledPlansWithHttpInfo($user_id, $fields, $all_users);
        return $response;
    }

    /**
     * Operation allScheduledPlansWithHttpInfo
     *
     * Get All Scheduled Plans
     *
     * @param  int $user_id Return scheduled plans belonging to this user_id. If not provided, returns scheduled plans owned by the caller. (optional)
     * @param  string $fields Comma delimited list of field names. If provided, only the fields specified will be included in the response (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users (caller needs see_schedules permission) (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan[], HTTP status code, HTTP response headers (array of strings)
     */
    public function allScheduledPlansWithHttpInfo($user_id = null, $fields = null, $all_users = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->allScheduledPlansRequest($user_id, $fields, $all_users);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation allScheduledPlansAsync
     *
     * Get All Scheduled Plans
     *
     * @param  int $user_id Return scheduled plans belonging to this user_id. If not provided, returns scheduled plans owned by the caller. (optional)
     * @param  string $fields Comma delimited list of field names. If provided, only the fields specified will be included in the response (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users (caller needs see_schedules permission) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allScheduledPlansAsync($user_id = null, $fields = null, $all_users = null)
    {
        return $this->allScheduledPlansAsyncWithHttpInfo($user_id, $fields, $all_users)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation allScheduledPlansAsyncWithHttpInfo
     *
     * Get All Scheduled Plans
     *
     * @param  int $user_id Return scheduled plans belonging to this user_id. If not provided, returns scheduled plans owned by the caller. (optional)
     * @param  string $fields Comma delimited list of field names. If provided, only the fields specified will be included in the response (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users (caller needs see_schedules permission) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allScheduledPlansAsyncWithHttpInfo($user_id = null, $fields = null, $all_users = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->allScheduledPlansRequest($user_id, $fields, $all_users);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'allScheduledPlans'
     *
     * @param  int $user_id Return scheduled plans belonging to this user_id. If not provided, returns scheduled plans owned by the caller. (optional)
     * @param  string $fields Comma delimited list of field names. If provided, only the fields specified will be included in the response (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users (caller needs see_schedules permission) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function allScheduledPlansRequest($user_id = null, $fields = null, $all_users = null)
    {

        $resourcePath = '/scheduled_plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($all_users !== null) {
            $queryParams['all_users'] = ObjectSerializer::toQueryValue($all_users);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createScheduledPlan
     *
     * Create Scheduled Plan
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan
     */
    public function createScheduledPlan($body = null)
    {
        list($response) = $this->createScheduledPlanWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createScheduledPlanWithHttpInfo
     *
     * Create Scheduled Plan
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan, HTTP status code, HTTP response headers (array of strings)
     */
    public function createScheduledPlanWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->createScheduledPlanRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createScheduledPlanAsync
     *
     * Create Scheduled Plan
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createScheduledPlanAsync($body = null)
    {
        return $this->createScheduledPlanAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createScheduledPlanAsyncWithHttpInfo
     *
     * Create Scheduled Plan
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createScheduledPlanAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->createScheduledPlanRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createScheduledPlan'
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createScheduledPlanRequest($body = null)
    {

        $resourcePath = '/scheduled_plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteScheduledPlan
     *
     * Delete Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function deleteScheduledPlan($scheduled_plan_id)
    {
        list($response) = $this->deleteScheduledPlanWithHttpInfo($scheduled_plan_id);
        return $response;
    }

    /**
     * Operation deleteScheduledPlanWithHttpInfo
     *
     * Delete Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteScheduledPlanWithHttpInfo($scheduled_plan_id)
    {
        $returnType = 'string';
        $request = $this->deleteScheduledPlanRequest($scheduled_plan_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteScheduledPlanAsync
     *
     * Delete Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteScheduledPlanAsync($scheduled_plan_id)
    {
        return $this->deleteScheduledPlanAsyncWithHttpInfo($scheduled_plan_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteScheduledPlanAsyncWithHttpInfo
     *
     * Delete Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteScheduledPlanAsyncWithHttpInfo($scheduled_plan_id)
    {
        $returnType = 'string';
        $request = $this->deleteScheduledPlanRequest($scheduled_plan_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteScheduledPlan'
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteScheduledPlanRequest($scheduled_plan_id)
    {
        // verify the required parameter 'scheduled_plan_id' is set
        if ($scheduled_plan_id === null || (is_array($scheduled_plan_id) && count($scheduled_plan_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scheduled_plan_id when calling deleteScheduledPlan'
            );
        }

        $resourcePath = '/scheduled_plans/{scheduled_plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($scheduled_plan_id !== null) {
            $resourcePath = str_replace(
                '{' . 'scheduled_plan_id' . '}',
                ObjectSerializer::toPathValue($scheduled_plan_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation scheduledPlan
     *
     * Get Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan
     */
    public function scheduledPlan($scheduled_plan_id, $fields = null)
    {
        list($response) = $this->scheduledPlanWithHttpInfo($scheduled_plan_id, $fields);
        return $response;
    }

    /**
     * Operation scheduledPlanWithHttpInfo
     *
     * Get Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduledPlanWithHttpInfo($scheduled_plan_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->scheduledPlanRequest($scheduled_plan_id, $fields);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation scheduledPlanAsync
     *
     * Get Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlanAsync($scheduled_plan_id, $fields = null)
    {
        return $this->scheduledPlanAsyncWithHttpInfo($scheduled_plan_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scheduledPlanAsyncWithHttpInfo
     *
     * Get Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlanAsyncWithHttpInfo($scheduled_plan_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->scheduledPlanRequest($scheduled_plan_id, $fields);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scheduledPlan'
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function scheduledPlanRequest($scheduled_plan_id, $fields = null)
    {
        // verify the required parameter 'scheduled_plan_id' is set
        if ($scheduled_plan_id === null || (is_array($scheduled_plan_id) && count($scheduled_plan_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scheduled_plan_id when calling scheduledPlan'
            );
        }

        $resourcePath = '/scheduled_plans/{scheduled_plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }

        // path params
        if ($scheduled_plan_id !== null) {
            $resourcePath = str_replace(
                '{' . 'scheduled_plan_id' . '}',
                ObjectSerializer::toPathValue($scheduled_plan_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation scheduledPlanRunOnce
     *
     * Run Scheduled Plan Once
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan
     */
    public function scheduledPlanRunOnce($body = null)
    {
        list($response) = $this->scheduledPlanRunOnceWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation scheduledPlanRunOnceWithHttpInfo
     *
     * Run Scheduled Plan Once
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduledPlanRunOnceWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->scheduledPlanRunOnceRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation scheduledPlanRunOnceAsync
     *
     * Run Scheduled Plan Once
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlanRunOnceAsync($body = null)
    {
        return $this->scheduledPlanRunOnceAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scheduledPlanRunOnceAsyncWithHttpInfo
     *
     * Run Scheduled Plan Once
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlanRunOnceAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->scheduledPlanRunOnceRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scheduledPlanRunOnce'
     *
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function scheduledPlanRunOnceRequest($body = null)
    {

        $resourcePath = '/scheduled_plans/run_once';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation scheduledPlanRunOnceById
     *
     * Run Scheduled Plan Once by Id
     *
     * @param  int $scheduled_plan_id Id of schedule plan to copy and run (required)
     * @param  \Funeralzone\LookerClient\Model\WriteScheduledPlan $body Property values to apply to the newly copied scheduled plan before running it (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan
     */
    public function scheduledPlanRunOnceById($scheduled_plan_id, $body = null)
    {
        list($response) = $this->scheduledPlanRunOnceByIdWithHttpInfo($scheduled_plan_id, $body);
        return $response;
    }

    /**
     * Operation scheduledPlanRunOnceByIdWithHttpInfo
     *
     * Run Scheduled Plan Once by Id
     *
     * @param  int $scheduled_plan_id Id of schedule plan to copy and run (required)
     * @param  \Funeralzone\LookerClient\Model\WriteScheduledPlan $body Property values to apply to the newly copied scheduled plan before running it (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduledPlanRunOnceByIdWithHttpInfo($scheduled_plan_id, $body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->scheduledPlanRunOnceByIdRequest($scheduled_plan_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation scheduledPlanRunOnceByIdAsync
     *
     * Run Scheduled Plan Once by Id
     *
     * @param  int $scheduled_plan_id Id of schedule plan to copy and run (required)
     * @param  \Funeralzone\LookerClient\Model\WriteScheduledPlan $body Property values to apply to the newly copied scheduled plan before running it (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlanRunOnceByIdAsync($scheduled_plan_id, $body = null)
    {
        return $this->scheduledPlanRunOnceByIdAsyncWithHttpInfo($scheduled_plan_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scheduledPlanRunOnceByIdAsyncWithHttpInfo
     *
     * Run Scheduled Plan Once by Id
     *
     * @param  int $scheduled_plan_id Id of schedule plan to copy and run (required)
     * @param  \Funeralzone\LookerClient\Model\WriteScheduledPlan $body Property values to apply to the newly copied scheduled plan before running it (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlanRunOnceByIdAsyncWithHttpInfo($scheduled_plan_id, $body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->scheduledPlanRunOnceByIdRequest($scheduled_plan_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scheduledPlanRunOnceById'
     *
     * @param  int $scheduled_plan_id Id of schedule plan to copy and run (required)
     * @param  \Funeralzone\LookerClient\Model\WriteScheduledPlan $body Property values to apply to the newly copied scheduled plan before running it (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function scheduledPlanRunOnceByIdRequest($scheduled_plan_id, $body = null)
    {
        // verify the required parameter 'scheduled_plan_id' is set
        if ($scheduled_plan_id === null || (is_array($scheduled_plan_id) && count($scheduled_plan_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scheduled_plan_id when calling scheduledPlanRunOnceById'
            );
        }

        $resourcePath = '/scheduled_plans/{scheduled_plan_id}/run_once';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($scheduled_plan_id !== null) {
            $resourcePath = str_replace(
                '{' . 'scheduled_plan_id' . '}',
                ObjectSerializer::toPathValue($scheduled_plan_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation scheduledPlansForDashboard
     *
     * Scheduled Plans for Dashboard
     *
     * @param  int $dashboard_id Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan[]
     */
    public function scheduledPlansForDashboard($dashboard_id, $user_id = null, $all_users = null, $fields = null)
    {
        list($response) = $this->scheduledPlansForDashboardWithHttpInfo($dashboard_id, $user_id, $all_users, $fields);
        return $response;
    }

    /**
     * Operation scheduledPlansForDashboardWithHttpInfo
     *
     * Scheduled Plans for Dashboard
     *
     * @param  int $dashboard_id Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan[], HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduledPlansForDashboardWithHttpInfo($dashboard_id, $user_id = null, $all_users = null, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->scheduledPlansForDashboardRequest($dashboard_id, $user_id, $all_users, $fields);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation scheduledPlansForDashboardAsync
     *
     * Scheduled Plans for Dashboard
     *
     * @param  int $dashboard_id Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlansForDashboardAsync($dashboard_id, $user_id = null, $all_users = null, $fields = null)
    {
        return $this->scheduledPlansForDashboardAsyncWithHttpInfo($dashboard_id, $user_id, $all_users, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scheduledPlansForDashboardAsyncWithHttpInfo
     *
     * Scheduled Plans for Dashboard
     *
     * @param  int $dashboard_id Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlansForDashboardAsyncWithHttpInfo($dashboard_id, $user_id = null, $all_users = null, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->scheduledPlansForDashboardRequest($dashboard_id, $user_id, $all_users, $fields);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scheduledPlansForDashboard'
     *
     * @param  int $dashboard_id Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function scheduledPlansForDashboardRequest($dashboard_id, $user_id = null, $all_users = null, $fields = null)
    {
        // verify the required parameter 'dashboard_id' is set
        if ($dashboard_id === null || (is_array($dashboard_id) && count($dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_id when calling scheduledPlansForDashboard'
            );
        }

        $resourcePath = '/scheduled_plans/dashboard/{dashboard_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($all_users !== null) {
            $queryParams['all_users'] = ObjectSerializer::toQueryValue($all_users);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }

        // path params
        if ($dashboard_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_id' . '}',
                ObjectSerializer::toPathValue($dashboard_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation scheduledPlansForLook
     *
     * Scheduled Plans for Look
     *
     * @param  int $look_id Look Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the look (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan[]
     */
    public function scheduledPlansForLook($look_id, $user_id = null, $fields = null, $all_users = null)
    {
        list($response) = $this->scheduledPlansForLookWithHttpInfo($look_id, $user_id, $fields, $all_users);
        return $response;
    }

    /**
     * Operation scheduledPlansForLookWithHttpInfo
     *
     * Scheduled Plans for Look
     *
     * @param  int $look_id Look Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the look (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan[], HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduledPlansForLookWithHttpInfo($look_id, $user_id = null, $fields = null, $all_users = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->scheduledPlansForLookRequest($look_id, $user_id, $fields, $all_users);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation scheduledPlansForLookAsync
     *
     * Scheduled Plans for Look
     *
     * @param  int $look_id Look Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the look (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlansForLookAsync($look_id, $user_id = null, $fields = null, $all_users = null)
    {
        return $this->scheduledPlansForLookAsyncWithHttpInfo($look_id, $user_id, $fields, $all_users)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scheduledPlansForLookAsyncWithHttpInfo
     *
     * Scheduled Plans for Look
     *
     * @param  int $look_id Look Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the look (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlansForLookAsyncWithHttpInfo($look_id, $user_id = null, $fields = null, $all_users = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->scheduledPlansForLookRequest($look_id, $user_id, $fields, $all_users);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scheduledPlansForLook'
     *
     * @param  int $look_id Look Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the look (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function scheduledPlansForLookRequest($look_id, $user_id = null, $fields = null, $all_users = null)
    {
        // verify the required parameter 'look_id' is set
        if ($look_id === null || (is_array($look_id) && count($look_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $look_id when calling scheduledPlansForLook'
            );
        }

        $resourcePath = '/scheduled_plans/look/{look_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($all_users !== null) {
            $queryParams['all_users'] = ObjectSerializer::toQueryValue($all_users);
        }

        // path params
        if ($look_id !== null) {
            $resourcePath = str_replace(
                '{' . 'look_id' . '}',
                ObjectSerializer::toPathValue($look_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation scheduledPlansForLookmlDashboard
     *
     * Scheduled Plans for LookML Dashboard
     *
     * @param  int $lookml_dashboard_id LookML Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan[]
     */
    public function scheduledPlansForLookmlDashboard($lookml_dashboard_id, $user_id = null, $fields = null, $all_users = null)
    {
        list($response) = $this->scheduledPlansForLookmlDashboardWithHttpInfo($lookml_dashboard_id, $user_id, $fields, $all_users);
        return $response;
    }

    /**
     * Operation scheduledPlansForLookmlDashboardWithHttpInfo
     *
     * Scheduled Plans for LookML Dashboard
     *
     * @param  int $lookml_dashboard_id LookML Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan[], HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduledPlansForLookmlDashboardWithHttpInfo($lookml_dashboard_id, $user_id = null, $fields = null, $all_users = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->scheduledPlansForLookmlDashboardRequest($lookml_dashboard_id, $user_id, $fields, $all_users);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation scheduledPlansForLookmlDashboardAsync
     *
     * Scheduled Plans for LookML Dashboard
     *
     * @param  int $lookml_dashboard_id LookML Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlansForLookmlDashboardAsync($lookml_dashboard_id, $user_id = null, $fields = null, $all_users = null)
    {
        return $this->scheduledPlansForLookmlDashboardAsyncWithHttpInfo($lookml_dashboard_id, $user_id, $fields, $all_users)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scheduledPlansForLookmlDashboardAsyncWithHttpInfo
     *
     * Scheduled Plans for LookML Dashboard
     *
     * @param  int $lookml_dashboard_id LookML Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlansForLookmlDashboardAsyncWithHttpInfo($lookml_dashboard_id, $user_id = null, $fields = null, $all_users = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->scheduledPlansForLookmlDashboardRequest($lookml_dashboard_id, $user_id, $fields, $all_users);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scheduledPlansForLookmlDashboard'
     *
     * @param  int $lookml_dashboard_id LookML Dashboard Id (required)
     * @param  int $user_id User Id (default is requesting user if not specified) (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $all_users Return scheduled plans belonging to all users for the dashboard (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function scheduledPlansForLookmlDashboardRequest($lookml_dashboard_id, $user_id = null, $fields = null, $all_users = null)
    {
        // verify the required parameter 'lookml_dashboard_id' is set
        if ($lookml_dashboard_id === null || (is_array($lookml_dashboard_id) && count($lookml_dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lookml_dashboard_id when calling scheduledPlansForLookmlDashboard'
            );
        }

        $resourcePath = '/scheduled_plans/lookml_dashboard/{lookml_dashboard_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($all_users !== null) {
            $queryParams['all_users'] = ObjectSerializer::toQueryValue($all_users);
        }

        // path params
        if ($lookml_dashboard_id !== null) {
            $resourcePath = str_replace(
                '{' . 'lookml_dashboard_id' . '}',
                ObjectSerializer::toPathValue($lookml_dashboard_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation scheduledPlansForSpace
     *
     * Scheduled Plans for Space
     *
     * @param  int $space_id Space Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan[]
     */
    public function scheduledPlansForSpace($space_id, $fields = null)
    {
        list($response) = $this->scheduledPlansForSpaceWithHttpInfo($space_id, $fields);
        return $response;
    }

    /**
     * Operation scheduledPlansForSpaceWithHttpInfo
     *
     * Scheduled Plans for Space
     *
     * @param  int $space_id Space Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan[], HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduledPlansForSpaceWithHttpInfo($space_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->scheduledPlansForSpaceRequest($space_id, $fields);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation scheduledPlansForSpaceAsync
     *
     * Scheduled Plans for Space
     *
     * @param  int $space_id Space Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlansForSpaceAsync($space_id, $fields = null)
    {
        return $this->scheduledPlansForSpaceAsyncWithHttpInfo($space_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scheduledPlansForSpaceAsyncWithHttpInfo
     *
     * Scheduled Plans for Space
     *
     * @param  int $space_id Space Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduledPlansForSpaceAsyncWithHttpInfo($space_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan[]';
        $request = $this->scheduledPlansForSpaceRequest($space_id, $fields);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scheduledPlansForSpace'
     *
     * @param  int $space_id Space Id (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function scheduledPlansForSpaceRequest($space_id, $fields = null)
    {
        // verify the required parameter 'space_id' is set
        if ($space_id === null || (is_array($space_id) && count($space_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space_id when calling scheduledPlansForSpace'
            );
        }

        $resourcePath = '/scheduled_plans/space/{space_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }

        // path params
        if ($space_id !== null) {
            $resourcePath = str_replace(
                '{' . 'space_id' . '}',
                ObjectSerializer::toPathValue($space_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateScheduledPlan
     *
     * Update Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ScheduledPlan
     */
    public function updateScheduledPlan($scheduled_plan_id, $body)
    {
        list($response) = $this->updateScheduledPlanWithHttpInfo($scheduled_plan_id, $body);
        return $response;
    }

    /**
     * Operation updateScheduledPlanWithHttpInfo
     *
     * Update Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ScheduledPlan, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateScheduledPlanWithHttpInfo($scheduled_plan_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->updateScheduledPlanRequest($scheduled_plan_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ScheduledPlan',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateScheduledPlanAsync
     *
     * Update Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateScheduledPlanAsync($scheduled_plan_id, $body)
    {
        return $this->updateScheduledPlanAsyncWithHttpInfo($scheduled_plan_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateScheduledPlanAsyncWithHttpInfo
     *
     * Update Scheduled Plan
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateScheduledPlanAsyncWithHttpInfo($scheduled_plan_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ScheduledPlan';
        $request = $this->updateScheduledPlanRequest($scheduled_plan_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateScheduledPlan'
     *
     * @param  int $scheduled_plan_id Scheduled Plan Id (required)
     * @param  \Funeralzone\LookerClient\Model\ScheduledPlan $body Scheduled Plan (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateScheduledPlanRequest($scheduled_plan_id, $body)
    {
        // verify the required parameter 'scheduled_plan_id' is set
        if ($scheduled_plan_id === null || (is_array($scheduled_plan_id) && count($scheduled_plan_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scheduled_plan_id when calling updateScheduledPlan'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateScheduledPlan'
            );
        }

        $resourcePath = '/scheduled_plans/{scheduled_plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($scheduled_plan_id !== null) {
            $resourcePath = str_replace(
                '{' . 'scheduled_plan_id' . '}',
                ObjectSerializer::toPathValue($scheduled_plan_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
