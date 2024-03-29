<?php
/**
 * ContentApi
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
 * ContentApi Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentApi
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
     * Operation allContentMetadataAccesses
     *
     * Get All Content Metadata Accesses
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentMetaGroupUser[]
     */
    public function allContentMetadataAccesses($content_metadata_id, $fields = null)
    {
        list($response) = $this->allContentMetadataAccessesWithHttpInfo($content_metadata_id, $fields);
        return $response;
    }

    /**
     * Operation allContentMetadataAccessesWithHttpInfo
     *
     * Get All Content Metadata Accesses
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentMetaGroupUser[], HTTP status code, HTTP response headers (array of strings)
     */
    public function allContentMetadataAccessesWithHttpInfo($content_metadata_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMetaGroupUser[]';
        $request = $this->allContentMetadataAccessesRequest($content_metadata_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\ContentMetaGroupUser[]',
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
     * Operation allContentMetadataAccessesAsync
     *
     * Get All Content Metadata Accesses
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allContentMetadataAccessesAsync($content_metadata_id, $fields = null)
    {
        return $this->allContentMetadataAccessesAsyncWithHttpInfo($content_metadata_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation allContentMetadataAccessesAsyncWithHttpInfo
     *
     * Get All Content Metadata Accesses
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allContentMetadataAccessesAsyncWithHttpInfo($content_metadata_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMetaGroupUser[]';
        $request = $this->allContentMetadataAccessesRequest($content_metadata_id, $fields);

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
     * Create request for operation 'allContentMetadataAccesses'
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function allContentMetadataAccessesRequest($content_metadata_id, $fields = null)
    {
        // verify the required parameter 'content_metadata_id' is set
        if ($content_metadata_id === null || (is_array($content_metadata_id) && count($content_metadata_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_metadata_id when calling allContentMetadataAccesses'
            );
        }

        $resourcePath = '/content_metadata_access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($content_metadata_id !== null) {
            $queryParams['content_metadata_id'] = ObjectSerializer::toQueryValue($content_metadata_id);
        }
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
     * Operation allContentMetadatas
     *
     * Get All Content Metadatas
     *
     * @param  int $parent_id Parent space of content. (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentMeta[]
     */
    public function allContentMetadatas($parent_id, $fields = null)
    {
        list($response) = $this->allContentMetadatasWithHttpInfo($parent_id, $fields);
        return $response;
    }

    /**
     * Operation allContentMetadatasWithHttpInfo
     *
     * Get All Content Metadatas
     *
     * @param  int $parent_id Parent space of content. (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentMeta[], HTTP status code, HTTP response headers (array of strings)
     */
    public function allContentMetadatasWithHttpInfo($parent_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMeta[]';
        $request = $this->allContentMetadatasRequest($parent_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\ContentMeta[]',
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
     * Operation allContentMetadatasAsync
     *
     * Get All Content Metadatas
     *
     * @param  int $parent_id Parent space of content. (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allContentMetadatasAsync($parent_id, $fields = null)
    {
        return $this->allContentMetadatasAsyncWithHttpInfo($parent_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation allContentMetadatasAsyncWithHttpInfo
     *
     * Get All Content Metadatas
     *
     * @param  int $parent_id Parent space of content. (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allContentMetadatasAsyncWithHttpInfo($parent_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMeta[]';
        $request = $this->allContentMetadatasRequest($parent_id, $fields);

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
     * Create request for operation 'allContentMetadatas'
     *
     * @param  int $parent_id Parent space of content. (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function allContentMetadatasRequest($parent_id, $fields = null)
    {
        // verify the required parameter 'parent_id' is set
        if ($parent_id === null || (is_array($parent_id) && count($parent_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $parent_id when calling allContentMetadatas'
            );
        }

        $resourcePath = '/content_metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($parent_id !== null) {
            $queryParams['parent_id'] = ObjectSerializer::toQueryValue($parent_id);
        }
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
     * Operation contentFavorite
     *
     * Get Favorite Content
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentFavorite
     */
    public function contentFavorite($content_favorite_id, $fields = null)
    {
        list($response) = $this->contentFavoriteWithHttpInfo($content_favorite_id, $fields);
        return $response;
    }

    /**
     * Operation contentFavoriteWithHttpInfo
     *
     * Get Favorite Content
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentFavorite, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentFavoriteWithHttpInfo($content_favorite_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentFavorite';
        $request = $this->contentFavoriteRequest($content_favorite_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\ContentFavorite',
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
     * Operation contentFavoriteAsync
     *
     * Get Favorite Content
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contentFavoriteAsync($content_favorite_id, $fields = null)
    {
        return $this->contentFavoriteAsyncWithHttpInfo($content_favorite_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contentFavoriteAsyncWithHttpInfo
     *
     * Get Favorite Content
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contentFavoriteAsyncWithHttpInfo($content_favorite_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentFavorite';
        $request = $this->contentFavoriteRequest($content_favorite_id, $fields);

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
     * Create request for operation 'contentFavorite'
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function contentFavoriteRequest($content_favorite_id, $fields = null)
    {
        // verify the required parameter 'content_favorite_id' is set
        if ($content_favorite_id === null || (is_array($content_favorite_id) && count($content_favorite_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_favorite_id when calling contentFavorite'
            );
        }

        $resourcePath = '/content_favorite/{content_favorite_id}';
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
        if ($content_favorite_id !== null) {
            $resourcePath = str_replace(
                '{' . 'content_favorite_id' . '}',
                ObjectSerializer::toPathValue($content_favorite_id),
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
     * Operation contentMetadata
     *
     * Get Content Metadata
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentMeta
     */
    public function contentMetadata($content_metadata_id, $fields = null)
    {
        list($response) = $this->contentMetadataWithHttpInfo($content_metadata_id, $fields);
        return $response;
    }

    /**
     * Operation contentMetadataWithHttpInfo
     *
     * Get Content Metadata
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentMeta, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentMetadataWithHttpInfo($content_metadata_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMeta';
        $request = $this->contentMetadataRequest($content_metadata_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\ContentMeta',
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
     * Operation contentMetadataAsync
     *
     * Get Content Metadata
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contentMetadataAsync($content_metadata_id, $fields = null)
    {
        return $this->contentMetadataAsyncWithHttpInfo($content_metadata_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contentMetadataAsyncWithHttpInfo
     *
     * Get Content Metadata
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contentMetadataAsyncWithHttpInfo($content_metadata_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMeta';
        $request = $this->contentMetadataRequest($content_metadata_id, $fields);

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
     * Create request for operation 'contentMetadata'
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function contentMetadataRequest($content_metadata_id, $fields = null)
    {
        // verify the required parameter 'content_metadata_id' is set
        if ($content_metadata_id === null || (is_array($content_metadata_id) && count($content_metadata_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_metadata_id when calling contentMetadata'
            );
        }

        $resourcePath = '/content_metadata/{content_metadata_id}';
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
        if ($content_metadata_id !== null) {
            $resourcePath = str_replace(
                '{' . 'content_metadata_id' . '}',
                ObjectSerializer::toPathValue($content_metadata_id),
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
     * Operation contentValidation
     *
     * Validate Content
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentValidation
     */
    public function contentValidation($fields = null)
    {
        list($response) = $this->contentValidationWithHttpInfo($fields);
        return $response;
    }

    /**
     * Operation contentValidationWithHttpInfo
     *
     * Validate Content
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentValidation, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentValidationWithHttpInfo($fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentValidation';
        $request = $this->contentValidationRequest($fields);

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
                        '\Funeralzone\LookerClient\Model\ContentValidation',
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
     * Operation contentValidationAsync
     *
     * Validate Content
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contentValidationAsync($fields = null)
    {
        return $this->contentValidationAsyncWithHttpInfo($fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contentValidationAsyncWithHttpInfo
     *
     * Validate Content
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contentValidationAsyncWithHttpInfo($fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentValidation';
        $request = $this->contentValidationRequest($fields);

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
     * Create request for operation 'contentValidation'
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function contentValidationRequest($fields = null)
    {

        $resourcePath = '/content_validation';
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
     * Operation createContentFavorite
     *
     * Create Favorite Content
     *
     * @param  \Funeralzone\LookerClient\Model\ContentFavorite $body Favorite Content (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentFavorite
     */
    public function createContentFavorite($body = null)
    {
        list($response) = $this->createContentFavoriteWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createContentFavoriteWithHttpInfo
     *
     * Create Favorite Content
     *
     * @param  \Funeralzone\LookerClient\Model\ContentFavorite $body Favorite Content (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentFavorite, HTTP status code, HTTP response headers (array of strings)
     */
    public function createContentFavoriteWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentFavorite';
        $request = $this->createContentFavoriteRequest($body);

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
                        '\Funeralzone\LookerClient\Model\ContentFavorite',
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
     * Operation createContentFavoriteAsync
     *
     * Create Favorite Content
     *
     * @param  \Funeralzone\LookerClient\Model\ContentFavorite $body Favorite Content (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createContentFavoriteAsync($body = null)
    {
        return $this->createContentFavoriteAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createContentFavoriteAsyncWithHttpInfo
     *
     * Create Favorite Content
     *
     * @param  \Funeralzone\LookerClient\Model\ContentFavorite $body Favorite Content (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createContentFavoriteAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentFavorite';
        $request = $this->createContentFavoriteRequest($body);

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
     * Create request for operation 'createContentFavorite'
     *
     * @param  \Funeralzone\LookerClient\Model\ContentFavorite $body Favorite Content (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createContentFavoriteRequest($body = null)
    {

        $resourcePath = '/content_favorite';
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
     * Operation createContentMetadataAccess
     *
     * Create Content Metadata Access
     *
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (optional)
     * @param  bool $send_boards_notification_email Optionally sends notification email when granting access to a board. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentMetaGroupUser
     */
    public function createContentMetadataAccess($body = null, $send_boards_notification_email = null)
    {
        list($response) = $this->createContentMetadataAccessWithHttpInfo($body, $send_boards_notification_email);
        return $response;
    }

    /**
     * Operation createContentMetadataAccessWithHttpInfo
     *
     * Create Content Metadata Access
     *
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (optional)
     * @param  bool $send_boards_notification_email Optionally sends notification email when granting access to a board. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentMetaGroupUser, HTTP status code, HTTP response headers (array of strings)
     */
    public function createContentMetadataAccessWithHttpInfo($body = null, $send_boards_notification_email = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMetaGroupUser';
        $request = $this->createContentMetadataAccessRequest($body, $send_boards_notification_email);

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
                        '\Funeralzone\LookerClient\Model\ContentMetaGroupUser',
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
     * Operation createContentMetadataAccessAsync
     *
     * Create Content Metadata Access
     *
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (optional)
     * @param  bool $send_boards_notification_email Optionally sends notification email when granting access to a board. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createContentMetadataAccessAsync($body = null, $send_boards_notification_email = null)
    {
        return $this->createContentMetadataAccessAsyncWithHttpInfo($body, $send_boards_notification_email)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createContentMetadataAccessAsyncWithHttpInfo
     *
     * Create Content Metadata Access
     *
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (optional)
     * @param  bool $send_boards_notification_email Optionally sends notification email when granting access to a board. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createContentMetadataAccessAsyncWithHttpInfo($body = null, $send_boards_notification_email = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMetaGroupUser';
        $request = $this->createContentMetadataAccessRequest($body, $send_boards_notification_email);

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
     * Create request for operation 'createContentMetadataAccess'
     *
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (optional)
     * @param  bool $send_boards_notification_email Optionally sends notification email when granting access to a board. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createContentMetadataAccessRequest($body = null, $send_boards_notification_email = null)
    {

        $resourcePath = '/content_metadata_access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($send_boards_notification_email !== null) {
            $queryParams['send_boards_notification_email'] = ObjectSerializer::toQueryValue($send_boards_notification_email);
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
     * Operation deleteContentFavorite
     *
     * Delete Favorite Content
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function deleteContentFavorite($content_favorite_id)
    {
        list($response) = $this->deleteContentFavoriteWithHttpInfo($content_favorite_id);
        return $response;
    }

    /**
     * Operation deleteContentFavoriteWithHttpInfo
     *
     * Delete Favorite Content
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteContentFavoriteWithHttpInfo($content_favorite_id)
    {
        $returnType = 'string';
        $request = $this->deleteContentFavoriteRequest($content_favorite_id);

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
     * Operation deleteContentFavoriteAsync
     *
     * Delete Favorite Content
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteContentFavoriteAsync($content_favorite_id)
    {
        return $this->deleteContentFavoriteAsyncWithHttpInfo($content_favorite_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteContentFavoriteAsyncWithHttpInfo
     *
     * Delete Favorite Content
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteContentFavoriteAsyncWithHttpInfo($content_favorite_id)
    {
        $returnType = 'string';
        $request = $this->deleteContentFavoriteRequest($content_favorite_id);

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
     * Create request for operation 'deleteContentFavorite'
     *
     * @param  int $content_favorite_id Id of favorite content (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteContentFavoriteRequest($content_favorite_id)
    {
        // verify the required parameter 'content_favorite_id' is set
        if ($content_favorite_id === null || (is_array($content_favorite_id) && count($content_favorite_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_favorite_id when calling deleteContentFavorite'
            );
        }

        $resourcePath = '/content_favorite/{content_favorite_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($content_favorite_id !== null) {
            $resourcePath = str_replace(
                '{' . 'content_favorite_id' . '}',
                ObjectSerializer::toPathValue($content_favorite_id),
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
     * Operation deleteContentMetadataAccess
     *
     * Delete Content Metadata Access
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function deleteContentMetadataAccess($content_metadata_access_id)
    {
        list($response) = $this->deleteContentMetadataAccessWithHttpInfo($content_metadata_access_id);
        return $response;
    }

    /**
     * Operation deleteContentMetadataAccessWithHttpInfo
     *
     * Delete Content Metadata Access
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteContentMetadataAccessWithHttpInfo($content_metadata_access_id)
    {
        $returnType = 'string';
        $request = $this->deleteContentMetadataAccessRequest($content_metadata_access_id);

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
     * Operation deleteContentMetadataAccessAsync
     *
     * Delete Content Metadata Access
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteContentMetadataAccessAsync($content_metadata_access_id)
    {
        return $this->deleteContentMetadataAccessAsyncWithHttpInfo($content_metadata_access_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteContentMetadataAccessAsyncWithHttpInfo
     *
     * Delete Content Metadata Access
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteContentMetadataAccessAsyncWithHttpInfo($content_metadata_access_id)
    {
        $returnType = 'string';
        $request = $this->deleteContentMetadataAccessRequest($content_metadata_access_id);

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
     * Create request for operation 'deleteContentMetadataAccess'
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteContentMetadataAccessRequest($content_metadata_access_id)
    {
        // verify the required parameter 'content_metadata_access_id' is set
        if ($content_metadata_access_id === null || (is_array($content_metadata_access_id) && count($content_metadata_access_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_metadata_access_id when calling deleteContentMetadataAccess'
            );
        }

        $resourcePath = '/content_metadata_access/{content_metadata_access_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($content_metadata_access_id !== null) {
            $resourcePath = str_replace(
                '{' . 'content_metadata_access_id' . '}',
                ObjectSerializer::toPathValue($content_metadata_access_id),
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
     * Operation searchContentFavorites
     *
     * Search Favorite Contents
     *
     * @param  int $id Match content favorite id(s) (optional)
     * @param  int $user_id Match user id(s) (optional)
     * @param  int $content_metadata_id Match content metadata id(s) (optional)
     * @param  int $dashboard_id Match dashboard id(s) (optional)
     * @param  int $look_id Match look id(s) (optional)
     * @param  int $limit Number of results to return. (used with offset) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentFavorite[]
     */
    public function searchContentFavorites($id = null, $user_id = null, $content_metadata_id = null, $dashboard_id = null, $look_id = null, $limit = null, $offset = null, $sorts = null, $fields = null, $filter_or = null)
    {
        list($response) = $this->searchContentFavoritesWithHttpInfo($id, $user_id, $content_metadata_id, $dashboard_id, $look_id, $limit, $offset, $sorts, $fields, $filter_or);
        return $response;
    }

    /**
     * Operation searchContentFavoritesWithHttpInfo
     *
     * Search Favorite Contents
     *
     * @param  int $id Match content favorite id(s) (optional)
     * @param  int $user_id Match user id(s) (optional)
     * @param  int $content_metadata_id Match content metadata id(s) (optional)
     * @param  int $dashboard_id Match dashboard id(s) (optional)
     * @param  int $look_id Match look id(s) (optional)
     * @param  int $limit Number of results to return. (used with offset) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentFavorite[], HTTP status code, HTTP response headers (array of strings)
     */
    public function searchContentFavoritesWithHttpInfo($id = null, $user_id = null, $content_metadata_id = null, $dashboard_id = null, $look_id = null, $limit = null, $offset = null, $sorts = null, $fields = null, $filter_or = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentFavorite[]';
        $request = $this->searchContentFavoritesRequest($id, $user_id, $content_metadata_id, $dashboard_id, $look_id, $limit, $offset, $sorts, $fields, $filter_or);

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
                        '\Funeralzone\LookerClient\Model\ContentFavorite[]',
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
     * Operation searchContentFavoritesAsync
     *
     * Search Favorite Contents
     *
     * @param  int $id Match content favorite id(s) (optional)
     * @param  int $user_id Match user id(s) (optional)
     * @param  int $content_metadata_id Match content metadata id(s) (optional)
     * @param  int $dashboard_id Match dashboard id(s) (optional)
     * @param  int $look_id Match look id(s) (optional)
     * @param  int $limit Number of results to return. (used with offset) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchContentFavoritesAsync($id = null, $user_id = null, $content_metadata_id = null, $dashboard_id = null, $look_id = null, $limit = null, $offset = null, $sorts = null, $fields = null, $filter_or = null)
    {
        return $this->searchContentFavoritesAsyncWithHttpInfo($id, $user_id, $content_metadata_id, $dashboard_id, $look_id, $limit, $offset, $sorts, $fields, $filter_or)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchContentFavoritesAsyncWithHttpInfo
     *
     * Search Favorite Contents
     *
     * @param  int $id Match content favorite id(s) (optional)
     * @param  int $user_id Match user id(s) (optional)
     * @param  int $content_metadata_id Match content metadata id(s) (optional)
     * @param  int $dashboard_id Match dashboard id(s) (optional)
     * @param  int $look_id Match look id(s) (optional)
     * @param  int $limit Number of results to return. (used with offset) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchContentFavoritesAsyncWithHttpInfo($id = null, $user_id = null, $content_metadata_id = null, $dashboard_id = null, $look_id = null, $limit = null, $offset = null, $sorts = null, $fields = null, $filter_or = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentFavorite[]';
        $request = $this->searchContentFavoritesRequest($id, $user_id, $content_metadata_id, $dashboard_id, $look_id, $limit, $offset, $sorts, $fields, $filter_or);

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
     * Create request for operation 'searchContentFavorites'
     *
     * @param  int $id Match content favorite id(s) (optional)
     * @param  int $user_id Match user id(s) (optional)
     * @param  int $content_metadata_id Match content metadata id(s) (optional)
     * @param  int $dashboard_id Match dashboard id(s) (optional)
     * @param  int $look_id Match look id(s) (optional)
     * @param  int $limit Number of results to return. (used with offset) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $fields Requested fields. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchContentFavoritesRequest($id = null, $user_id = null, $content_metadata_id = null, $dashboard_id = null, $look_id = null, $limit = null, $offset = null, $sorts = null, $fields = null, $filter_or = null)
    {

        $resourcePath = '/content_favorite/search';
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
        if ($user_id !== null) {
            $queryParams['user_id'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($content_metadata_id !== null) {
            $queryParams['content_metadata_id'] = ObjectSerializer::toQueryValue($content_metadata_id);
        }
        // query params
        if ($dashboard_id !== null) {
            $queryParams['dashboard_id'] = ObjectSerializer::toQueryValue($dashboard_id);
        }
        // query params
        if ($look_id !== null) {
            $queryParams['look_id'] = ObjectSerializer::toQueryValue($look_id);
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
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
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
     * Operation searchContentViews
     *
     * Search Content Views
     *
     * @param  int $view_count Match view count (optional)
     * @param  int $group_id Match Group Id (optional)
     * @param  string $look_id Match look_id (optional)
     * @param  string $dashboard_id Match dashboard_id (optional)
     * @param  int $content_metadata_id Match content metadata id (optional)
     * @param  string $start_of_week_date Match start of week date (optional)
     * @param  bool $all_time True if only all time view records should be returned (optional)
     * @param  int $user_id Match user id (optional)
     * @param  string $fields Requested fields (optional)
     * @param  int $limit Number of results to return. Use with &#x60;offset&#x60; to manage pagination of results (optional)
     * @param  int $offset Number of results to skip before returning data (optional)
     * @param  string $sorts Fields to sort by (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentView[]
     */
    public function searchContentViews($view_count = null, $group_id = null, $look_id = null, $dashboard_id = null, $content_metadata_id = null, $start_of_week_date = null, $all_time = null, $user_id = null, $fields = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {
        list($response) = $this->searchContentViewsWithHttpInfo($view_count, $group_id, $look_id, $dashboard_id, $content_metadata_id, $start_of_week_date, $all_time, $user_id, $fields, $limit, $offset, $sorts, $filter_or);
        return $response;
    }

    /**
     * Operation searchContentViewsWithHttpInfo
     *
     * Search Content Views
     *
     * @param  int $view_count Match view count (optional)
     * @param  int $group_id Match Group Id (optional)
     * @param  string $look_id Match look_id (optional)
     * @param  string $dashboard_id Match dashboard_id (optional)
     * @param  int $content_metadata_id Match content metadata id (optional)
     * @param  string $start_of_week_date Match start of week date (optional)
     * @param  bool $all_time True if only all time view records should be returned (optional)
     * @param  int $user_id Match user id (optional)
     * @param  string $fields Requested fields (optional)
     * @param  int $limit Number of results to return. Use with &#x60;offset&#x60; to manage pagination of results (optional)
     * @param  int $offset Number of results to skip before returning data (optional)
     * @param  string $sorts Fields to sort by (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentView[], HTTP status code, HTTP response headers (array of strings)
     */
    public function searchContentViewsWithHttpInfo($view_count = null, $group_id = null, $look_id = null, $dashboard_id = null, $content_metadata_id = null, $start_of_week_date = null, $all_time = null, $user_id = null, $fields = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentView[]';
        $request = $this->searchContentViewsRequest($view_count, $group_id, $look_id, $dashboard_id, $content_metadata_id, $start_of_week_date, $all_time, $user_id, $fields, $limit, $offset, $sorts, $filter_or);

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
                        '\Funeralzone\LookerClient\Model\ContentView[]',
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
     * Operation searchContentViewsAsync
     *
     * Search Content Views
     *
     * @param  int $view_count Match view count (optional)
     * @param  int $group_id Match Group Id (optional)
     * @param  string $look_id Match look_id (optional)
     * @param  string $dashboard_id Match dashboard_id (optional)
     * @param  int $content_metadata_id Match content metadata id (optional)
     * @param  string $start_of_week_date Match start of week date (optional)
     * @param  bool $all_time True if only all time view records should be returned (optional)
     * @param  int $user_id Match user id (optional)
     * @param  string $fields Requested fields (optional)
     * @param  int $limit Number of results to return. Use with &#x60;offset&#x60; to manage pagination of results (optional)
     * @param  int $offset Number of results to skip before returning data (optional)
     * @param  string $sorts Fields to sort by (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchContentViewsAsync($view_count = null, $group_id = null, $look_id = null, $dashboard_id = null, $content_metadata_id = null, $start_of_week_date = null, $all_time = null, $user_id = null, $fields = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {
        return $this->searchContentViewsAsyncWithHttpInfo($view_count, $group_id, $look_id, $dashboard_id, $content_metadata_id, $start_of_week_date, $all_time, $user_id, $fields, $limit, $offset, $sorts, $filter_or)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchContentViewsAsyncWithHttpInfo
     *
     * Search Content Views
     *
     * @param  int $view_count Match view count (optional)
     * @param  int $group_id Match Group Id (optional)
     * @param  string $look_id Match look_id (optional)
     * @param  string $dashboard_id Match dashboard_id (optional)
     * @param  int $content_metadata_id Match content metadata id (optional)
     * @param  string $start_of_week_date Match start of week date (optional)
     * @param  bool $all_time True if only all time view records should be returned (optional)
     * @param  int $user_id Match user id (optional)
     * @param  string $fields Requested fields (optional)
     * @param  int $limit Number of results to return. Use with &#x60;offset&#x60; to manage pagination of results (optional)
     * @param  int $offset Number of results to skip before returning data (optional)
     * @param  string $sorts Fields to sort by (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchContentViewsAsyncWithHttpInfo($view_count = null, $group_id = null, $look_id = null, $dashboard_id = null, $content_metadata_id = null, $start_of_week_date = null, $all_time = null, $user_id = null, $fields = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentView[]';
        $request = $this->searchContentViewsRequest($view_count, $group_id, $look_id, $dashboard_id, $content_metadata_id, $start_of_week_date, $all_time, $user_id, $fields, $limit, $offset, $sorts, $filter_or);

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
     * Create request for operation 'searchContentViews'
     *
     * @param  int $view_count Match view count (optional)
     * @param  int $group_id Match Group Id (optional)
     * @param  string $look_id Match look_id (optional)
     * @param  string $dashboard_id Match dashboard_id (optional)
     * @param  int $content_metadata_id Match content metadata id (optional)
     * @param  string $start_of_week_date Match start of week date (optional)
     * @param  bool $all_time True if only all time view records should be returned (optional)
     * @param  int $user_id Match user id (optional)
     * @param  string $fields Requested fields (optional)
     * @param  int $limit Number of results to return. Use with &#x60;offset&#x60; to manage pagination of results (optional)
     * @param  int $offset Number of results to skip before returning data (optional)
     * @param  string $sorts Fields to sort by (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchContentViewsRequest($view_count = null, $group_id = null, $look_id = null, $dashboard_id = null, $content_metadata_id = null, $start_of_week_date = null, $all_time = null, $user_id = null, $fields = null, $limit = null, $offset = null, $sorts = null, $filter_or = null)
    {

        $resourcePath = '/content_view/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($view_count !== null) {
            $queryParams['view_count'] = ObjectSerializer::toQueryValue($view_count);
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id);
        }
        // query params
        if ($look_id !== null) {
            $queryParams['look_id'] = ObjectSerializer::toQueryValue($look_id);
        }
        // query params
        if ($dashboard_id !== null) {
            $queryParams['dashboard_id'] = ObjectSerializer::toQueryValue($dashboard_id);
        }
        // query params
        if ($content_metadata_id !== null) {
            $queryParams['content_metadata_id'] = ObjectSerializer::toQueryValue($content_metadata_id);
        }
        // query params
        if ($start_of_week_date !== null) {
            $queryParams['start_of_week_date'] = ObjectSerializer::toQueryValue($start_of_week_date);
        }
        // query params
        if ($all_time !== null) {
            $queryParams['all_time'] = ObjectSerializer::toQueryValue($all_time);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
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
     * Operation updateContentMetadata
     *
     * Update Content Metadata
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMeta $body Content Metadata (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentMeta
     */
    public function updateContentMetadata($content_metadata_id, $body)
    {
        list($response) = $this->updateContentMetadataWithHttpInfo($content_metadata_id, $body);
        return $response;
    }

    /**
     * Operation updateContentMetadataWithHttpInfo
     *
     * Update Content Metadata
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMeta $body Content Metadata (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentMeta, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateContentMetadataWithHttpInfo($content_metadata_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMeta';
        $request = $this->updateContentMetadataRequest($content_metadata_id, $body);

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
                        '\Funeralzone\LookerClient\Model\ContentMeta',
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
     * Operation updateContentMetadataAsync
     *
     * Update Content Metadata
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMeta $body Content Metadata (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateContentMetadataAsync($content_metadata_id, $body)
    {
        return $this->updateContentMetadataAsyncWithHttpInfo($content_metadata_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateContentMetadataAsyncWithHttpInfo
     *
     * Update Content Metadata
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMeta $body Content Metadata (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateContentMetadataAsyncWithHttpInfo($content_metadata_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMeta';
        $request = $this->updateContentMetadataRequest($content_metadata_id, $body);

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
     * Create request for operation 'updateContentMetadata'
     *
     * @param  int $content_metadata_id Id of content metadata (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMeta $body Content Metadata (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateContentMetadataRequest($content_metadata_id, $body)
    {
        // verify the required parameter 'content_metadata_id' is set
        if ($content_metadata_id === null || (is_array($content_metadata_id) && count($content_metadata_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_metadata_id when calling updateContentMetadata'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateContentMetadata'
            );
        }

        $resourcePath = '/content_metadata/{content_metadata_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($content_metadata_id !== null) {
            $resourcePath = str_replace(
                '{' . 'content_metadata_id' . '}',
                ObjectSerializer::toPathValue($content_metadata_id),
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
     * Operation updateContentMetadataAccess
     *
     * Update Content Metadata Access
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\ContentMetaGroupUser
     */
    public function updateContentMetadataAccess($content_metadata_access_id, $body)
    {
        list($response) = $this->updateContentMetadataAccessWithHttpInfo($content_metadata_access_id, $body);
        return $response;
    }

    /**
     * Operation updateContentMetadataAccessWithHttpInfo
     *
     * Update Content Metadata Access
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\ContentMetaGroupUser, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateContentMetadataAccessWithHttpInfo($content_metadata_access_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMetaGroupUser';
        $request = $this->updateContentMetadataAccessRequest($content_metadata_access_id, $body);

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
                        '\Funeralzone\LookerClient\Model\ContentMetaGroupUser',
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
     * Operation updateContentMetadataAccessAsync
     *
     * Update Content Metadata Access
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateContentMetadataAccessAsync($content_metadata_access_id, $body)
    {
        return $this->updateContentMetadataAccessAsyncWithHttpInfo($content_metadata_access_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateContentMetadataAccessAsyncWithHttpInfo
     *
     * Update Content Metadata Access
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateContentMetadataAccessAsyncWithHttpInfo($content_metadata_access_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\ContentMetaGroupUser';
        $request = $this->updateContentMetadataAccessRequest($content_metadata_access_id, $body);

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
     * Create request for operation 'updateContentMetadataAccess'
     *
     * @param  int $content_metadata_access_id Id of content metadata access (required)
     * @param  \Funeralzone\LookerClient\Model\ContentMetaGroupUser $body Content Metadata Access (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateContentMetadataAccessRequest($content_metadata_access_id, $body)
    {
        // verify the required parameter 'content_metadata_access_id' is set
        if ($content_metadata_access_id === null || (is_array($content_metadata_access_id) && count($content_metadata_access_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_metadata_access_id when calling updateContentMetadataAccess'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateContentMetadataAccess'
            );
        }

        $resourcePath = '/content_metadata_access/{content_metadata_access_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($content_metadata_access_id !== null) {
            $resourcePath = str_replace(
                '{' . 'content_metadata_access_id' . '}',
                ObjectSerializer::toPathValue($content_metadata_access_id),
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
            'PUT',
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
