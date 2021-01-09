<?php
declare(strict_types=1);
namespace Garmin\Training\Traits;

use Exception;
use InvalidArgumentException;
use ReflectionClass;
use ReflectionObject;

/**
 * 
 */
trait FunctionsTrait
{

    /**
     * Default constructor
     */
    public function inialiaze(array $args = [])
    {
        // $refObj = new ReflectionObject($this);
        // $props = $refObj->getProperties();

        $class = get_class($this);
        $chain = array_reverse(class_parents($class), true) + [$class => $class];

        $props = [];

        foreach($chain as $class)
        {
            $props += (new ReflectionClass($class))->getProperties();    
        }
        
        foreach ($props as $prop ) 
        {
            $name = $prop->getName();
            if (isset($args[$name])) 
            {

                $method = 'set'.ucfirst($name);
                if (method_exists($this, $method))
				{
					$this->$method($args[$name]);
				}
				else
				{
					throw new InvalidArgumentException('Invalid argument '.$name);
				}
            }
            
        }
    }

    
    public function toArray() : array
    {
        $response = [];
        $class = get_class($this);
        $chain = array_reverse(class_parents($class), true) + [$class => $class];
        
        $props = [];
        foreach($chain as $class)
        {
            $props += (new ReflectionClass($class))->getProperties();    
        }

        foreach ($props as $prop) 
        {
            $name = $prop->getName();
            
            if (is_array($this->$name)) 
            {
                foreach ($this->$name as $value) 
                {
                    $response[$name][] = $value->toArray();
                }
            }
            else 
            {
                $method = 'get'.ucfirst($name);
                if(!method_exists($this,$method)) {
                    throw new Exception('Invalid Propriety '.$name);
                }
                $response[$name] = $this->$method();
            }
            
        }
        return $response;
    }
}
