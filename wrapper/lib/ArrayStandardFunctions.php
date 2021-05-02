<?php

declare(strict_types=1);

namespace wrapper\lib;

use BadMethodCallException;
use InvalidArgumentException;
use wrapper\lib\{
    CommonFunctionsTrait,
    WapperFunctionsInterface,
};

class ArrayStandardFunctions implements WapperFunctionsInterface
{
    use CommonFunctionsTrait;
    
    /**
    *   @var string データ位置
    *
    */
    private const string POSITION_NONE = 'none';
    private const string POSITION_FIRST = 'first';
    private const string POSITION_LAST = 'last';
    
    /**
    *   @var array データ位置定義
    *
    */
    private static array $data_positions = [
        'arrayChangeKeyCase' => 0,
        
        
        'arrayFill' => static::POSITION_NONE,
        
        
    ];
    
    
    
    
    
    /**
    *   {inherit}
    *
    */
    public static function has(string $name):bool{
        return function_exists(
            $this::toSnake($name)
        );
    }
    
    /**
    *   {inherit}
    *
    */
    public static function execute(
        string $name,
        array $arguments
    ):mixed{
        $function_name = $this::toSnake($name);
        
        if (function_exists($function_name)) {
            $arguments = static::sortArguments(
                $function_name,
                $arguments
            );
            
            return call_user_func_array(
                $function_name,
                $arguments
            );
        }
        
        if (function_exists("array_${function_name}")) {
            $arguments = static::sortArguments(
                "array_${function_name}",
                $arguments
            );
            
            return call_user_func_array(
                "array_${function_name}",
                $arguments
            );
        }
        
        if (method_exists($this, $function_name) {
            $arguments = static::sortArguments(
                $function_name,
                $arguments
            );
            
            return call_user_func_array(
                [$this, $function_name],
                $arguments
            );
        }
        
        throw new BadMethodCallException(
            "undefined method:{$name}"
        );
    }

    /**
    *   sortArguments
    *
    *   @param string $name
    *   @return string
    */
    private static function sortArguments(
        string $name,
        array $arguments,
    {
        if (!array_key_exists(
            $name,
            static::$data_positions
        )) {
            throw new InvalidArgumentException(
                "undefined method:{$name}"
            );
        }
        
        if (static::$data_positions[$name] === static::POSITION_NONE) {
            return array_splice($arguments, 0, 1);
        }
        
        if (static::$data_positions[$name] === static::POSITION_LAST) {
            
            
            //ローテートする
            
            return array_splice(
                $arguments,
                0,
                1, 
            );
        }
        
        return 
        
        
    }









    /**
    *   inArray
    *
    *   @param string $string
    *   @return string
    */
    private static function toSnake(
         array $array,
         mixed $needle,
         ?bool $strict,
    ):bool{
    //もしかして不要なmethod?

        return in_array($needle, $array, $strict)
    }
    
    
    
    
    
}
