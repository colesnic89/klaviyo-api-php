<?php
/**
 * ContentSubObject
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
 * ContentSubObject Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContentSubObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentSubObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subject' => 'string',
        'preview_text' => 'string',
        'from_email' => 'string',
        'from_label' => 'string',
        'template_id' => 'string',
        'template_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subject' => null,
        'preview_text' => null,
        'from_email' => null,
        'from_label' => null,
        'template_id' => null,
        'template_name' => null
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
        'subject' => 'subject',
        'preview_text' => 'preview_text',
        'from_email' => 'from_email',
        'from_label' => 'from_label',
        'template_id' => 'template_id',
        'template_name' => 'template_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
        'preview_text' => 'setPreviewText',
        'from_email' => 'setFromEmail',
        'from_label' => 'setFromLabel',
        'template_id' => 'setTemplateId',
        'template_name' => 'setTemplateName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
        'preview_text' => 'getPreviewText',
        'from_email' => 'getFromEmail',
        'from_label' => 'getFromLabel',
        'template_id' => 'getTemplateId',
        'template_name' => 'getTemplateName'
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
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['preview_text'] = $data['preview_text'] ?? null;
        $this->container['from_email'] = $data['from_email'] ?? null;
        $this->container['from_label'] = $data['from_label'] ?? null;
        $this->container['template_id'] = $data['template_id'] ?? null;
        $this->container['template_name'] = $data['template_name'] ?? null;
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
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject The subject of the message
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets preview_text
     *
     * @return string|null
     */
    public function getPreviewText()
    {
        return $this->container['preview_text'];
    }

    /**
     * Sets preview_text
     *
     * @param string|null $preview_text Preview text associated with the message
     *
     * @return self
     */
    public function setPreviewText($preview_text)
    {
        $this->container['preview_text'] = $preview_text;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string|null $from_email The email the message should be sent from
     *
     * @return self
     */
    public function setFromEmail($from_email)
    {
        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets from_label
     *
     * @return string|null
     */
    public function getFromLabel()
    {
        return $this->container['from_label'];
    }

    /**
     * Sets from_label
     *
     * @param string|null $from_label The label associated with the from_email
     *
     * @return self
     */
    public function setFromLabel($from_label)
    {
        $this->container['from_label'] = $from_label;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id The ID of the template associated to the message
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets template_name
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     *
     * @param string|null $template_name The name of the template associated to the message
     *
     * @return self
     */
    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;

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


