<?php
/**
 * ThemeSettings
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
 * ThemeSettings Class Doc Comment
 *
 * @category Class
 * @package  Funeralzone\LookerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThemeSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ThemeSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'background_color' => 'string',
        'base_font_size' => 'string',
        'color_collection_id' => 'string',
        'font_color' => 'string',
        'font_family' => 'string',
        'font_source' => 'string',
        'info_button_color' => 'string',
        'primary_button_color' => 'string',
        'show_filters_bar' => 'bool',
        'show_title' => 'bool',
        'text_tile_text_color' => 'string',
        'tile_background_color' => 'string',
        'tile_text_color' => 'string',
        'title_color' => 'string',
        'warn_button_color' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'background_color' => null,
        'base_font_size' => null,
        'color_collection_id' => null,
        'font_color' => null,
        'font_family' => null,
        'font_source' => null,
        'info_button_color' => null,
        'primary_button_color' => null,
        'show_filters_bar' => null,
        'show_title' => null,
        'text_tile_text_color' => null,
        'tile_background_color' => null,
        'tile_text_color' => null,
        'title_color' => null,
        'warn_button_color' => null
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
        'background_color' => 'background_color',
        'base_font_size' => 'base_font_size',
        'color_collection_id' => 'color_collection_id',
        'font_color' => 'font_color',
        'font_family' => 'font_family',
        'font_source' => 'font_source',
        'info_button_color' => 'info_button_color',
        'primary_button_color' => 'primary_button_color',
        'show_filters_bar' => 'show_filters_bar',
        'show_title' => 'show_title',
        'text_tile_text_color' => 'text_tile_text_color',
        'tile_background_color' => 'tile_background_color',
        'tile_text_color' => 'tile_text_color',
        'title_color' => 'title_color',
        'warn_button_color' => 'warn_button_color'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background_color' => 'setBackgroundColor',
        'base_font_size' => 'setBaseFontSize',
        'color_collection_id' => 'setColorCollectionId',
        'font_color' => 'setFontColor',
        'font_family' => 'setFontFamily',
        'font_source' => 'setFontSource',
        'info_button_color' => 'setInfoButtonColor',
        'primary_button_color' => 'setPrimaryButtonColor',
        'show_filters_bar' => 'setShowFiltersBar',
        'show_title' => 'setShowTitle',
        'text_tile_text_color' => 'setTextTileTextColor',
        'tile_background_color' => 'setTileBackgroundColor',
        'tile_text_color' => 'setTileTextColor',
        'title_color' => 'setTitleColor',
        'warn_button_color' => 'setWarnButtonColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background_color' => 'getBackgroundColor',
        'base_font_size' => 'getBaseFontSize',
        'color_collection_id' => 'getColorCollectionId',
        'font_color' => 'getFontColor',
        'font_family' => 'getFontFamily',
        'font_source' => 'getFontSource',
        'info_button_color' => 'getInfoButtonColor',
        'primary_button_color' => 'getPrimaryButtonColor',
        'show_filters_bar' => 'getShowFiltersBar',
        'show_title' => 'getShowTitle',
        'text_tile_text_color' => 'getTextTileTextColor',
        'tile_background_color' => 'getTileBackgroundColor',
        'tile_text_color' => 'getTileTextColor',
        'title_color' => 'getTitleColor',
        'warn_button_color' => 'getWarnButtonColor'
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
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['base_font_size'] = isset($data['base_font_size']) ? $data['base_font_size'] : null;
        $this->container['color_collection_id'] = isset($data['color_collection_id']) ? $data['color_collection_id'] : null;
        $this->container['font_color'] = isset($data['font_color']) ? $data['font_color'] : null;
        $this->container['font_family'] = isset($data['font_family']) ? $data['font_family'] : null;
        $this->container['font_source'] = isset($data['font_source']) ? $data['font_source'] : null;
        $this->container['info_button_color'] = isset($data['info_button_color']) ? $data['info_button_color'] : null;
        $this->container['primary_button_color'] = isset($data['primary_button_color']) ? $data['primary_button_color'] : null;
        $this->container['show_filters_bar'] = isset($data['show_filters_bar']) ? $data['show_filters_bar'] : null;
        $this->container['show_title'] = isset($data['show_title']) ? $data['show_title'] : null;
        $this->container['text_tile_text_color'] = isset($data['text_tile_text_color']) ? $data['text_tile_text_color'] : null;
        $this->container['tile_background_color'] = isset($data['tile_background_color']) ? $data['tile_background_color'] : null;
        $this->container['tile_text_color'] = isset($data['tile_text_color']) ? $data['tile_text_color'] : null;
        $this->container['title_color'] = isset($data['title_color']) ? $data['title_color'] : null;
        $this->container['warn_button_color'] = isset($data['warn_button_color']) ? $data['warn_button_color'] : null;
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
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color Default background color
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets base_font_size
     *
     * @return string
     */
    public function getBaseFontSize()
    {
        return $this->container['base_font_size'];
    }

    /**
     * Sets base_font_size
     *
     * @param string $base_font_size Base font size for scaling fonts
     *
     * @return $this
     */
    public function setBaseFontSize($base_font_size)
    {
        $this->container['base_font_size'] = $base_font_size;

        return $this;
    }

    /**
     * Gets color_collection_id
     *
     * @return string
     */
    public function getColorCollectionId()
    {
        return $this->container['color_collection_id'];
    }

    /**
     * Sets color_collection_id
     *
     * @param string $color_collection_id Optional. ID of color collection to use with the theme. Use an empty string for none.
     *
     * @return $this
     */
    public function setColorCollectionId($color_collection_id)
    {
        $this->container['color_collection_id'] = $color_collection_id;

        return $this;
    }

    /**
     * Gets font_color
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->container['font_color'];
    }

    /**
     * Sets font_color
     *
     * @param string $font_color Default font color
     *
     * @return $this
     */
    public function setFontColor($font_color)
    {
        $this->container['font_color'] = $font_color;

        return $this;
    }

    /**
     * Gets font_family
     *
     * @return string
     */
    public function getFontFamily()
    {
        return $this->container['font_family'];
    }

    /**
     * Sets font_family
     *
     * @param string $font_family Primary font family
     *
     * @return $this
     */
    public function setFontFamily($font_family)
    {
        $this->container['font_family'] = $font_family;

        return $this;
    }

    /**
     * Gets font_source
     *
     * @return string
     */
    public function getFontSource()
    {
        return $this->container['font_source'];
    }

    /**
     * Sets font_source
     *
     * @param string $font_source Source specification for font
     *
     * @return $this
     */
    public function setFontSource($font_source)
    {
        $this->container['font_source'] = $font_source;

        return $this;
    }

    /**
     * Gets info_button_color
     *
     * @return string
     */
    public function getInfoButtonColor()
    {
        return $this->container['info_button_color'];
    }

    /**
     * Sets info_button_color
     *
     * @param string $info_button_color Info button color
     *
     * @return $this
     */
    public function setInfoButtonColor($info_button_color)
    {
        $this->container['info_button_color'] = $info_button_color;

        return $this;
    }

    /**
     * Gets primary_button_color
     *
     * @return string
     */
    public function getPrimaryButtonColor()
    {
        return $this->container['primary_button_color'];
    }

    /**
     * Sets primary_button_color
     *
     * @param string $primary_button_color Primary button color
     *
     * @return $this
     */
    public function setPrimaryButtonColor($primary_button_color)
    {
        $this->container['primary_button_color'] = $primary_button_color;

        return $this;
    }

    /**
     * Gets show_filters_bar
     *
     * @return bool
     */
    public function getShowFiltersBar()
    {
        return $this->container['show_filters_bar'];
    }

    /**
     * Sets show_filters_bar
     *
     * @param bool $show_filters_bar Toggle to show filters. Defaults to true.
     *
     * @return $this
     */
    public function setShowFiltersBar($show_filters_bar)
    {
        $this->container['show_filters_bar'] = $show_filters_bar;

        return $this;
    }

    /**
     * Gets show_title
     *
     * @return bool
     */
    public function getShowTitle()
    {
        return $this->container['show_title'];
    }

    /**
     * Sets show_title
     *
     * @param bool $show_title Toggle to show the title. Defaults to true.
     *
     * @return $this
     */
    public function setShowTitle($show_title)
    {
        $this->container['show_title'] = $show_title;

        return $this;
    }

    /**
     * Gets text_tile_text_color
     *
     * @return string
     */
    public function getTextTileTextColor()
    {
        return $this->container['text_tile_text_color'];
    }

    /**
     * Sets text_tile_text_color
     *
     * @param string $text_tile_text_color Text color for text tiles
     *
     * @return $this
     */
    public function setTextTileTextColor($text_tile_text_color)
    {
        $this->container['text_tile_text_color'] = $text_tile_text_color;

        return $this;
    }

    /**
     * Gets tile_background_color
     *
     * @return string
     */
    public function getTileBackgroundColor()
    {
        return $this->container['tile_background_color'];
    }

    /**
     * Sets tile_background_color
     *
     * @param string $tile_background_color Background color for tiles
     *
     * @return $this
     */
    public function setTileBackgroundColor($tile_background_color)
    {
        $this->container['tile_background_color'] = $tile_background_color;

        return $this;
    }

    /**
     * Gets tile_text_color
     *
     * @return string
     */
    public function getTileTextColor()
    {
        return $this->container['tile_text_color'];
    }

    /**
     * Sets tile_text_color
     *
     * @param string $tile_text_color Text color for tiles
     *
     * @return $this
     */
    public function setTileTextColor($tile_text_color)
    {
        $this->container['tile_text_color'] = $tile_text_color;

        return $this;
    }

    /**
     * Gets title_color
     *
     * @return string
     */
    public function getTitleColor()
    {
        return $this->container['title_color'];
    }

    /**
     * Sets title_color
     *
     * @param string $title_color Color for titles
     *
     * @return $this
     */
    public function setTitleColor($title_color)
    {
        $this->container['title_color'] = $title_color;

        return $this;
    }

    /**
     * Gets warn_button_color
     *
     * @return string
     */
    public function getWarnButtonColor()
    {
        return $this->container['warn_button_color'];
    }

    /**
     * Sets warn_button_color
     *
     * @param string $warn_button_color Warning button color
     *
     * @return $this
     */
    public function setWarnButtonColor($warn_button_color)
    {
        $this->container['warn_button_color'] = $warn_button_color;

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


