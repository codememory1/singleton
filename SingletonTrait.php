<?php

namespace Codememory\Patterns\Singleton;

/**
 * Trait SingletonTrait
 *
 * @package Codememory\Patterns\Singleton
 *
 * @author  Codememory
 */
trait SingletonTrait
{

    /**
     * @var array
     */
    private static array $instances = [];

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns an instance of the class if it was previously created, otherwise the class
     * will be written to the list of instances and returned
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return static
     */
    final public static function getInstance(): static
    {

        $instance = static::class;

        if (array_key_exists($instance, self::$instances)) {
            return self::$instances[$instance];
        }

        return self::$instances[$instance] = new static();

    }

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Checks if the currently processed class is in the list of instances
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return bool
     */
    final public static function hasInstance(): bool
    {

        return array_key_exists(static::class, self::$instances);

    }

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns an array of all instances
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return array
     */
    final public static function getInstances(): array
    {

        return self::$instances;

    }

}