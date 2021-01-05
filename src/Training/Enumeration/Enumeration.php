<?php

declare(strict_types=1);

namespace Garmin\Training\Enumeration;

use Garmin\Training\Enumeration\EnumerationInterface;
use ReflectionClass;
/**
 * Class Enumeration 
 */
class Enumeration implements EnumerationInterface
{
    /**
     * Class constants
     *
     * @var array
     */
    private static $constants = [];

    /**
     * Return class constants
     *
     * @return array
     */
    public static function getConstants() 
    {
        
        if (!isset(self::$constants[static::class]))
        {
            self::$constants[static::class] = (new ReflectionClass(static::class))->getConstants();
        }
        return self::$constants[static::class];
    }

    /**
     * Return value of constant name within class if available or false
     *
     * @param string $constName
     * @return int|false
     */
    public static function valueOf(string $constName)
    {
        // TODO implement here
        $constants = self::getConstants();
        
        return $constants[$constName] ?? false;
    }

    /**
     * Return name of constant value within class if available or false
     *
     * @param integer $constValue
     * @return string|false
     */
    public static function nameOf(int $constValue)
    {
        // TODO implement here
        $constants = array_flip(self::getConstants());

        return $constants[$constValue] ?? false;
    }

}


