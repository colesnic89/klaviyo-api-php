<?php
/**
 * CatalogVariantCreateQueryAsSubResourceAttributes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2023-01-24
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoAPI\Model;

use \ArrayAccess;
use \KlaviyoAPI\ObjectSerializer;

/**
 * CatalogVariantCreateQueryAsSubResourceAttributes Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CatalogVariantCreateQueryAsSubResourceAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CatalogVariantCreateQueryAsSubResource_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'external_id' => 'string',
        'catalog_type' => 'string',
        'integration_type' => 'string',
        'title' => 'string',
        'description' => 'string',
        'sku' => 'string',
        'inventory_policy' => 'int',
        'inventory_quantity' => 'float',
        'price' => 'float',
        'url' => 'string',
        'image_full_url' => 'string',
        'image_thumbnail_url' => 'string',
        'images' => 'string[]',
        'custom_metadata' => 'object',
        'published' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'external_id' => null,
        'catalog_type' => null,
        'integration_type' => null,
        'title' => null,
        'description' => null,
        'sku' => null,
        'inventory_policy' => null,
        'inventory_quantity' => null,
        'price' => null,
        'url' => null,
        'image_full_url' => null,
        'image_thumbnail_url' => null,
        'images' => null,
        'custom_metadata' => null,
        'published' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'external_id' => 'external_id',
        'catalog_type' => 'catalog_type',
        'integration_type' => 'integration_type',
        'title' => 'title',
        'description' => 'description',
        'sku' => 'sku',
        'inventory_policy' => 'inventory_policy',
        'inventory_quantity' => 'inventory_quantity',
        'price' => 'price',
        'url' => 'url',
        'image_full_url' => 'image_full_url',
        'image_thumbnail_url' => 'image_thumbnail_url',
        'images' => 'images',
        'custom_metadata' => 'custom_metadata',
        'published' => 'published'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
        'catalog_type' => 'setCatalogType',
        'integration_type' => 'setIntegrationType',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'sku' => 'setSku',
        'inventory_policy' => 'setInventoryPolicy',
        'inventory_quantity' => 'setInventoryQuantity',
        'price' => 'setPrice',
        'url' => 'setUrl',
        'image_full_url' => 'setImageFullUrl',
        'image_thumbnail_url' => 'setImageThumbnailUrl',
        'images' => 'setImages',
        'custom_metadata' => 'setCustomMetadata',
        'published' => 'setPublished'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'catalog_type' => 'getCatalogType',
        'integration_type' => 'getIntegrationType',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'sku' => 'getSku',
        'inventory_policy' => 'getInventoryPolicy',
        'inventory_quantity' => 'getInventoryQuantity',
        'price' => 'getPrice',
        'url' => 'getUrl',
        'image_full_url' => 'getImageFullUrl',
        'image_thumbnail_url' => 'getImageThumbnailUrl',
        'images' => 'getImages',
        'custom_metadata' => 'getCustomMetadata',
        'published' => 'getPublished'
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
        return self::$openAPIModelName;
    }

    public const INTEGRATION_TYPE__CUSTOM = '$custom';
    public const INVENTORY_POLICY_0 = 0;
    public const INVENTORY_POLICY_1 = 1;
    public const INVENTORY_POLICY_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntegrationTypeAllowableValues()
    {
        return [
            self::INTEGRATION_TYPE__CUSTOM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInventoryPolicyAllowableValues()
    {
        return [
            self::INVENTORY_POLICY_0,
            self::INVENTORY_POLICY_1,
            self::INVENTORY_POLICY_2,
        ];
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
        $this->container['external_id'] = $data['external_id'] ?? null;
        $this->container['catalog_type'] = $data['catalog_type'] ?? '$default';
        $this->container['integration_type'] = $data['integration_type'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['inventory_policy'] = $data['inventory_policy'] ?? null;
        $this->container['inventory_quantity'] = $data['inventory_quantity'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['image_full_url'] = $data['image_full_url'] ?? null;
        $this->container['image_thumbnail_url'] = $data['image_thumbnail_url'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['custom_metadata'] = $data['custom_metadata'] ?? null;
        $this->container['published'] = $data['published'] ?? true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        $allowedValues = $this->getIntegrationTypeAllowableValues();
        if (!is_null($this->container['integration_type']) && !in_array($this->container['integration_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'integration_type', must be one of '%s'",
                $this->container['integration_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['inventory_policy'] === null) {
            $invalidProperties[] = "'inventory_policy' can't be null";
        }
        $allowedValues = $this->getInventoryPolicyAllowableValues();
        if (!is_null($this->container['inventory_policy']) && !in_array($this->container['inventory_policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'inventory_policy', must be one of '%s'",
                $this->container['inventory_policy'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['inventory_quantity'] === null) {
            $invalidProperties[] = "'inventory_quantity' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets catalog_type
     *
     * @return string|null
     */
    public function getCatalogType()
    {
        return $this->container['catalog_type'];
    }

    /**
     * Sets catalog_type
     *
     * @param string|null $catalog_type catalog_type
     *
     * @return self
     */
    public function setCatalogType($catalog_type)
    {
        $this->container['catalog_type'] = $catalog_type;

        return $this;
    }

    /**
     * Gets integration_type
     *
     * @return string|null
     */
    public function getIntegrationType()
    {
        return $this->container['integration_type'];
    }

    /**
     * Sets integration_type
     *
     * @param string|null $integration_type The integration type. Currently, this can only be set to $custom (and defaults to $custom if not included in the payload).
     *
     * @return self
     */
    public function setIntegrationType($integration_type)
    {
        $allowedValues = $this->getIntegrationTypeAllowableValues();
        if (!is_null($integration_type) && !in_array($integration_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'integration_type', must be one of '%s'",
                    $integration_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['integration_type'] = $integration_type;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets inventory_policy
     *
     * @return int
     */
    public function getInventoryPolicy()
    {
        return $this->container['inventory_policy'];
    }

    /**
     * Sets inventory_policy
     *
     * @param int $inventory_policy A field that controls product visibility in product feeds/blocks. This field has two options:     DENY (1): a product will not appear in dynamic product recommendation feeds and blocks if it is out of stock.     CONTINUE (2): a product can appear in dynamic product recommendation feeds and blocks regardless of inventory quantity.     UNKNOWN (0): the behavior will be the same as if it were set to 2 [Default]
     *
     * @return self
     */
    public function setInventoryPolicy($inventory_policy)
    {
        $allowedValues = $this->getInventoryPolicyAllowableValues();
        if (!in_array($inventory_policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'inventory_policy', must be one of '%s'",
                    $inventory_policy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inventory_policy'] = $inventory_policy;

        return $this;
    }

    /**
     * Gets inventory_quantity
     *
     * @return float
     */
    public function getInventoryQuantity()
    {
        return $this->container['inventory_quantity'];
    }

    /**
     * Sets inventory_quantity
     *
     * @param float $inventory_quantity inventory_quantity
     *
     * @return self
     */
    public function setInventoryQuantity($inventory_quantity)
    {
        $this->container['inventory_quantity'] = $inventory_quantity;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets image_full_url
     *
     * @return string|null
     */
    public function getImageFullUrl()
    {
        return $this->container['image_full_url'];
    }

    /**
     * Sets image_full_url
     *
     * @param string|null $image_full_url image_full_url
     *
     * @return self
     */
    public function setImageFullUrl($image_full_url)
    {
        $this->container['image_full_url'] = $image_full_url;

        return $this;
    }

    /**
     * Gets image_thumbnail_url
     *
     * @return string|null
     */
    public function getImageThumbnailUrl()
    {
        return $this->container['image_thumbnail_url'];
    }

    /**
     * Sets image_thumbnail_url
     *
     * @param string|null $image_thumbnail_url image_thumbnail_url
     *
     * @return self
     */
    public function setImageThumbnailUrl($image_thumbnail_url)
    {
        $this->container['image_thumbnail_url'] = $image_thumbnail_url;

        return $this;
    }

    /**
     * Gets images
     *
     * @return string[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets custom_metadata
     *
     * @return object|null
     */
    public function getCustomMetadata()
    {
        return $this->container['custom_metadata'];
    }

    /**
     * Sets custom_metadata
     *
     * @param object|null $custom_metadata custom_metadata
     *
     * @return self
     */
    public function setCustomMetadata($custom_metadata)
    {
        $this->container['custom_metadata'] = $custom_metadata;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published published
     *
     * @return self
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


