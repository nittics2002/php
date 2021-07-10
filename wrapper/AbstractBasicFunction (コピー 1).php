<?php

declare(strict_types=1);

namespace wrapper\array;

use RuntimeException;

abstract class AbstractBasicFunction
{
    /**
    *   @val array
    */
    private array $functions = [];
    
    /**
    *   functionList
    *
    *   @return array
    */
    public function functionList():array
    {
        return $this->functions;
    }
    
    /**
    *   has
    *
    *   @param string $name
    *   @return bool
    */
    public function has(string $name):bool
    {
        return in_array(
            $name,
            $this->functions
        );
    }
    
    /**
    *   checkFunction
    *
    *   @param string $name
    *   @return bool
    */
    protected function checkFunction(string $name):bool
    {
        if (!$this->has($name)) {
            throw new RuntimeException(
                "function is not defined:{$name}"
            );
        }
        return true;
    }
    
    /**
    *   callFunction
    *
    *   @param string $name
    *   @param array $arguments
    *   @return mixed
    */
    protected function checkFunction(
        string $name,
        array $arguments,
    ):mixed;
        $result = call_user_func_array(
            $name,
            $arguments,
        );
        
        if ($result === false)) {
            throw new RuntimeException(
                "execution failure :{$name}"
            );
        }
        return $result;
    }
    
    /**
    *   execute
    *
    *   @param array $dataset
    *   @param string $name
    *   @param array $arguments
    *   @return mixed
    */
    abstract public function execute(
        array $dataset,
        string $name,
        array $arguments,
    ):mixed {
        
        
        
        
        
        
        
        
    }
}
