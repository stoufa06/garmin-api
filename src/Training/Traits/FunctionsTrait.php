<?php
declare(strict_types=1);
namespace Garmin\Training\Traits;

use Exception;
use ReflectionObject;

/**
 * 
 */
trait FunctionsTrait
{
    public function toArray() : array
    {
        $response = [];
        $refObj = new ReflectionObject($this);
        $props = $refObj->getProperties();
        foreach ($props as $prop) 
        {    
            $name = $prop->getName();
            if (is_array($this->$name)) 
            {
                foreach ($this->$name as $key => $value) 
                {
                    $response[$name][] = $value->toArray();
                }
            }
            // elseif ($this->$name instanceof DateTime) {
            //     /**
            //      * @var DateTime
            //      */
            //     $response[$name] = $this->$name->format('');
            // }
            else 
            {
                $method = 'get'.ucfirst($name);
                if(!method_exists($this,$method)) {
                    throw new Exception('Invalid Propriety');
                }
                $response[$name] = $this->$method();
            }
        }
        return $response;
    }
}
