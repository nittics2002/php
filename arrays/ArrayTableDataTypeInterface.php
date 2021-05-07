<?php

declare(strict_types=1);

namespace arrays;

interface ArrayTableDataTypeInterface
{
    /**
    *   @var string
    *
    */
    public const TYPE_INT = 'int';
    public const TYPE_FLOAT = 'float';
    public const TYPE_STRING = 'string';
    public const TYPE_DATETIME = 'datetime';
    
    /**
    *   ravelingDataType
    *
    *   @param string $array_type
    *   @return string
    */
    private function ravelingDataType(string $array_type):string;
    
    /**
    *   unRavelingDataType
    *
    *   @param string $used_type
    *   @return string
    */
    private function unRavelingDataType(string $used_type):string;
    
    /**
    *   isDefinedDataType
    *
    *   @param string $array_type
    *   @return bool
    */
    private function isDefinedDataType(string $array_type):bool;
}
