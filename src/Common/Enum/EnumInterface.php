<?php

declare(strict_types = 1);

namespace Damianopetrungaro\CleanArchitecture\Common\Enum;

/**
 * The class that will extents Enum should only contains constant.
 * Example:
 *
 * const ERROR_VALIDATION = 'ERROR_VALIDATION';
 * const ENTITY_NOT_FOUND = 'ENTITY_NOT_FOUND';
 * const PERSISTENCE_ERROR= 'PERSISTENCE_ERROR';
 */
interface EnumInterface
{
    /**
     * Enum constructor.
     *
     * @param mixed $value
     */
    public function __construct($value);

    /**
     * Throw an exception if there's no constant in the child class, otherwise return the constant value.
     *
     * @param string $enum
     * @param array $args
     *
     * @throws \InvalidArgumentException
     *
     * @return mixed
     */
    public static function __callStatic(string $enum, array $args = []) : EnumInterface;

    /**
     * Return the enum value
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Return the enum value as string
     *
     * @return string
     */
    public function __toString(): string;
}
