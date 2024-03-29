<?php
/**
 * RenderTaskApi
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
 * RenderTaskApi Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RenderTaskApi
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
     * Operation createDashboardRenderTask
     *
     * Create Dashboard Render Task
     *
     * @param  int $dashboard_id Id of dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\RenderTask
     */
    public function createDashboardRenderTask($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        list($response) = $this->createDashboardRenderTaskWithHttpInfo($dashboard_id, $result_format, $body, $width, $height, $fields, $pdf_paper_size, $pdf_landscape);
        return $response;
    }

    /**
     * Operation createDashboardRenderTaskWithHttpInfo
     *
     * Create Dashboard Render Task
     *
     * @param  int $dashboard_id Id of dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\RenderTask, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDashboardRenderTaskWithHttpInfo($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->createDashboardRenderTaskRequest($dashboard_id, $result_format, $body, $width, $height, $fields, $pdf_paper_size, $pdf_landscape);

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
                        '\Funeralzone\LookerClient\Model\RenderTask',
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
     * Operation createDashboardRenderTaskAsync
     *
     * Create Dashboard Render Task
     *
     * @param  int $dashboard_id Id of dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardRenderTaskAsync($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        return $this->createDashboardRenderTaskAsyncWithHttpInfo($dashboard_id, $result_format, $body, $width, $height, $fields, $pdf_paper_size, $pdf_landscape)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDashboardRenderTaskAsyncWithHttpInfo
     *
     * Create Dashboard Render Task
     *
     * @param  int $dashboard_id Id of dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDashboardRenderTaskAsyncWithHttpInfo($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->createDashboardRenderTaskRequest($dashboard_id, $result_format, $body, $width, $height, $fields, $pdf_paper_size, $pdf_landscape);

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
     * Create request for operation 'createDashboardRenderTask'
     *
     * @param  int $dashboard_id Id of dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createDashboardRenderTaskRequest($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        // verify the required parameter 'dashboard_id' is set
        if ($dashboard_id === null || (is_array($dashboard_id) && count($dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_id when calling createDashboardRenderTask'
            );
        }
        // verify the required parameter 'result_format' is set
        if ($result_format === null || (is_array($result_format) && count($result_format) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $result_format when calling createDashboardRenderTask'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createDashboardRenderTask'
            );
        }
        // verify the required parameter 'width' is set
        if ($width === null || (is_array($width) && count($width) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $width when calling createDashboardRenderTask'
            );
        }
        // verify the required parameter 'height' is set
        if ($height === null || (is_array($height) && count($height) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $height when calling createDashboardRenderTask'
            );
        }

        $resourcePath = '/render_tasks/dashboards/{dashboard_id}/{result_format}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($width);
        }
        // query params
        if ($height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($height);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($pdf_paper_size !== null) {
            $queryParams['pdf_paper_size'] = ObjectSerializer::toQueryValue($pdf_paper_size);
        }
        // query params
        if ($pdf_landscape !== null) {
            $queryParams['pdf_landscape'] = ObjectSerializer::toQueryValue($pdf_landscape);
        }

        // path params
        if ($dashboard_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_id' . '}',
                ObjectSerializer::toPathValue($dashboard_id),
                $resourcePath
            );
        }
        // path params
        if ($result_format !== null) {
            $resourcePath = str_replace(
                '{' . 'result_format' . '}',
                ObjectSerializer::toPathValue($result_format),
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
     * Operation createLookRenderTask
     *
     * Create Look Render Task
     *
     * @param  int $look_id Id of look to render (required)
     * @param  string $result_format Output type: png, or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\RenderTask
     */
    public function createLookRenderTask($look_id, $result_format, $width, $height, $fields = null)
    {
        list($response) = $this->createLookRenderTaskWithHttpInfo($look_id, $result_format, $width, $height, $fields);
        return $response;
    }

    /**
     * Operation createLookRenderTaskWithHttpInfo
     *
     * Create Look Render Task
     *
     * @param  int $look_id Id of look to render (required)
     * @param  string $result_format Output type: png, or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\RenderTask, HTTP status code, HTTP response headers (array of strings)
     */
    public function createLookRenderTaskWithHttpInfo($look_id, $result_format, $width, $height, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->createLookRenderTaskRequest($look_id, $result_format, $width, $height, $fields);

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
                        '\Funeralzone\LookerClient\Model\RenderTask',
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
     * Operation createLookRenderTaskAsync
     *
     * Create Look Render Task
     *
     * @param  int $look_id Id of look to render (required)
     * @param  string $result_format Output type: png, or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLookRenderTaskAsync($look_id, $result_format, $width, $height, $fields = null)
    {
        return $this->createLookRenderTaskAsyncWithHttpInfo($look_id, $result_format, $width, $height, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createLookRenderTaskAsyncWithHttpInfo
     *
     * Create Look Render Task
     *
     * @param  int $look_id Id of look to render (required)
     * @param  string $result_format Output type: png, or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLookRenderTaskAsyncWithHttpInfo($look_id, $result_format, $width, $height, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->createLookRenderTaskRequest($look_id, $result_format, $width, $height, $fields);

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
     * Create request for operation 'createLookRenderTask'
     *
     * @param  int $look_id Id of look to render (required)
     * @param  string $result_format Output type: png, or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createLookRenderTaskRequest($look_id, $result_format, $width, $height, $fields = null)
    {
        // verify the required parameter 'look_id' is set
        if ($look_id === null || (is_array($look_id) && count($look_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $look_id when calling createLookRenderTask'
            );
        }
        // verify the required parameter 'result_format' is set
        if ($result_format === null || (is_array($result_format) && count($result_format) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $result_format when calling createLookRenderTask'
            );
        }
        // verify the required parameter 'width' is set
        if ($width === null || (is_array($width) && count($width) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $width when calling createLookRenderTask'
            );
        }
        // verify the required parameter 'height' is set
        if ($height === null || (is_array($height) && count($height) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $height when calling createLookRenderTask'
            );
        }

        $resourcePath = '/render_tasks/looks/{look_id}/{result_format}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($width);
        }
        // query params
        if ($height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($height);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }

        // path params
        if ($look_id !== null) {
            $resourcePath = str_replace(
                '{' . 'look_id' . '}',
                ObjectSerializer::toPathValue($look_id),
                $resourcePath
            );
        }
        // path params
        if ($result_format !== null) {
            $resourcePath = str_replace(
                '{' . 'result_format' . '}',
                ObjectSerializer::toPathValue($result_format),
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createLookmlDashboardRenderTask
     *
     * Create Lookml Dashboard Render Task
     *
     * @param  string $dashboard_id Id of lookml dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\RenderTask
     */
    public function createLookmlDashboardRenderTask($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        list($response) = $this->createLookmlDashboardRenderTaskWithHttpInfo($dashboard_id, $result_format, $body, $width, $height, $fields, $pdf_paper_size, $pdf_landscape);
        return $response;
    }

    /**
     * Operation createLookmlDashboardRenderTaskWithHttpInfo
     *
     * Create Lookml Dashboard Render Task
     *
     * @param  string $dashboard_id Id of lookml dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\RenderTask, HTTP status code, HTTP response headers (array of strings)
     */
    public function createLookmlDashboardRenderTaskWithHttpInfo($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->createLookmlDashboardRenderTaskRequest($dashboard_id, $result_format, $body, $width, $height, $fields, $pdf_paper_size, $pdf_landscape);

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
                        '\Funeralzone\LookerClient\Model\RenderTask',
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
     * Operation createLookmlDashboardRenderTaskAsync
     *
     * Create Lookml Dashboard Render Task
     *
     * @param  string $dashboard_id Id of lookml dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLookmlDashboardRenderTaskAsync($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        return $this->createLookmlDashboardRenderTaskAsyncWithHttpInfo($dashboard_id, $result_format, $body, $width, $height, $fields, $pdf_paper_size, $pdf_landscape)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createLookmlDashboardRenderTaskAsyncWithHttpInfo
     *
     * Create Lookml Dashboard Render Task
     *
     * @param  string $dashboard_id Id of lookml dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLookmlDashboardRenderTaskAsyncWithHttpInfo($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->createLookmlDashboardRenderTaskRequest($dashboard_id, $result_format, $body, $width, $height, $fields, $pdf_paper_size, $pdf_landscape);

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
     * Create request for operation 'createLookmlDashboardRenderTask'
     *
     * @param  string $dashboard_id Id of lookml dashboard to render (required)
     * @param  string $result_format Output type: pdf, png, or jpg (required)
     * @param  \Funeralzone\LookerClient\Model\CreateDashboardRenderTask $body Dashboard render task parameters (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $pdf_paper_size Paper size for pdf (optional)
     * @param  bool $pdf_landscape Whether to render pdf in landscape (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createLookmlDashboardRenderTaskRequest($dashboard_id, $result_format, $body, $width, $height, $fields = null, $pdf_paper_size = null, $pdf_landscape = null)
    {
        // verify the required parameter 'dashboard_id' is set
        if ($dashboard_id === null || (is_array($dashboard_id) && count($dashboard_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dashboard_id when calling createLookmlDashboardRenderTask'
            );
        }
        // verify the required parameter 'result_format' is set
        if ($result_format === null || (is_array($result_format) && count($result_format) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $result_format when calling createLookmlDashboardRenderTask'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createLookmlDashboardRenderTask'
            );
        }
        // verify the required parameter 'width' is set
        if ($width === null || (is_array($width) && count($width) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $width when calling createLookmlDashboardRenderTask'
            );
        }
        // verify the required parameter 'height' is set
        if ($height === null || (is_array($height) && count($height) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $height when calling createLookmlDashboardRenderTask'
            );
        }

        $resourcePath = '/render_tasks/lookml_dashboards/{dashboard_id}/{result_format}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($width);
        }
        // query params
        if ($height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($height);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($pdf_paper_size !== null) {
            $queryParams['pdf_paper_size'] = ObjectSerializer::toQueryValue($pdf_paper_size);
        }
        // query params
        if ($pdf_landscape !== null) {
            $queryParams['pdf_landscape'] = ObjectSerializer::toQueryValue($pdf_landscape);
        }

        // path params
        if ($dashboard_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dashboard_id' . '}',
                ObjectSerializer::toPathValue($dashboard_id),
                $resourcePath
            );
        }
        // path params
        if ($result_format !== null) {
            $resourcePath = str_replace(
                '{' . 'result_format' . '}',
                ObjectSerializer::toPathValue($result_format),
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
     * Operation createQueryRenderTask
     *
     * Create Query Render Task
     *
     * @param  int $query_id Id of the query to render (required)
     * @param  string $result_format Output type: png or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\RenderTask
     */
    public function createQueryRenderTask($query_id, $result_format, $width, $height, $fields = null)
    {
        list($response) = $this->createQueryRenderTaskWithHttpInfo($query_id, $result_format, $width, $height, $fields);
        return $response;
    }

    /**
     * Operation createQueryRenderTaskWithHttpInfo
     *
     * Create Query Render Task
     *
     * @param  int $query_id Id of the query to render (required)
     * @param  string $result_format Output type: png or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\RenderTask, HTTP status code, HTTP response headers (array of strings)
     */
    public function createQueryRenderTaskWithHttpInfo($query_id, $result_format, $width, $height, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->createQueryRenderTaskRequest($query_id, $result_format, $width, $height, $fields);

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
                        '\Funeralzone\LookerClient\Model\RenderTask',
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
     * Operation createQueryRenderTaskAsync
     *
     * Create Query Render Task
     *
     * @param  int $query_id Id of the query to render (required)
     * @param  string $result_format Output type: png or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createQueryRenderTaskAsync($query_id, $result_format, $width, $height, $fields = null)
    {
        return $this->createQueryRenderTaskAsyncWithHttpInfo($query_id, $result_format, $width, $height, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createQueryRenderTaskAsyncWithHttpInfo
     *
     * Create Query Render Task
     *
     * @param  int $query_id Id of the query to render (required)
     * @param  string $result_format Output type: png or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createQueryRenderTaskAsyncWithHttpInfo($query_id, $result_format, $width, $height, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->createQueryRenderTaskRequest($query_id, $result_format, $width, $height, $fields);

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
     * Create request for operation 'createQueryRenderTask'
     *
     * @param  int $query_id Id of the query to render (required)
     * @param  string $result_format Output type: png or jpg (required)
     * @param  int $width Output width in pixels (required)
     * @param  int $height Output height in pixels (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createQueryRenderTaskRequest($query_id, $result_format, $width, $height, $fields = null)
    {
        // verify the required parameter 'query_id' is set
        if ($query_id === null || (is_array($query_id) && count($query_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $query_id when calling createQueryRenderTask'
            );
        }
        // verify the required parameter 'result_format' is set
        if ($result_format === null || (is_array($result_format) && count($result_format) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $result_format when calling createQueryRenderTask'
            );
        }
        // verify the required parameter 'width' is set
        if ($width === null || (is_array($width) && count($width) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $width when calling createQueryRenderTask'
            );
        }
        // verify the required parameter 'height' is set
        if ($height === null || (is_array($height) && count($height) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $height when calling createQueryRenderTask'
            );
        }

        $resourcePath = '/render_tasks/queries/{query_id}/{result_format}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($width);
        }
        // query params
        if ($height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($height);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }

        // path params
        if ($query_id !== null) {
            $resourcePath = str_replace(
                '{' . 'query_id' . '}',
                ObjectSerializer::toPathValue($query_id),
                $resourcePath
            );
        }
        // path params
        if ($result_format !== null) {
            $resourcePath = str_replace(
                '{' . 'result_format' . '}',
                ObjectSerializer::toPathValue($result_format),
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation renderTask
     *
     * Get Render Task
     *
     * @param  string $render_task_id Id of render task (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\RenderTask
     */
    public function renderTask($render_task_id, $fields = null)
    {
        list($response) = $this->renderTaskWithHttpInfo($render_task_id, $fields);
        return $response;
    }

    /**
     * Operation renderTaskWithHttpInfo
     *
     * Get Render Task
     *
     * @param  string $render_task_id Id of render task (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\RenderTask, HTTP status code, HTTP response headers (array of strings)
     */
    public function renderTaskWithHttpInfo($render_task_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->renderTaskRequest($render_task_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\RenderTask',
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
     * Operation renderTaskAsync
     *
     * Get Render Task
     *
     * @param  string $render_task_id Id of render task (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function renderTaskAsync($render_task_id, $fields = null)
    {
        return $this->renderTaskAsyncWithHttpInfo($render_task_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation renderTaskAsyncWithHttpInfo
     *
     * Get Render Task
     *
     * @param  string $render_task_id Id of render task (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function renderTaskAsyncWithHttpInfo($render_task_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\RenderTask';
        $request = $this->renderTaskRequest($render_task_id, $fields);

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
     * Create request for operation 'renderTask'
     *
     * @param  string $render_task_id Id of render task (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function renderTaskRequest($render_task_id, $fields = null)
    {
        // verify the required parameter 'render_task_id' is set
        if ($render_task_id === null || (is_array($render_task_id) && count($render_task_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $render_task_id when calling renderTask'
            );
        }

        $resourcePath = '/render_tasks/{render_task_id}';
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
        if ($render_task_id !== null) {
            $resourcePath = str_replace(
                '{' . 'render_task_id' . '}',
                ObjectSerializer::toPathValue($render_task_id),
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
     * Operation renderTaskResults
     *
     * Render Task Results
     *
     * @param  string $render_task_id Id of render task (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function renderTaskResults($render_task_id)
    {
        list($response) = $this->renderTaskResultsWithHttpInfo($render_task_id);
        return $response;
    }

    /**
     * Operation renderTaskResultsWithHttpInfo
     *
     * Render Task Results
     *
     * @param  string $render_task_id Id of render task (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function renderTaskResultsWithHttpInfo($render_task_id)
    {
        $returnType = 'string';
        $request = $this->renderTaskResultsRequest($render_task_id);

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
            }
            throw $e;
        }
    }

    /**
     * Operation renderTaskResultsAsync
     *
     * Render Task Results
     *
     * @param  string $render_task_id Id of render task (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function renderTaskResultsAsync($render_task_id)
    {
        return $this->renderTaskResultsAsyncWithHttpInfo($render_task_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation renderTaskResultsAsyncWithHttpInfo
     *
     * Render Task Results
     *
     * @param  string $render_task_id Id of render task (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function renderTaskResultsAsyncWithHttpInfo($render_task_id)
    {
        $returnType = 'string';
        $request = $this->renderTaskResultsRequest($render_task_id);

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
     * Create request for operation 'renderTaskResults'
     *
     * @param  string $render_task_id Id of render task (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function renderTaskResultsRequest($render_task_id)
    {
        // verify the required parameter 'render_task_id' is set
        if ($render_task_id === null || (is_array($render_task_id) && count($render_task_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $render_task_id when calling renderTaskResults'
            );
        }

        $resourcePath = '/render_tasks/{render_task_id}/results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($render_task_id !== null) {
            $resourcePath = str_replace(
                '{' . 'render_task_id' . '}',
                ObjectSerializer::toPathValue($render_task_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['image/jpeg', 'image/png', 'application/pdf']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['image/jpeg', 'image/png', 'application/pdf'],
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
