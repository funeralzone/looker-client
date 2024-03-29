<?php
/**
 * DashboardApi
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
 * DashboardApi Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DashboardApi
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
     * Operation allDashboards
     *
     * Get All Dashboards
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardBase[]
     */
    public function allDashboards($fields = null)
    {
        list($response) = $this->allDashboardsWithHttpInfo($fields);
        return $response;
    }

    /**
     * Operation allDashboardsWithHttpInfo
     *
     * Get All Dashboards
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardBase[], HTTP status code, HTTP response headers (array of strings)
     */
    public function allDashboardsWithHttpInfo($fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardBase[]';
        $request = $this->allDashboardsRequest($fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardBase[]',
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
     * Operation allDashboardsAsync
     *
     * Get All Dashboards
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allDashboardsAsync($fields = null)
    {
        return $this->allDashboardsAsyncWithHttpInfo($fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation allDashboardsAsyncWithHttpInfo
     *
     * Get All Dashboards
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allDashboardsAsyncWithHttpInfo($fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardBase[]';
        $request = $this->allDashboardsRequest($fields);

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
     * Create request for operation 'allDashboards'
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function allDashboardsRequest($fields = null)
    {

        $resourcePath = '/dashboards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
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
     * Operation createDashboard
     *
     * Create Dashboard
     *
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Dashboard
     */
    public function createDashboard($body = null)
    {
        list($response) = $this->createDashboardWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createDashboardWithHttpInfo
     *
     * Create Dashboard
     *
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Dashboard, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDashboardWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard';
        $request = $this->createDashboardRequest($body);

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
                        '\Funeralzone\LookerClient\Model\Dashboard',
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
     * Operation createDashboardAsync
     *
     * Create Dashboard
     *
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardAsync($body = null)
    {
        return $this->createDashboardAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDashboardAsyncWithHttpInfo
     *
     * Create Dashboard
     *
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard';
        $request = $this->createDashboardRequest($body);

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
     * Create request for operation 'createDashboard'
     *
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createDashboardRequest($body = null)
    {

        $resourcePath = '/dashboards';
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
     * Operation createDashboardElement
     *
     * Create DashboardElement
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardElement
     */
    public function createDashboardElement($body = null, $fields = null)
    {
        list($response) = $this->createDashboardElementWithHttpInfo($body, $fields);
        return $response;
    }

    /**
     * Operation createDashboardElementWithHttpInfo
     *
     * Create DashboardElement
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardElement, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDashboardElementWithHttpInfo($body = null, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement';
        $request = $this->createDashboardElementRequest($body, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardElement',
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
     * Operation createDashboardElementAsync
     *
     * Create DashboardElement
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardElementAsync($body = null, $fields = null)
    {
        return $this->createDashboardElementAsyncWithHttpInfo($body, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDashboardElementAsyncWithHttpInfo
     *
     * Create DashboardElement
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardElementAsyncWithHttpInfo($body = null, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement';
        $request = $this->createDashboardElementRequest($body, $fields);

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
     * Create request for operation 'createDashboardElement'
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createDashboardElementRequest($body = null, $fields = null)
    {

        $resourcePath = '/dashboard_elements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
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
     * Operation createDashboardFilter
     *
     * Create Dashboard Filter
     *
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardFilter
     */
    public function createDashboardFilter($body, $fields = null)
    {
        list($response) = $this->createDashboardFilterWithHttpInfo($body, $fields);
        return $response;
    }

    /**
     * Operation createDashboardFilterWithHttpInfo
     *
     * Create Dashboard Filter
     *
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardFilter, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDashboardFilterWithHttpInfo($body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardFilter';
        $request = $this->createDashboardFilterRequest($body, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardFilter',
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
     * Operation createDashboardFilterAsync
     *
     * Create Dashboard Filter
     *
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardFilterAsync($body, $fields = null)
    {
        return $this->createDashboardFilterAsyncWithHttpInfo($body, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDashboardFilterAsyncWithHttpInfo
     *
     * Create Dashboard Filter
     *
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardFilterAsyncWithHttpInfo($body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardFilter';
        $request = $this->createDashboardFilterRequest($body, $fields);

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
     * Create request for operation 'createDashboardFilter'
     *
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createDashboardFilterRequest($body, $fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createDashboardFilter'
            );
        }

        $resourcePath = '/dashboard_filters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
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
     * Operation createDashboardLayout
     *
     * Create DashboardLayout
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardLayout
     */
    public function createDashboardLayout($body = null, $fields = null)
    {
        list($response) = $this->createDashboardLayoutWithHttpInfo($body, $fields);
        return $response;
    }

    /**
     * Operation createDashboardLayoutWithHttpInfo
     *
     * Create DashboardLayout
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardLayout, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDashboardLayoutWithHttpInfo($body = null, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayout';
        $request = $this->createDashboardLayoutRequest($body, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardLayout',
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
     * Operation createDashboardLayoutAsync
     *
     * Create DashboardLayout
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardLayoutAsync($body = null, $fields = null)
    {
        return $this->createDashboardLayoutAsyncWithHttpInfo($body, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDashboardLayoutAsyncWithHttpInfo
     *
     * Create DashboardLayout
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardLayoutAsyncWithHttpInfo($body = null, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayout';
        $request = $this->createDashboardLayoutRequest($body, $fields);

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
     * Create request for operation 'createDashboardLayout'
     *
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (optional)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createDashboardLayoutRequest($body = null, $fields = null)
    {

        $resourcePath = '/dashboard_layouts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
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
     * Operation dashboard
     *
     * Get Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Dashboard
     */
    public function dashboard($dashboard_id, $fields = null)
    {
        list($response) = $this->dashboardWithHttpInfo($dashboard_id, $fields);
        return $response;
    }

    /**
     * Operation dashboardWithHttpInfo
     *
     * Get Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Dashboard, HTTP status code, HTTP response headers (array of strings)
     */
    public function dashboardWithHttpInfo($dashboard_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard';
        $request = $this->dashboardRequest($dashboard_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\Dashboard',
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
     * Operation dashboardAsync
     *
     * Get Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardAsync($dashboard_id, $fields = null)
    {
        return $this->dashboardAsyncWithHttpInfo($dashboard_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dashboardAsyncWithHttpInfo
     *
     * Get Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardAsyncWithHttpInfo($dashboard_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard';
        $request = $this->dashboardRequest($dashboard_id, $fields);

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
     * Create request for operation 'dashboard'
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dashboardRequest($dashboard_id, $fields = null)
    {
        // verify the required parameter 'dashboard_id' is set
        if ($dashboard_id === null || (is_array($dashboard_id) && count($dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_id when calling dashboard'
            );
        }

        $resourcePath = '/dashboards/{dashboard_id}';
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
     * Operation dashboardDashboardElements
     *
     * Get All DashboardElements
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardElement[]
     */
    public function dashboardDashboardElements($dashboard_id, $fields = null)
    {
        list($response) = $this->dashboardDashboardElementsWithHttpInfo($dashboard_id, $fields);
        return $response;
    }

    /**
     * Operation dashboardDashboardElementsWithHttpInfo
     *
     * Get All DashboardElements
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardElement[], HTTP status code, HTTP response headers (array of strings)
     */
    public function dashboardDashboardElementsWithHttpInfo($dashboard_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement[]';
        $request = $this->dashboardDashboardElementsRequest($dashboard_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardElement[]',
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
     * Operation dashboardDashboardElementsAsync
     *
     * Get All DashboardElements
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardDashboardElementsAsync($dashboard_id, $fields = null)
    {
        return $this->dashboardDashboardElementsAsyncWithHttpInfo($dashboard_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dashboardDashboardElementsAsyncWithHttpInfo
     *
     * Get All DashboardElements
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardDashboardElementsAsyncWithHttpInfo($dashboard_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement[]';
        $request = $this->dashboardDashboardElementsRequest($dashboard_id, $fields);

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
     * Create request for operation 'dashboardDashboardElements'
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dashboardDashboardElementsRequest($dashboard_id, $fields = null)
    {
        // verify the required parameter 'dashboard_id' is set
        if ($dashboard_id === null || (is_array($dashboard_id) && count($dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_id when calling dashboardDashboardElements'
            );
        }

        $resourcePath = '/dashboards/{dashboard_id}/dashboard_elements';
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
     * Operation dashboardDashboardFilters
     *
     * Get All Dashboard Filters
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardFilter[]
     */
    public function dashboardDashboardFilters($dashboard_id, $fields = null)
    {
        list($response) = $this->dashboardDashboardFiltersWithHttpInfo($dashboard_id, $fields);
        return $response;
    }

    /**
     * Operation dashboardDashboardFiltersWithHttpInfo
     *
     * Get All Dashboard Filters
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardFilter[], HTTP status code, HTTP response headers (array of strings)
     */
    public function dashboardDashboardFiltersWithHttpInfo($dashboard_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardFilter[]';
        $request = $this->dashboardDashboardFiltersRequest($dashboard_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardFilter[]',
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
     * Operation dashboardDashboardFiltersAsync
     *
     * Get All Dashboard Filters
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardDashboardFiltersAsync($dashboard_id, $fields = null)
    {
        return $this->dashboardDashboardFiltersAsyncWithHttpInfo($dashboard_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dashboardDashboardFiltersAsyncWithHttpInfo
     *
     * Get All Dashboard Filters
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardDashboardFiltersAsyncWithHttpInfo($dashboard_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardFilter[]';
        $request = $this->dashboardDashboardFiltersRequest($dashboard_id, $fields);

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
     * Create request for operation 'dashboardDashboardFilters'
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dashboardDashboardFiltersRequest($dashboard_id, $fields = null)
    {
        // verify the required parameter 'dashboard_id' is set
        if ($dashboard_id === null || (is_array($dashboard_id) && count($dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_id when calling dashboardDashboardFilters'
            );
        }

        $resourcePath = '/dashboards/{dashboard_id}/dashboard_filters';
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
     * Operation dashboardDashboardLayouts
     *
     * Get All DashboardLayouts
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardLayout[]
     */
    public function dashboardDashboardLayouts($dashboard_id, $fields = null)
    {
        list($response) = $this->dashboardDashboardLayoutsWithHttpInfo($dashboard_id, $fields);
        return $response;
    }

    /**
     * Operation dashboardDashboardLayoutsWithHttpInfo
     *
     * Get All DashboardLayouts
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardLayout[], HTTP status code, HTTP response headers (array of strings)
     */
    public function dashboardDashboardLayoutsWithHttpInfo($dashboard_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayout[]';
        $request = $this->dashboardDashboardLayoutsRequest($dashboard_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardLayout[]',
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
     * Operation dashboardDashboardLayoutsAsync
     *
     * Get All DashboardLayouts
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardDashboardLayoutsAsync($dashboard_id, $fields = null)
    {
        return $this->dashboardDashboardLayoutsAsyncWithHttpInfo($dashboard_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dashboardDashboardLayoutsAsyncWithHttpInfo
     *
     * Get All DashboardLayouts
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardDashboardLayoutsAsyncWithHttpInfo($dashboard_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayout[]';
        $request = $this->dashboardDashboardLayoutsRequest($dashboard_id, $fields);

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
     * Create request for operation 'dashboardDashboardLayouts'
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dashboardDashboardLayoutsRequest($dashboard_id, $fields = null)
    {
        // verify the required parameter 'dashboard_id' is set
        if ($dashboard_id === null || (is_array($dashboard_id) && count($dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_id when calling dashboardDashboardLayouts'
            );
        }

        $resourcePath = '/dashboards/{dashboard_id}/dashboard_layouts';
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
     * Operation dashboardElement
     *
     * Get DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardElement
     */
    public function dashboardElement($dashboard_element_id, $fields = null)
    {
        list($response) = $this->dashboardElementWithHttpInfo($dashboard_element_id, $fields);
        return $response;
    }

    /**
     * Operation dashboardElementWithHttpInfo
     *
     * Get DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardElement, HTTP status code, HTTP response headers (array of strings)
     */
    public function dashboardElementWithHttpInfo($dashboard_element_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement';
        $request = $this->dashboardElementRequest($dashboard_element_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardElement',
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
     * Operation dashboardElementAsync
     *
     * Get DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardElementAsync($dashboard_element_id, $fields = null)
    {
        return $this->dashboardElementAsyncWithHttpInfo($dashboard_element_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dashboardElementAsyncWithHttpInfo
     *
     * Get DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardElementAsyncWithHttpInfo($dashboard_element_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement';
        $request = $this->dashboardElementRequest($dashboard_element_id, $fields);

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
     * Create request for operation 'dashboardElement'
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dashboardElementRequest($dashboard_element_id, $fields = null)
    {
        // verify the required parameter 'dashboard_element_id' is set
        if ($dashboard_element_id === null || (is_array($dashboard_element_id) && count($dashboard_element_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_element_id when calling dashboardElement'
            );
        }

        $resourcePath = '/dashboard_elements/{dashboard_element_id}';
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
        if ($dashboard_element_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_element_id' . '}',
                ObjectSerializer::toPathValue($dashboard_element_id),
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
     * Operation dashboardFilter
     *
     * Get Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filters (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardFilter
     */
    public function dashboardFilter($dashboard_filter_id, $fields = null)
    {
        list($response) = $this->dashboardFilterWithHttpInfo($dashboard_filter_id, $fields);
        return $response;
    }

    /**
     * Operation dashboardFilterWithHttpInfo
     *
     * Get Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filters (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardFilter, HTTP status code, HTTP response headers (array of strings)
     */
    public function dashboardFilterWithHttpInfo($dashboard_filter_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardFilter';
        $request = $this->dashboardFilterRequest($dashboard_filter_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardFilter',
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
     * Operation dashboardFilterAsync
     *
     * Get Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filters (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardFilterAsync($dashboard_filter_id, $fields = null)
    {
        return $this->dashboardFilterAsyncWithHttpInfo($dashboard_filter_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dashboardFilterAsyncWithHttpInfo
     *
     * Get Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filters (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardFilterAsyncWithHttpInfo($dashboard_filter_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardFilter';
        $request = $this->dashboardFilterRequest($dashboard_filter_id, $fields);

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
     * Create request for operation 'dashboardFilter'
     *
     * @param  string $dashboard_filter_id Id of dashboard filters (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dashboardFilterRequest($dashboard_filter_id, $fields = null)
    {
        // verify the required parameter 'dashboard_filter_id' is set
        if ($dashboard_filter_id === null || (is_array($dashboard_filter_id) && count($dashboard_filter_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_filter_id when calling dashboardFilter'
            );
        }

        $resourcePath = '/dashboard_filters/{dashboard_filter_id}';
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
        if ($dashboard_filter_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_filter_id' . '}',
                ObjectSerializer::toPathValue($dashboard_filter_id),
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
     * Operation dashboardLayout
     *
     * Get DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layouts (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardLayout
     */
    public function dashboardLayout($dashboard_layout_id, $fields = null)
    {
        list($response) = $this->dashboardLayoutWithHttpInfo($dashboard_layout_id, $fields);
        return $response;
    }

    /**
     * Operation dashboardLayoutWithHttpInfo
     *
     * Get DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layouts (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardLayout, HTTP status code, HTTP response headers (array of strings)
     */
    public function dashboardLayoutWithHttpInfo($dashboard_layout_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayout';
        $request = $this->dashboardLayoutRequest($dashboard_layout_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardLayout',
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
     * Operation dashboardLayoutAsync
     *
     * Get DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layouts (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardLayoutAsync($dashboard_layout_id, $fields = null)
    {
        return $this->dashboardLayoutAsyncWithHttpInfo($dashboard_layout_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dashboardLayoutAsyncWithHttpInfo
     *
     * Get DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layouts (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardLayoutAsyncWithHttpInfo($dashboard_layout_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayout';
        $request = $this->dashboardLayoutRequest($dashboard_layout_id, $fields);

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
     * Create request for operation 'dashboardLayout'
     *
     * @param  string $dashboard_layout_id Id of dashboard layouts (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dashboardLayoutRequest($dashboard_layout_id, $fields = null)
    {
        // verify the required parameter 'dashboard_layout_id' is set
        if ($dashboard_layout_id === null || (is_array($dashboard_layout_id) && count($dashboard_layout_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_layout_id when calling dashboardLayout'
            );
        }

        $resourcePath = '/dashboard_layouts/{dashboard_layout_id}';
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
        if ($dashboard_layout_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_layout_id' . '}',
                ObjectSerializer::toPathValue($dashboard_layout_id),
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
     * Operation dashboardLayoutComponent
     *
     * Get DashboardLayoutComponent
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardLayoutComponent
     */
    public function dashboardLayoutComponent($dashboard_layout_component_id, $fields = null)
    {
        list($response) = $this->dashboardLayoutComponentWithHttpInfo($dashboard_layout_component_id, $fields);
        return $response;
    }

    /**
     * Operation dashboardLayoutComponentWithHttpInfo
     *
     * Get DashboardLayoutComponent
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardLayoutComponent, HTTP status code, HTTP response headers (array of strings)
     */
    public function dashboardLayoutComponentWithHttpInfo($dashboard_layout_component_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayoutComponent';
        $request = $this->dashboardLayoutComponentRequest($dashboard_layout_component_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardLayoutComponent',
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
     * Operation dashboardLayoutComponentAsync
     *
     * Get DashboardLayoutComponent
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardLayoutComponentAsync($dashboard_layout_component_id, $fields = null)
    {
        return $this->dashboardLayoutComponentAsyncWithHttpInfo($dashboard_layout_component_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dashboardLayoutComponentAsyncWithHttpInfo
     *
     * Get DashboardLayoutComponent
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardLayoutComponentAsyncWithHttpInfo($dashboard_layout_component_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayoutComponent';
        $request = $this->dashboardLayoutComponentRequest($dashboard_layout_component_id, $fields);

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
     * Create request for operation 'dashboardLayoutComponent'
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dashboardLayoutComponentRequest($dashboard_layout_component_id, $fields = null)
    {
        // verify the required parameter 'dashboard_layout_component_id' is set
        if ($dashboard_layout_component_id === null || (is_array($dashboard_layout_component_id) && count($dashboard_layout_component_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_layout_component_id when calling dashboardLayoutComponent'
            );
        }

        $resourcePath = '/dashboard_layout_components/{dashboard_layout_component_id}';
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
        if ($dashboard_layout_component_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_layout_component_id' . '}',
                ObjectSerializer::toPathValue($dashboard_layout_component_id),
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
     * Operation dashboardLayoutDashboardLayoutComponents
     *
     * Get All DashboardLayoutComponents
     *
     * @param  string $dashboard_layout_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardLayoutComponent[]
     */
    public function dashboardLayoutDashboardLayoutComponents($dashboard_layout_id, $fields = null)
    {
        list($response) = $this->dashboardLayoutDashboardLayoutComponentsWithHttpInfo($dashboard_layout_id, $fields);
        return $response;
    }

    /**
     * Operation dashboardLayoutDashboardLayoutComponentsWithHttpInfo
     *
     * Get All DashboardLayoutComponents
     *
     * @param  string $dashboard_layout_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardLayoutComponent[], HTTP status code, HTTP response headers (array of strings)
     */
    public function dashboardLayoutDashboardLayoutComponentsWithHttpInfo($dashboard_layout_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayoutComponent[]';
        $request = $this->dashboardLayoutDashboardLayoutComponentsRequest($dashboard_layout_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardLayoutComponent[]',
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
     * Operation dashboardLayoutDashboardLayoutComponentsAsync
     *
     * Get All DashboardLayoutComponents
     *
     * @param  string $dashboard_layout_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardLayoutDashboardLayoutComponentsAsync($dashboard_layout_id, $fields = null)
    {
        return $this->dashboardLayoutDashboardLayoutComponentsAsyncWithHttpInfo($dashboard_layout_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dashboardLayoutDashboardLayoutComponentsAsyncWithHttpInfo
     *
     * Get All DashboardLayoutComponents
     *
     * @param  string $dashboard_layout_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dashboardLayoutDashboardLayoutComponentsAsyncWithHttpInfo($dashboard_layout_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayoutComponent[]';
        $request = $this->dashboardLayoutDashboardLayoutComponentsRequest($dashboard_layout_id, $fields);

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
     * Create request for operation 'dashboardLayoutDashboardLayoutComponents'
     *
     * @param  string $dashboard_layout_id Id of dashboard layout component (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dashboardLayoutDashboardLayoutComponentsRequest($dashboard_layout_id, $fields = null)
    {
        // verify the required parameter 'dashboard_layout_id' is set
        if ($dashboard_layout_id === null || (is_array($dashboard_layout_id) && count($dashboard_layout_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_layout_id when calling dashboardLayoutDashboardLayoutComponents'
            );
        }

        $resourcePath = '/dashboard_layouts/{dashboard_layout_id}/dashboard_layout_components';
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
        if ($dashboard_layout_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_layout_id' . '}',
                ObjectSerializer::toPathValue($dashboard_layout_id),
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
     * Operation deleteDashboard
     *
     * Delete Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function deleteDashboard($dashboard_id)
    {
        list($response) = $this->deleteDashboardWithHttpInfo($dashboard_id);
        return $response;
    }

    /**
     * Operation deleteDashboardWithHttpInfo
     *
     * Delete Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDashboardWithHttpInfo($dashboard_id)
    {
        $returnType = 'string';
        $request = $this->deleteDashboardRequest($dashboard_id);

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
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
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
     * Operation deleteDashboardAsync
     *
     * Delete Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDashboardAsync($dashboard_id)
    {
        return $this->deleteDashboardAsyncWithHttpInfo($dashboard_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDashboardAsyncWithHttpInfo
     *
     * Delete Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDashboardAsyncWithHttpInfo($dashboard_id)
    {
        $returnType = 'string';
        $request = $this->deleteDashboardRequest($dashboard_id);

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
     * Create request for operation 'deleteDashboard'
     *
     * @param  string $dashboard_id Id of dashboard (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteDashboardRequest($dashboard_id)
    {
        // verify the required parameter 'dashboard_id' is set
        if ($dashboard_id === null || (is_array($dashboard_id) && count($dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_id when calling deleteDashboard'
            );
        }

        $resourcePath = '/dashboards/{dashboard_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteDashboardElement
     *
     * Delete DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function deleteDashboardElement($dashboard_element_id)
    {
        list($response) = $this->deleteDashboardElementWithHttpInfo($dashboard_element_id);
        return $response;
    }

    /**
     * Operation deleteDashboardElementWithHttpInfo
     *
     * Delete DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDashboardElementWithHttpInfo($dashboard_element_id)
    {
        $returnType = 'string';
        $request = $this->deleteDashboardElementRequest($dashboard_element_id);

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
     * Operation deleteDashboardElementAsync
     *
     * Delete DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDashboardElementAsync($dashboard_element_id)
    {
        return $this->deleteDashboardElementAsyncWithHttpInfo($dashboard_element_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDashboardElementAsyncWithHttpInfo
     *
     * Delete DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDashboardElementAsyncWithHttpInfo($dashboard_element_id)
    {
        $returnType = 'string';
        $request = $this->deleteDashboardElementRequest($dashboard_element_id);

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
     * Create request for operation 'deleteDashboardElement'
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteDashboardElementRequest($dashboard_element_id)
    {
        // verify the required parameter 'dashboard_element_id' is set
        if ($dashboard_element_id === null || (is_array($dashboard_element_id) && count($dashboard_element_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_element_id when calling deleteDashboardElement'
            );
        }

        $resourcePath = '/dashboard_elements/{dashboard_element_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($dashboard_element_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_element_id' . '}',
                ObjectSerializer::toPathValue($dashboard_element_id),
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
     * Operation deleteDashboardFilter
     *
     * Delete Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function deleteDashboardFilter($dashboard_filter_id)
    {
        list($response) = $this->deleteDashboardFilterWithHttpInfo($dashboard_filter_id);
        return $response;
    }

    /**
     * Operation deleteDashboardFilterWithHttpInfo
     *
     * Delete Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDashboardFilterWithHttpInfo($dashboard_filter_id)
    {
        $returnType = 'string';
        $request = $this->deleteDashboardFilterRequest($dashboard_filter_id);

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
     * Operation deleteDashboardFilterAsync
     *
     * Delete Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDashboardFilterAsync($dashboard_filter_id)
    {
        return $this->deleteDashboardFilterAsyncWithHttpInfo($dashboard_filter_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDashboardFilterAsyncWithHttpInfo
     *
     * Delete Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDashboardFilterAsyncWithHttpInfo($dashboard_filter_id)
    {
        $returnType = 'string';
        $request = $this->deleteDashboardFilterRequest($dashboard_filter_id);

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
     * Create request for operation 'deleteDashboardFilter'
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteDashboardFilterRequest($dashboard_filter_id)
    {
        // verify the required parameter 'dashboard_filter_id' is set
        if ($dashboard_filter_id === null || (is_array($dashboard_filter_id) && count($dashboard_filter_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_filter_id when calling deleteDashboardFilter'
            );
        }

        $resourcePath = '/dashboard_filters/{dashboard_filter_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($dashboard_filter_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_filter_id' . '}',
                ObjectSerializer::toPathValue($dashboard_filter_id),
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
     * Operation deleteDashboardLayout
     *
     * Delete DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function deleteDashboardLayout($dashboard_layout_id)
    {
        list($response) = $this->deleteDashboardLayoutWithHttpInfo($dashboard_layout_id);
        return $response;
    }

    /**
     * Operation deleteDashboardLayoutWithHttpInfo
     *
     * Delete DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDashboardLayoutWithHttpInfo($dashboard_layout_id)
    {
        $returnType = 'string';
        $request = $this->deleteDashboardLayoutRequest($dashboard_layout_id);

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
     * Operation deleteDashboardLayoutAsync
     *
     * Delete DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDashboardLayoutAsync($dashboard_layout_id)
    {
        return $this->deleteDashboardLayoutAsyncWithHttpInfo($dashboard_layout_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDashboardLayoutAsyncWithHttpInfo
     *
     * Delete DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDashboardLayoutAsyncWithHttpInfo($dashboard_layout_id)
    {
        $returnType = 'string';
        $request = $this->deleteDashboardLayoutRequest($dashboard_layout_id);

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
     * Create request for operation 'deleteDashboardLayout'
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteDashboardLayoutRequest($dashboard_layout_id)
    {
        // verify the required parameter 'dashboard_layout_id' is set
        if ($dashboard_layout_id === null || (is_array($dashboard_layout_id) && count($dashboard_layout_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_layout_id when calling deleteDashboardLayout'
            );
        }

        $resourcePath = '/dashboard_layouts/{dashboard_layout_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($dashboard_layout_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_layout_id' . '}',
                ObjectSerializer::toPathValue($dashboard_layout_id),
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
     * Operation importLookmlDashboard
     *
     * Import LookML Dashboard
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard (required)
     * @param  string $space_id Id of space to import the dashboard to (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Dashboard
     */
    public function importLookmlDashboard($lookml_dashboard_id, $space_id, $body = null, $raw_locale = null)
    {
        list($response) = $this->importLookmlDashboardWithHttpInfo($lookml_dashboard_id, $space_id, $body, $raw_locale);
        return $response;
    }

    /**
     * Operation importLookmlDashboardWithHttpInfo
     *
     * Import LookML Dashboard
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard (required)
     * @param  string $space_id Id of space to import the dashboard to (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Dashboard, HTTP status code, HTTP response headers (array of strings)
     */
    public function importLookmlDashboardWithHttpInfo($lookml_dashboard_id, $space_id, $body = null, $raw_locale = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard';
        $request = $this->importLookmlDashboardRequest($lookml_dashboard_id, $space_id, $body, $raw_locale);

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
                        '\Funeralzone\LookerClient\Model\Dashboard',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Funeralzone\LookerClient\Model\Dashboard',
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
     * Operation importLookmlDashboardAsync
     *
     * Import LookML Dashboard
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard (required)
     * @param  string $space_id Id of space to import the dashboard to (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importLookmlDashboardAsync($lookml_dashboard_id, $space_id, $body = null, $raw_locale = null)
    {
        return $this->importLookmlDashboardAsyncWithHttpInfo($lookml_dashboard_id, $space_id, $body, $raw_locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation importLookmlDashboardAsyncWithHttpInfo
     *
     * Import LookML Dashboard
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard (required)
     * @param  string $space_id Id of space to import the dashboard to (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importLookmlDashboardAsyncWithHttpInfo($lookml_dashboard_id, $space_id, $body = null, $raw_locale = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard';
        $request = $this->importLookmlDashboardRequest($lookml_dashboard_id, $space_id, $body, $raw_locale);

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
     * Create request for operation 'importLookmlDashboard'
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard (required)
     * @param  string $space_id Id of space to import the dashboard to (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (optional)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function importLookmlDashboardRequest($lookml_dashboard_id, $space_id, $body = null, $raw_locale = null)
    {
        // verify the required parameter 'lookml_dashboard_id' is set
        if ($lookml_dashboard_id === null || (is_array($lookml_dashboard_id) && count($lookml_dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lookml_dashboard_id when calling importLookmlDashboard'
            );
        }
        // verify the required parameter 'space_id' is set
        if ($space_id === null || (is_array($space_id) && count($space_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space_id when calling importLookmlDashboard'
            );
        }

        $resourcePath = '/dashboards/{lookml_dashboard_id}/import/{space_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($raw_locale !== null) {
            $queryParams['raw_locale'] = ObjectSerializer::toQueryValue($raw_locale);
        }

        // path params
        if ($lookml_dashboard_id !== null) {
            $resourcePath = str_replace(
                '{' . 'lookml_dashboard_id' . '}',
                ObjectSerializer::toPathValue($lookml_dashboard_id),
                $resourcePath
            );
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
     * Operation searchDashboardElements
     *
     * Search Dashboard Elements
     *
     * @param  int $dashboard_id Select elements that refer to a given dashboard id (optional)
     * @param  int $look_id Select elements that refer to a given look id (optional)
     * @param  string $title Match the title of element (optional)
     * @param  bool $deleted Select soft-deleted dashboard elements (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     * @param  string $sorts Fields to sort by. Sortable fields: [:look_id, :dashboard_id, :deleted, :title] (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardElement[]
     */
    public function searchDashboardElements($dashboard_id = null, $look_id = null, $title = null, $deleted = null, $fields = null, $filter_or = null, $sorts = null)
    {
        list($response) = $this->searchDashboardElementsWithHttpInfo($dashboard_id, $look_id, $title, $deleted, $fields, $filter_or, $sorts);
        return $response;
    }

    /**
     * Operation searchDashboardElementsWithHttpInfo
     *
     * Search Dashboard Elements
     *
     * @param  int $dashboard_id Select elements that refer to a given dashboard id (optional)
     * @param  int $look_id Select elements that refer to a given look id (optional)
     * @param  string $title Match the title of element (optional)
     * @param  bool $deleted Select soft-deleted dashboard elements (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     * @param  string $sorts Fields to sort by. Sortable fields: [:look_id, :dashboard_id, :deleted, :title] (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardElement[], HTTP status code, HTTP response headers (array of strings)
     */
    public function searchDashboardElementsWithHttpInfo($dashboard_id = null, $look_id = null, $title = null, $deleted = null, $fields = null, $filter_or = null, $sorts = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement[]';
        $request = $this->searchDashboardElementsRequest($dashboard_id, $look_id, $title, $deleted, $fields, $filter_or, $sorts);

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
                        '\Funeralzone\LookerClient\Model\DashboardElement[]',
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
     * Operation searchDashboardElementsAsync
     *
     * Search Dashboard Elements
     *
     * @param  int $dashboard_id Select elements that refer to a given dashboard id (optional)
     * @param  int $look_id Select elements that refer to a given look id (optional)
     * @param  string $title Match the title of element (optional)
     * @param  bool $deleted Select soft-deleted dashboard elements (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     * @param  string $sorts Fields to sort by. Sortable fields: [:look_id, :dashboard_id, :deleted, :title] (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchDashboardElementsAsync($dashboard_id = null, $look_id = null, $title = null, $deleted = null, $fields = null, $filter_or = null, $sorts = null)
    {
        return $this->searchDashboardElementsAsyncWithHttpInfo($dashboard_id, $look_id, $title, $deleted, $fields, $filter_or, $sorts)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchDashboardElementsAsyncWithHttpInfo
     *
     * Search Dashboard Elements
     *
     * @param  int $dashboard_id Select elements that refer to a given dashboard id (optional)
     * @param  int $look_id Select elements that refer to a given look id (optional)
     * @param  string $title Match the title of element (optional)
     * @param  bool $deleted Select soft-deleted dashboard elements (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     * @param  string $sorts Fields to sort by. Sortable fields: [:look_id, :dashboard_id, :deleted, :title] (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchDashboardElementsAsyncWithHttpInfo($dashboard_id = null, $look_id = null, $title = null, $deleted = null, $fields = null, $filter_or = null, $sorts = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement[]';
        $request = $this->searchDashboardElementsRequest($dashboard_id, $look_id, $title, $deleted, $fields, $filter_or, $sorts);

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
     * Create request for operation 'searchDashboardElements'
     *
     * @param  int $dashboard_id Select elements that refer to a given dashboard id (optional)
     * @param  int $look_id Select elements that refer to a given look id (optional)
     * @param  string $title Match the title of element (optional)
     * @param  bool $deleted Select soft-deleted dashboard elements (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     * @param  string $sorts Fields to sort by. Sortable fields: [:look_id, :dashboard_id, :deleted, :title] (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchDashboardElementsRequest($dashboard_id = null, $look_id = null, $title = null, $deleted = null, $fields = null, $filter_or = null, $sorts = null)
    {

        $resourcePath = '/dashboard_elements/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($dashboard_id !== null) {
            $queryParams['dashboard_id'] = ObjectSerializer::toQueryValue($dashboard_id);
        }
        // query params
        if ($look_id !== null) {
            $queryParams['look_id'] = ObjectSerializer::toQueryValue($look_id);
        }
        // query params
        if ($title !== null) {
            $queryParams['title'] = ObjectSerializer::toQueryValue($title);
        }
        // query params
        if ($deleted !== null) {
            $queryParams['deleted'] = ObjectSerializer::toQueryValue($deleted);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($filter_or !== null) {
            $queryParams['filter_or'] = ObjectSerializer::toQueryValue($filter_or);
        }
        // query params
        if ($sorts !== null) {
            $queryParams['sorts'] = ObjectSerializer::toQueryValue($sorts);
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
     * Operation searchDashboards
     *
     * Search Dashboards
     *
     * @param  int $id Match dashboard id. (optional)
     * @param  string $slug Match dashboard slug. (optional)
     * @param  string $title Match Dashboard title. (optional)
     * @param  string $description Match Dashboard description. (optional)
     * @param  int $content_favorite_id Filter on a content favorite id. (optional)
     * @param  string $space_id Filter on a particular space. (optional)
     * @param  string $deleted Filter on dashboards deleted status. (optional)
     * @param  string $user_id Filter on dashboards created by a particular user. (optional)
     * @param  string $view_count Filter on a particular value of view_count (optional)
     * @param  int $content_metadata_id Filter on a content favorite id. (optional)
     * @param  bool $curate Exclude items that exist only in personal spaces other than the users (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts One or more fields to sort by. Sortable fields: [:title, :user_id, :id, :created_at, :space_id, :description, :view_count, :favorite_count, :slug, :content_favorite_id, :content_metadata_id, :deleted, :deleted_at, :last_viewed_at] (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Dashboard[]
     */
    public function searchDashboards($id = null, $slug = null, $title = null, $description = null, $content_favorite_id = null, $space_id = null, $deleted = null, $user_id = null, $view_count = null, $content_metadata_id = null, $curate = null, $fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {
        list($response) = $this->searchDashboardsWithHttpInfo($id, $slug, $title, $description, $content_favorite_id, $space_id, $deleted, $user_id, $view_count, $content_metadata_id, $curate, $fields, $page, $per_page, $limit, $offset, $sorts, $filter_or);
        return $response;
    }

    /**
     * Operation searchDashboardsWithHttpInfo
     *
     * Search Dashboards
     *
     * @param  int $id Match dashboard id. (optional)
     * @param  string $slug Match dashboard slug. (optional)
     * @param  string $title Match Dashboard title. (optional)
     * @param  string $description Match Dashboard description. (optional)
     * @param  int $content_favorite_id Filter on a content favorite id. (optional)
     * @param  string $space_id Filter on a particular space. (optional)
     * @param  string $deleted Filter on dashboards deleted status. (optional)
     * @param  string $user_id Filter on dashboards created by a particular user. (optional)
     * @param  string $view_count Filter on a particular value of view_count (optional)
     * @param  int $content_metadata_id Filter on a content favorite id. (optional)
     * @param  bool $curate Exclude items that exist only in personal spaces other than the users (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts One or more fields to sort by. Sortable fields: [:title, :user_id, :id, :created_at, :space_id, :description, :view_count, :favorite_count, :slug, :content_favorite_id, :content_metadata_id, :deleted, :deleted_at, :last_viewed_at] (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Dashboard[], HTTP status code, HTTP response headers (array of strings)
     */
    public function searchDashboardsWithHttpInfo($id = null, $slug = null, $title = null, $description = null, $content_favorite_id = null, $space_id = null, $deleted = null, $user_id = null, $view_count = null, $content_metadata_id = null, $curate = null, $fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard[]';
        $request = $this->searchDashboardsRequest($id, $slug, $title, $description, $content_favorite_id, $space_id, $deleted, $user_id, $view_count, $content_metadata_id, $curate, $fields, $page, $per_page, $limit, $offset, $sorts, $filter_or);

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
                        '\Funeralzone\LookerClient\Model\Dashboard[]',
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
     * Operation searchDashboardsAsync
     *
     * Search Dashboards
     *
     * @param  int $id Match dashboard id. (optional)
     * @param  string $slug Match dashboard slug. (optional)
     * @param  string $title Match Dashboard title. (optional)
     * @param  string $description Match Dashboard description. (optional)
     * @param  int $content_favorite_id Filter on a content favorite id. (optional)
     * @param  string $space_id Filter on a particular space. (optional)
     * @param  string $deleted Filter on dashboards deleted status. (optional)
     * @param  string $user_id Filter on dashboards created by a particular user. (optional)
     * @param  string $view_count Filter on a particular value of view_count (optional)
     * @param  int $content_metadata_id Filter on a content favorite id. (optional)
     * @param  bool $curate Exclude items that exist only in personal spaces other than the users (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts One or more fields to sort by. Sortable fields: [:title, :user_id, :id, :created_at, :space_id, :description, :view_count, :favorite_count, :slug, :content_favorite_id, :content_metadata_id, :deleted, :deleted_at, :last_viewed_at] (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchDashboardsAsync($id = null, $slug = null, $title = null, $description = null, $content_favorite_id = null, $space_id = null, $deleted = null, $user_id = null, $view_count = null, $content_metadata_id = null, $curate = null, $fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {
        return $this->searchDashboardsAsyncWithHttpInfo($id, $slug, $title, $description, $content_favorite_id, $space_id, $deleted, $user_id, $view_count, $content_metadata_id, $curate, $fields, $page, $per_page, $limit, $offset, $sorts, $filter_or)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchDashboardsAsyncWithHttpInfo
     *
     * Search Dashboards
     *
     * @param  int $id Match dashboard id. (optional)
     * @param  string $slug Match dashboard slug. (optional)
     * @param  string $title Match Dashboard title. (optional)
     * @param  string $description Match Dashboard description. (optional)
     * @param  int $content_favorite_id Filter on a content favorite id. (optional)
     * @param  string $space_id Filter on a particular space. (optional)
     * @param  string $deleted Filter on dashboards deleted status. (optional)
     * @param  string $user_id Filter on dashboards created by a particular user. (optional)
     * @param  string $view_count Filter on a particular value of view_count (optional)
     * @param  int $content_metadata_id Filter on a content favorite id. (optional)
     * @param  bool $curate Exclude items that exist only in personal spaces other than the users (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts One or more fields to sort by. Sortable fields: [:title, :user_id, :id, :created_at, :space_id, :description, :view_count, :favorite_count, :slug, :content_favorite_id, :content_metadata_id, :deleted, :deleted_at, :last_viewed_at] (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchDashboardsAsyncWithHttpInfo($id = null, $slug = null, $title = null, $description = null, $content_favorite_id = null, $space_id = null, $deleted = null, $user_id = null, $view_count = null, $content_metadata_id = null, $curate = null, $fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard[]';
        $request = $this->searchDashboardsRequest($id, $slug, $title, $description, $content_favorite_id, $space_id, $deleted, $user_id, $view_count, $content_metadata_id, $curate, $fields, $page, $per_page, $limit, $offset, $sorts, $filter_or);

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
     * Create request for operation 'searchDashboards'
     *
     * @param  int $id Match dashboard id. (optional)
     * @param  string $slug Match dashboard slug. (optional)
     * @param  string $title Match Dashboard title. (optional)
     * @param  string $description Match Dashboard description. (optional)
     * @param  int $content_favorite_id Filter on a content favorite id. (optional)
     * @param  string $space_id Filter on a particular space. (optional)
     * @param  string $deleted Filter on dashboards deleted status. (optional)
     * @param  string $user_id Filter on dashboards created by a particular user. (optional)
     * @param  string $view_count Filter on a particular value of view_count (optional)
     * @param  int $content_metadata_id Filter on a content favorite id. (optional)
     * @param  bool $curate Exclude items that exist only in personal spaces other than the users (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts One or more fields to sort by. Sortable fields: [:title, :user_id, :id, :created_at, :space_id, :description, :view_count, :favorite_count, :slug, :content_favorite_id, :content_metadata_id, :deleted, :deleted_at, :last_viewed_at] (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchDashboardsRequest($id = null, $slug = null, $title = null, $description = null, $content_favorite_id = null, $space_id = null, $deleted = null, $user_id = null, $view_count = null, $content_metadata_id = null, $curate = null, $fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {

        $resourcePath = '/dashboards/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($slug !== null) {
            $queryParams['slug'] = ObjectSerializer::toQueryValue($slug);
        }
        // query params
        if ($title !== null) {
            $queryParams['title'] = ObjectSerializer::toQueryValue($title);
        }
        // query params
        if ($description !== null) {
            $queryParams['description'] = ObjectSerializer::toQueryValue($description);
        }
        // query params
        if ($content_favorite_id !== null) {
            $queryParams['content_favorite_id'] = ObjectSerializer::toQueryValue($content_favorite_id);
        }
        // query params
        if ($space_id !== null) {
            $queryParams['space_id'] = ObjectSerializer::toQueryValue($space_id);
        }
        // query params
        if ($deleted !== null) {
            $queryParams['deleted'] = ObjectSerializer::toQueryValue($deleted);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($view_count !== null) {
            $queryParams['view_count'] = ObjectSerializer::toQueryValue($view_count);
        }
        // query params
        if ($content_metadata_id !== null) {
            $queryParams['content_metadata_id'] = ObjectSerializer::toQueryValue($content_metadata_id);
        }
        // query params
        if ($curate !== null) {
            $queryParams['curate'] = ObjectSerializer::toQueryValue($curate);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($sorts !== null) {
            $queryParams['sorts'] = ObjectSerializer::toQueryValue($sorts);
        }
        // query params
        if ($filter_or !== null) {
            $queryParams['filter_or'] = ObjectSerializer::toQueryValue($filter_or);
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
     * Operation syncLookmlDashboard
     *
     * Sync LookML Dashboard
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard, in the form &#39;model::dashboardname&#39; (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int[]
     */
    public function syncLookmlDashboard($lookml_dashboard_id, $body, $raw_locale = null)
    {
        list($response) = $this->syncLookmlDashboardWithHttpInfo($lookml_dashboard_id, $body, $raw_locale);
        return $response;
    }

    /**
     * Operation syncLookmlDashboardWithHttpInfo
     *
     * Sync LookML Dashboard
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard, in the form &#39;model::dashboardname&#39; (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int[], HTTP status code, HTTP response headers (array of strings)
     */
    public function syncLookmlDashboardWithHttpInfo($lookml_dashboard_id, $body, $raw_locale = null)
    {
        $returnType = 'int[]';
        $request = $this->syncLookmlDashboardRequest($lookml_dashboard_id, $body, $raw_locale);

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
                        'int[]',
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
     * Operation syncLookmlDashboardAsync
     *
     * Sync LookML Dashboard
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard, in the form &#39;model::dashboardname&#39; (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncLookmlDashboardAsync($lookml_dashboard_id, $body, $raw_locale = null)
    {
        return $this->syncLookmlDashboardAsyncWithHttpInfo($lookml_dashboard_id, $body, $raw_locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation syncLookmlDashboardAsyncWithHttpInfo
     *
     * Sync LookML Dashboard
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard, in the form &#39;model::dashboardname&#39; (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncLookmlDashboardAsyncWithHttpInfo($lookml_dashboard_id, $body, $raw_locale = null)
    {
        $returnType = 'int[]';
        $request = $this->syncLookmlDashboardRequest($lookml_dashboard_id, $body, $raw_locale);

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
     * Create request for operation 'syncLookmlDashboard'
     *
     * @param  string $lookml_dashboard_id Id of LookML dashboard, in the form &#39;model::dashboardname&#39; (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     * @param  bool $raw_locale If true, and this dashboard is localized, export it with the raw keys, not localized. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function syncLookmlDashboardRequest($lookml_dashboard_id, $body, $raw_locale = null)
    {
        // verify the required parameter 'lookml_dashboard_id' is set
        if ($lookml_dashboard_id === null || (is_array($lookml_dashboard_id) && count($lookml_dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lookml_dashboard_id when calling syncLookmlDashboard'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling syncLookmlDashboard'
            );
        }

        $resourcePath = '/dashboards/{lookml_dashboard_id}/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($raw_locale !== null) {
            $queryParams['raw_locale'] = ObjectSerializer::toQueryValue($raw_locale);
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
     * Operation updateDashboard
     *
     * Update Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Dashboard
     */
    public function updateDashboard($dashboard_id, $body)
    {
        list($response) = $this->updateDashboardWithHttpInfo($dashboard_id, $body);
        return $response;
    }

    /**
     * Operation updateDashboardWithHttpInfo
     *
     * Update Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Dashboard, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDashboardWithHttpInfo($dashboard_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard';
        $request = $this->updateDashboardRequest($dashboard_id, $body);

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
                        '\Funeralzone\LookerClient\Model\Dashboard',
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
                case 405:
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
     * Operation updateDashboardAsync
     *
     * Update Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardAsync($dashboard_id, $body)
    {
        return $this->updateDashboardAsyncWithHttpInfo($dashboard_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDashboardAsyncWithHttpInfo
     *
     * Update Dashboard
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardAsyncWithHttpInfo($dashboard_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard';
        $request = $this->updateDashboardRequest($dashboard_id, $body);

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
     * Create request for operation 'updateDashboard'
     *
     * @param  string $dashboard_id Id of dashboard (required)
     * @param  \Funeralzone\LookerClient\Model\Dashboard $body Dashboard (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDashboardRequest($dashboard_id, $body)
    {
        // verify the required parameter 'dashboard_id' is set
        if ($dashboard_id === null || (is_array($dashboard_id) && count($dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_id when calling updateDashboard'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateDashboard'
            );
        }

        $resourcePath = '/dashboards/{dashboard_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
     * Operation updateDashboardElement
     *
     * Update DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardElement
     */
    public function updateDashboardElement($dashboard_element_id, $body, $fields = null)
    {
        list($response) = $this->updateDashboardElementWithHttpInfo($dashboard_element_id, $body, $fields);
        return $response;
    }

    /**
     * Operation updateDashboardElementWithHttpInfo
     *
     * Update DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardElement, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDashboardElementWithHttpInfo($dashboard_element_id, $body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement';
        $request = $this->updateDashboardElementRequest($dashboard_element_id, $body, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardElement',
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
     * Operation updateDashboardElementAsync
     *
     * Update DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardElementAsync($dashboard_element_id, $body, $fields = null)
    {
        return $this->updateDashboardElementAsyncWithHttpInfo($dashboard_element_id, $body, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDashboardElementAsyncWithHttpInfo
     *
     * Update DashboardElement
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardElementAsyncWithHttpInfo($dashboard_element_id, $body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardElement';
        $request = $this->updateDashboardElementRequest($dashboard_element_id, $body, $fields);

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
     * Create request for operation 'updateDashboardElement'
     *
     * @param  string $dashboard_element_id Id of dashboard element (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardElement $body DashboardElement (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDashboardElementRequest($dashboard_element_id, $body, $fields = null)
    {
        // verify the required parameter 'dashboard_element_id' is set
        if ($dashboard_element_id === null || (is_array($dashboard_element_id) && count($dashboard_element_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_element_id when calling updateDashboardElement'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateDashboardElement'
            );
        }

        $resourcePath = '/dashboard_elements/{dashboard_element_id}';
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
        if ($dashboard_element_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_element_id' . '}',
                ObjectSerializer::toPathValue($dashboard_element_id),
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
     * Operation updateDashboardFilter
     *
     * Update Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardFilter
     */
    public function updateDashboardFilter($dashboard_filter_id, $body, $fields = null)
    {
        list($response) = $this->updateDashboardFilterWithHttpInfo($dashboard_filter_id, $body, $fields);
        return $response;
    }

    /**
     * Operation updateDashboardFilterWithHttpInfo
     *
     * Update Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardFilter, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDashboardFilterWithHttpInfo($dashboard_filter_id, $body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardFilter';
        $request = $this->updateDashboardFilterRequest($dashboard_filter_id, $body, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardFilter',
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
     * Operation updateDashboardFilterAsync
     *
     * Update Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardFilterAsync($dashboard_filter_id, $body, $fields = null)
    {
        return $this->updateDashboardFilterAsyncWithHttpInfo($dashboard_filter_id, $body, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDashboardFilterAsyncWithHttpInfo
     *
     * Update Dashboard Filter
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardFilterAsyncWithHttpInfo($dashboard_filter_id, $body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardFilter';
        $request = $this->updateDashboardFilterRequest($dashboard_filter_id, $body, $fields);

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
     * Create request for operation 'updateDashboardFilter'
     *
     * @param  string $dashboard_filter_id Id of dashboard filter (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardFilter $body Dashboard Filter (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDashboardFilterRequest($dashboard_filter_id, $body, $fields = null)
    {
        // verify the required parameter 'dashboard_filter_id' is set
        if ($dashboard_filter_id === null || (is_array($dashboard_filter_id) && count($dashboard_filter_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_filter_id when calling updateDashboardFilter'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateDashboardFilter'
            );
        }

        $resourcePath = '/dashboard_filters/{dashboard_filter_id}';
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
        if ($dashboard_filter_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_filter_id' . '}',
                ObjectSerializer::toPathValue($dashboard_filter_id),
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
     * Operation updateDashboardLayout
     *
     * Update DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardLayout
     */
    public function updateDashboardLayout($dashboard_layout_id, $body, $fields = null)
    {
        list($response) = $this->updateDashboardLayoutWithHttpInfo($dashboard_layout_id, $body, $fields);
        return $response;
    }

    /**
     * Operation updateDashboardLayoutWithHttpInfo
     *
     * Update DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardLayout, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDashboardLayoutWithHttpInfo($dashboard_layout_id, $body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayout';
        $request = $this->updateDashboardLayoutRequest($dashboard_layout_id, $body, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardLayout',
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
     * Operation updateDashboardLayoutAsync
     *
     * Update DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardLayoutAsync($dashboard_layout_id, $body, $fields = null)
    {
        return $this->updateDashboardLayoutAsyncWithHttpInfo($dashboard_layout_id, $body, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDashboardLayoutAsyncWithHttpInfo
     *
     * Update DashboardLayout
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardLayoutAsyncWithHttpInfo($dashboard_layout_id, $body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayout';
        $request = $this->updateDashboardLayoutRequest($dashboard_layout_id, $body, $fields);

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
     * Create request for operation 'updateDashboardLayout'
     *
     * @param  string $dashboard_layout_id Id of dashboard layout (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayout $body DashboardLayout (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDashboardLayoutRequest($dashboard_layout_id, $body, $fields = null)
    {
        // verify the required parameter 'dashboard_layout_id' is set
        if ($dashboard_layout_id === null || (is_array($dashboard_layout_id) && count($dashboard_layout_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_layout_id when calling updateDashboardLayout'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateDashboardLayout'
            );
        }

        $resourcePath = '/dashboard_layouts/{dashboard_layout_id}';
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
        if ($dashboard_layout_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_layout_id' . '}',
                ObjectSerializer::toPathValue($dashboard_layout_id),
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
     * Operation updateDashboardLayoutComponent
     *
     * Update DashboardLayoutComponent
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayoutComponent $body DashboardLayoutComponent (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\DashboardLayoutComponent
     */
    public function updateDashboardLayoutComponent($dashboard_layout_component_id, $body, $fields = null)
    {
        list($response) = $this->updateDashboardLayoutComponentWithHttpInfo($dashboard_layout_component_id, $body, $fields);
        return $response;
    }

    /**
     * Operation updateDashboardLayoutComponentWithHttpInfo
     *
     * Update DashboardLayoutComponent
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayoutComponent $body DashboardLayoutComponent (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\DashboardLayoutComponent, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDashboardLayoutComponentWithHttpInfo($dashboard_layout_component_id, $body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayoutComponent';
        $request = $this->updateDashboardLayoutComponentRequest($dashboard_layout_component_id, $body, $fields);

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
                        '\Funeralzone\LookerClient\Model\DashboardLayoutComponent',
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
     * Operation updateDashboardLayoutComponentAsync
     *
     * Update DashboardLayoutComponent
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayoutComponent $body DashboardLayoutComponent (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardLayoutComponentAsync($dashboard_layout_component_id, $body, $fields = null)
    {
        return $this->updateDashboardLayoutComponentAsyncWithHttpInfo($dashboard_layout_component_id, $body, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDashboardLayoutComponentAsyncWithHttpInfo
     *
     * Update DashboardLayoutComponent
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayoutComponent $body DashboardLayoutComponent (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDashboardLayoutComponentAsyncWithHttpInfo($dashboard_layout_component_id, $body, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\DashboardLayoutComponent';
        $request = $this->updateDashboardLayoutComponentRequest($dashboard_layout_component_id, $body, $fields);

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
     * Create request for operation 'updateDashboardLayoutComponent'
     *
     * @param  string $dashboard_layout_component_id Id of dashboard layout component (required)
     * @param  \Funeralzone\LookerClient\Model\DashboardLayoutComponent $body DashboardLayoutComponent (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDashboardLayoutComponentRequest($dashboard_layout_component_id, $body, $fields = null)
    {
        // verify the required parameter 'dashboard_layout_component_id' is set
        if ($dashboard_layout_component_id === null || (is_array($dashboard_layout_component_id) && count($dashboard_layout_component_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_layout_component_id when calling updateDashboardLayoutComponent'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateDashboardLayoutComponent'
            );
        }

        $resourcePath = '/dashboard_layout_components/{dashboard_layout_component_id}';
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
        if ($dashboard_layout_component_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_layout_component_id' . '}',
                ObjectSerializer::toPathValue($dashboard_layout_component_id),
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
