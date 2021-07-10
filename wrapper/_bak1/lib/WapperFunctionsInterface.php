<?php

declare(strict_types=1);

namespace wrapper\lib;

interface WapperFunctionsInterface
{
    /**
    *   has
    *
    *   @param string $name
    *   @return bool
    */
    public static function has(string $name):bool;
    
    /**
    *   execute
    *
    *   @param string $name
    *   @param array $arguments
    *   @return mixed
    */
    public static function execute(
        string $name,
        array $arguments
    ):mixed;
}
