<?php

/**
*   Service Container
*
*   @ver 170210
*   @see https://github.com/ecfectus/container
**/

declare(strict_types=1);

namespace Concerto\container;

use ReflectionClass;
use ReflectionMethod;
use ReflectionParameter;
use Concerto\container\ContainerAwareInterface;
use Concerto\container\exception\NotFoundException;
use Psr\Container\ContainerInterface;

class ReflectionContainer implements
    ContainerInterface,
    ContainerAwareInterface
{
    use ContainerAwareTrait;
    
    /**
    *   {inherit}
    *
    **/
    public function get($id)
    {
        if (!class_exists($id)) {
            throw new NotFoundException(
                "{$id} is not an existing class"
            );
        }
        
        $reflector = new ReflectionClass($id);
        $construct = $reflector->getConstructor();
        if ($construct === null) {
            return new $id();
        }
        
        return $reflector->newInstanceArgs(
            $this->reflectArguments($construct)
        );
    }
    
    /**
    *   reflectArguments
    *
    *   @param ReflectionMethod $method
    *   @return array
    **/
    private function reflectArguments(ReflectionMethod $method)
    {
        $arguments = array_map(
            function (ReflectionParameter $param) use ($method) {
                $name  = $param->getName();
                $class = $param->getClass();
                if (! is_null($class)) {
                    return $class->getName();
                }
                
                if ($param->isDefaultValueAvailable()) {
                    return $param->getDefaultValue();
                }
                
                throw new NotFoundException(
                    "Unable to resolve a value:{$name}"
                );
            },
            $method->getParameters()
        );
        
        return $this->resolveArguments($arguments);
    }
    
    /**
    *   resolveArguments
    *
    *   @param array $arguments
    *   @return array
    **/
    private function resolveArguments(array $arguments)
    {
        foreach ($arguments as &$arg) {
            if (! is_string($arg)) {
                continue;
            }
            $container = $this->getContainer();
            
            if (! is_null($container) && $container->has($arg)) {
                $arg = $container->get($arg);
                continue;
            }
        }
        return $arguments;
    }
    
    /**
    *   {inherit}
    *
    **/
    public function has($id)
    {
        return class_exists($id);
    }
}
