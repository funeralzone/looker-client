<?php
/**
 * FolderApi
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
 * FolderApi Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FolderApi
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
     * Operation allFolders
     *
     * Get All Folders
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Folder[]
     */
    public function allFolders($fields = null)
    {
        list($response) = $this->allFoldersWithHttpInfo($fields);
        return $response;
    }

    /**
     * Operation allFoldersWithHttpInfo
     *
     * Get All Folders
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Folder[], HTTP status code, HTTP response headers (array of strings)
     */
    public function allFoldersWithHttpInfo($fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder[]';
        $request = $this->allFoldersRequest($fields);

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
                        '\Funeralzone\LookerClient\Model\Folder[]',
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
     * Operation allFoldersAsync
     *
     * Get All Folders
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allFoldersAsync($fields = null)
    {
        return $this->allFoldersAsyncWithHttpInfo($fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation allFoldersAsyncWithHttpInfo
     *
     * Get All Folders
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allFoldersAsyncWithHttpInfo($fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder[]';
        $request = $this->allFoldersRequest($fields);

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
     * Create request for operation 'allFolders'
     *
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function allFoldersRequest($fields = null)
    {

        $resourcePath = '/folders';
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
     * Operation createFolder
     *
     * Create Folder
     *
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Folder
     */
    public function createFolder($body = null)
    {
        list($response) = $this->createFolderWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createFolderWithHttpInfo
     *
     * Create Folder
     *
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Folder, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFolderWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder';
        $request = $this->createFolderRequest($body);

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
                        '\Funeralzone\LookerClient\Model\Folder',
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
     * Operation createFolderAsync
     *
     * Create Folder
     *
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFolderAsync($body = null)
    {
        return $this->createFolderAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFolderAsyncWithHttpInfo
     *
     * Create Folder
     *
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFolderAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder';
        $request = $this->createFolderRequest($body);

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
     * Create request for operation 'createFolder'
     *
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createFolderRequest($body = null)
    {

        $resourcePath = '/folders';
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
     * Operation deleteFolder
     *
     * Delete Folder
     *
     * @param  string $folder_id Id of folder (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function deleteFolder($folder_id)
    {
        list($response) = $this->deleteFolderWithHttpInfo($folder_id);
        return $response;
    }

    /**
     * Operation deleteFolderWithHttpInfo
     *
     * Delete Folder
     *
     * @param  string $folder_id Id of folder (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFolderWithHttpInfo($folder_id)
    {
        $returnType = 'string';
        $request = $this->deleteFolderRequest($folder_id);

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
     * Operation deleteFolderAsync
     *
     * Delete Folder
     *
     * @param  string $folder_id Id of folder (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFolderAsync($folder_id)
    {
        return $this->deleteFolderAsyncWithHttpInfo($folder_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteFolderAsyncWithHttpInfo
     *
     * Delete Folder
     *
     * @param  string $folder_id Id of folder (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFolderAsyncWithHttpInfo($folder_id)
    {
        $returnType = 'string';
        $request = $this->deleteFolderRequest($folder_id);

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
     * Create request for operation 'deleteFolder'
     *
     * @param  string $folder_id Id of folder (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteFolderRequest($folder_id)
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_id when calling deleteFolder'
            );
        }

        $resourcePath = '/folders/{folder_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                '{' . 'folder_id' . '}',
                ObjectSerializer::toPathValue($folder_id),
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
     * Operation folder
     *
     * Get Folder
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Folder
     */
    public function folder($folder_id, $fields = null)
    {
        list($response) = $this->folderWithHttpInfo($folder_id, $fields);
        return $response;
    }

    /**
     * Operation folderWithHttpInfo
     *
     * Get Folder
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Folder, HTTP status code, HTTP response headers (array of strings)
     */
    public function folderWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder';
        $request = $this->folderRequest($folder_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\Folder',
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
     * Operation folderAsync
     *
     * Get Folder
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderAsync($folder_id, $fields = null)
    {
        return $this->folderAsyncWithHttpInfo($folder_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation folderAsyncWithHttpInfo
     *
     * Get Folder
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderAsyncWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder';
        $request = $this->folderRequest($folder_id, $fields);

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
     * Create request for operation 'folder'
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function folderRequest($folder_id, $fields = null)
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_id when calling folder'
            );
        }

        $resourcePath = '/folders/{folder_id}';
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
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                '{' . 'folder_id' . '}',
                ObjectSerializer::toPathValue($folder_id),
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
     * Operation folderAncestors
     *
     * Get Folder Ancestors
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Folder[]
     */
    public function folderAncestors($folder_id, $fields = null)
    {
        list($response) = $this->folderAncestorsWithHttpInfo($folder_id, $fields);
        return $response;
    }

    /**
     * Operation folderAncestorsWithHttpInfo
     *
     * Get Folder Ancestors
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Folder[], HTTP status code, HTTP response headers (array of strings)
     */
    public function folderAncestorsWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder[]';
        $request = $this->folderAncestorsRequest($folder_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\Folder[]',
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
     * Operation folderAncestorsAsync
     *
     * Get Folder Ancestors
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderAncestorsAsync($folder_id, $fields = null)
    {
        return $this->folderAncestorsAsyncWithHttpInfo($folder_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation folderAncestorsAsyncWithHttpInfo
     *
     * Get Folder Ancestors
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderAncestorsAsyncWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder[]';
        $request = $this->folderAncestorsRequest($folder_id, $fields);

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
     * Create request for operation 'folderAncestors'
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function folderAncestorsRequest($folder_id, $fields = null)
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_id when calling folderAncestors'
            );
        }

        $resourcePath = '/folders/{folder_id}/ancestors';
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
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                '{' . 'folder_id' . '}',
                ObjectSerializer::toPathValue($folder_id),
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
     * Operation folderChildren
     *
     * Get Folder Children
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Space[]
     */
    public function folderChildren($folder_id, $fields = null, $page = null, $per_page = null, $sorts = null)
    {
        list($response) = $this->folderChildrenWithHttpInfo($folder_id, $fields, $page, $per_page, $sorts);
        return $response;
    }

    /**
     * Operation folderChildrenWithHttpInfo
     *
     * Get Folder Children
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Space[], HTTP status code, HTTP response headers (array of strings)
     */
    public function folderChildrenWithHttpInfo($folder_id, $fields = null, $page = null, $per_page = null, $sorts = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Space[]';
        $request = $this->folderChildrenRequest($folder_id, $fields, $page, $per_page, $sorts);

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
                        '\Funeralzone\LookerClient\Model\Space[]',
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
     * Operation folderChildrenAsync
     *
     * Get Folder Children
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderChildrenAsync($folder_id, $fields = null, $page = null, $per_page = null, $sorts = null)
    {
        return $this->folderChildrenAsyncWithHttpInfo($folder_id, $fields, $page, $per_page, $sorts)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation folderChildrenAsyncWithHttpInfo
     *
     * Get Folder Children
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderChildrenAsyncWithHttpInfo($folder_id, $fields = null, $page = null, $per_page = null, $sorts = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Space[]';
        $request = $this->folderChildrenRequest($folder_id, $fields, $page, $per_page, $sorts);

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
     * Create request for operation 'folderChildren'
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function folderChildrenRequest($folder_id, $fields = null, $page = null, $per_page = null, $sorts = null)
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_id when calling folderChildren'
            );
        }

        $resourcePath = '/folders/{folder_id}/children';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
        if ($sorts !== null) {
            $queryParams['sorts'] = ObjectSerializer::toQueryValue($sorts);
        }

        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                '{' . 'folder_id' . '}',
                ObjectSerializer::toPathValue($folder_id),
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
     * Operation folderChildrenSearch
     *
     * Search Folder Children
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match folder name. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Folder[]
     */
    public function folderChildrenSearch($folder_id, $fields = null, $sorts = null, $name = null)
    {
        list($response) = $this->folderChildrenSearchWithHttpInfo($folder_id, $fields, $sorts, $name);
        return $response;
    }

    /**
     * Operation folderChildrenSearchWithHttpInfo
     *
     * Search Folder Children
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match folder name. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Folder[], HTTP status code, HTTP response headers (array of strings)
     */
    public function folderChildrenSearchWithHttpInfo($folder_id, $fields = null, $sorts = null, $name = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder[]';
        $request = $this->folderChildrenSearchRequest($folder_id, $fields, $sorts, $name);

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
                        '\Funeralzone\LookerClient\Model\Folder[]',
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
     * Operation folderChildrenSearchAsync
     *
     * Search Folder Children
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match folder name. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderChildrenSearchAsync($folder_id, $fields = null, $sorts = null, $name = null)
    {
        return $this->folderChildrenSearchAsyncWithHttpInfo($folder_id, $fields, $sorts, $name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation folderChildrenSearchAsyncWithHttpInfo
     *
     * Search Folder Children
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match folder name. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderChildrenSearchAsyncWithHttpInfo($folder_id, $fields = null, $sorts = null, $name = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder[]';
        $request = $this->folderChildrenSearchRequest($folder_id, $fields, $sorts, $name);

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
     * Create request for operation 'folderChildrenSearch'
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match folder name. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function folderChildrenSearchRequest($folder_id, $fields = null, $sorts = null, $name = null)
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_id when calling folderChildrenSearch'
            );
        }

        $resourcePath = '/folders/{folder_id}/children/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($sorts !== null) {
            $queryParams['sorts'] = ObjectSerializer::toQueryValue($sorts);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }

        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                '{' . 'folder_id' . '}',
                ObjectSerializer::toPathValue($folder_id),
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
     * Operation folderDashboards
     *
     * Get Folder Dashboards
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Dashboard[]
     */
    public function folderDashboards($folder_id, $fields = null)
    {
        list($response) = $this->folderDashboardsWithHttpInfo($folder_id, $fields);
        return $response;
    }

    /**
     * Operation folderDashboardsWithHttpInfo
     *
     * Get Folder Dashboards
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Dashboard[], HTTP status code, HTTP response headers (array of strings)
     */
    public function folderDashboardsWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard[]';
        $request = $this->folderDashboardsRequest($folder_id, $fields);

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
     * Operation folderDashboardsAsync
     *
     * Get Folder Dashboards
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderDashboardsAsync($folder_id, $fields = null)
    {
        return $this->folderDashboardsAsyncWithHttpInfo($folder_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation folderDashboardsAsyncWithHttpInfo
     *
     * Get Folder Dashboards
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderDashboardsAsyncWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Dashboard[]';
        $request = $this->folderDashboardsRequest($folder_id, $fields);

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
     * Create request for operation 'folderDashboards'
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function folderDashboardsRequest($folder_id, $fields = null)
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_id when calling folderDashboards'
            );
        }

        $resourcePath = '/folders/{folder_id}/dashboards';
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
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                '{' . 'folder_id' . '}',
                ObjectSerializer::toPathValue($folder_id),
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
     * Operation folderLooks
     *
     * Get Folder Looks
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\LookWithQuery[]
     */
    public function folderLooks($folder_id, $fields = null)
    {
        list($response) = $this->folderLooksWithHttpInfo($folder_id, $fields);
        return $response;
    }

    /**
     * Operation folderLooksWithHttpInfo
     *
     * Get Folder Looks
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\LookWithQuery[], HTTP status code, HTTP response headers (array of strings)
     */
    public function folderLooksWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\LookWithQuery[]';
        $request = $this->folderLooksRequest($folder_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\LookWithQuery[]',
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
     * Operation folderLooksAsync
     *
     * Get Folder Looks
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderLooksAsync($folder_id, $fields = null)
    {
        return $this->folderLooksAsyncWithHttpInfo($folder_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation folderLooksAsyncWithHttpInfo
     *
     * Get Folder Looks
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderLooksAsyncWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\LookWithQuery[]';
        $request = $this->folderLooksRequest($folder_id, $fields);

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
     * Create request for operation 'folderLooks'
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function folderLooksRequest($folder_id, $fields = null)
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_id when calling folderLooks'
            );
        }

        $resourcePath = '/folders/{folder_id}/looks';
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
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                '{' . 'folder_id' . '}',
                ObjectSerializer::toPathValue($folder_id),
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
     * Operation folderParent
     *
     * Get Folder Parent
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Folder
     */
    public function folderParent($folder_id, $fields = null)
    {
        list($response) = $this->folderParentWithHttpInfo($folder_id, $fields);
        return $response;
    }

    /**
     * Operation folderParentWithHttpInfo
     *
     * Get Folder Parent
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Folder, HTTP status code, HTTP response headers (array of strings)
     */
    public function folderParentWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder';
        $request = $this->folderParentRequest($folder_id, $fields);

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
                        '\Funeralzone\LookerClient\Model\Folder',
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
     * Operation folderParentAsync
     *
     * Get Folder Parent
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderParentAsync($folder_id, $fields = null)
    {
        return $this->folderParentAsyncWithHttpInfo($folder_id, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation folderParentAsyncWithHttpInfo
     *
     * Get Folder Parent
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function folderParentAsyncWithHttpInfo($folder_id, $fields = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder';
        $request = $this->folderParentRequest($folder_id, $fields);

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
     * Create request for operation 'folderParent'
     *
     * @param  string $folder_id Id of folder (required)
     * @param  string $fields Requested fields. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function folderParentRequest($folder_id, $fields = null)
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_id when calling folderParent'
            );
        }

        $resourcePath = '/folders/{folder_id}/parent';
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
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                '{' . 'folder_id' . '}',
                ObjectSerializer::toPathValue($folder_id),
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
     * Operation searchFolders
     *
     * Search Folders
     *
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match Space title. (optional)
     * @param  int $id Match Space id (optional)
     * @param  string $parent_id Filter on a children of a particular folder. (optional)
     * @param  string $creator_id Filter on folder created by a particular user. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Folder[]
     */
    public function searchFolders($fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $name = null, $id = null, $parent_id = null, $creator_id = null, $filter_or = null)
    {
        list($response) = $this->searchFoldersWithHttpInfo($fields, $page, $per_page, $limit, $offset, $sorts, $name, $id, $parent_id, $creator_id, $filter_or);
        return $response;
    }

    /**
     * Operation searchFoldersWithHttpInfo
     *
     * Search Folders
     *
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match Space title. (optional)
     * @param  int $id Match Space id (optional)
     * @param  string $parent_id Filter on a children of a particular folder. (optional)
     * @param  string $creator_id Filter on folder created by a particular user. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Folder[], HTTP status code, HTTP response headers (array of strings)
     */
    public function searchFoldersWithHttpInfo($fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $name = null, $id = null, $parent_id = null, $creator_id = null, $filter_or = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder[]';
        $request = $this->searchFoldersRequest($fields, $page, $per_page, $limit, $offset, $sorts, $name, $id, $parent_id, $creator_id, $filter_or);

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
                        '\Funeralzone\LookerClient\Model\Folder[]',
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
     * Operation searchFoldersAsync
     *
     * Search Folders
     *
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match Space title. (optional)
     * @param  int $id Match Space id (optional)
     * @param  string $parent_id Filter on a children of a particular folder. (optional)
     * @param  string $creator_id Filter on folder created by a particular user. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchFoldersAsync($fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $name = null, $id = null, $parent_id = null, $creator_id = null, $filter_or = null)
    {
        return $this->searchFoldersAsyncWithHttpInfo($fields, $page, $per_page, $limit, $offset, $sorts, $name, $id, $parent_id, $creator_id, $filter_or)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchFoldersAsyncWithHttpInfo
     *
     * Search Folders
     *
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match Space title. (optional)
     * @param  int $id Match Space id (optional)
     * @param  string $parent_id Filter on a children of a particular folder. (optional)
     * @param  string $creator_id Filter on folder created by a particular user. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchFoldersAsyncWithHttpInfo($fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $name = null, $id = null, $parent_id = null, $creator_id = null, $filter_or = null)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder[]';
        $request = $this->searchFoldersRequest($fields, $page, $per_page, $limit, $offset, $sorts, $name, $id, $parent_id, $creator_id, $filter_or);

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
     * Create request for operation 'searchFolders'
     *
     * @param  string $fields Requested fields. (optional)
     * @param  int $page Requested page. (optional)
     * @param  int $per_page Results per page. (optional)
     * @param  int $limit Number of results to return. (used with offset and takes priority over page and per_page) (optional)
     * @param  int $offset Number of results to skip before returning any. (used with limit and takes priority over page and per_page) (optional)
     * @param  string $sorts Fields to sort by. (optional)
     * @param  string $name Match Space title. (optional)
     * @param  int $id Match Space id (optional)
     * @param  string $parent_id Filter on a children of a particular folder. (optional)
     * @param  string $creator_id Filter on folder created by a particular user. (optional)
     * @param  bool $filter_or Combine given search criteria in a boolean OR expression (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchFoldersRequest($fields = null, $page = null, $per_page = null, $limit = null, $offset = null, $sorts = null, $name = null, $id = null, $parent_id = null, $creator_id = null, $filter_or = null)
    {

        $resourcePath = '/folders/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($parent_id !== null) {
            $queryParams['parent_id'] = ObjectSerializer::toQueryValue($parent_id);
        }
        // query params
        if ($creator_id !== null) {
            $queryParams['creator_id'] = ObjectSerializer::toQueryValue($creator_id);
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
     * Operation updateFolder
     *
     * Update Folder
     *
     * @param  string $folder_id Id of folder (required)
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Funeralzone\LookerClient\Model\Folder
     */
    public function updateFolder($folder_id, $body)
    {
        list($response) = $this->updateFolderWithHttpInfo($folder_id, $body);
        return $response;
    }

    /**
     * Operation updateFolderWithHttpInfo
     *
     * Update Folder
     *
     * @param  string $folder_id Id of folder (required)
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (required)
     *
     * @throws \Funeralzone\LookerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Funeralzone\LookerClient\Model\Folder, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateFolderWithHttpInfo($folder_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder';
        $request = $this->updateFolderRequest($folder_id, $body);

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
                        '\Funeralzone\LookerClient\Model\Folder',
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
     * Operation updateFolderAsync
     *
     * Update Folder
     *
     * @param  string $folder_id Id of folder (required)
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFolderAsync($folder_id, $body)
    {
        return $this->updateFolderAsyncWithHttpInfo($folder_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateFolderAsyncWithHttpInfo
     *
     * Update Folder
     *
     * @param  string $folder_id Id of folder (required)
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFolderAsyncWithHttpInfo($folder_id, $body)
    {
        $returnType = '\Funeralzone\LookerClient\Model\Folder';
        $request = $this->updateFolderRequest($folder_id, $body);

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
     * Create request for operation 'updateFolder'
     *
     * @param  string $folder_id Id of folder (required)
     * @param  \Funeralzone\LookerClient\Model\Folder $body Folder (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateFolderRequest($folder_id, $body)
    {
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null || (is_array($folder_id) && count($folder_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $folder_id when calling updateFolder'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateFolder'
            );
        }

        $resourcePath = '/folders/{folder_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                '{' . 'folder_id' . '}',
                ObjectSerializer::toPathValue($folder_id),
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
