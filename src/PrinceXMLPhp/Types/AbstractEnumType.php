<?php

namespace PrinceXMLPhp\Types;

use PrinceXMLPhp\Types\Exceptions\InvalidEnumTypeException;

/**
 * AbstractEnumType allows to define type safe value classes for a predefined set of possible values.
 * @package PrinceXMLPhp
 */
abstract class AbstractEnumType
{
    /**
     * Current active value.
     *
     * @var mixed
     */
    private $value;

    /**
     * AbstractEnumType constructor.
     * @param mixed $value the current value
     */
    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * Provides the data suitable for selecting correct enum value,
     * e.g. list-based HTML elements.
     * @return array
     */
    public function getListData()
    {
        return $this->getAllowedValues();
    }

    /**
     * Must return the allowed values for this type.
     *
     * @return array
     */
    abstract protected function getAllowedValues();

    /**
     * Checks if the passed value is allowed.
     *
     * @param $value
     * @return bool
     */
    final protected function isAllowed($value)
    {
        return in_array($value, $this->getAllowedValues(), true);
    }

    /**
     * Returns the current value.
     *
     * @return mixed
     */
    final public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the current value.
     * @throws InvalidEnumTypeException If given value does not match
     * @param mixed $value
     */
    final public function setValue($value)
    {
        if (!$this->isAllowed($value))
        {
            throw new InvalidEnumTypeException(
                sprintf(
                    '"%s" is not allowed as a value for %s.',
                    $value,
                    get_class($this)
                )
            );
        }
        $this->value = $value;
    }

    /**
     * @inheritdoc
     */
    final public function __toString()
    {
        return $this->value;
    }

}