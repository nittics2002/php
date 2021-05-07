<?php

declare(strict_types=1);

namespace arrays\sqlite;

use InvalidArgumentException;
use arrays\ArrayTableDataTypeInterface;

trait SqliteTableDataTypeTrait implements ArrayTableDataTypeInterface
{
    /**
    *   @var array [php_type => database_type,...]
    *
    */
    private array data_types = [
        ArrayTableDataTypeInterface::TYPE_INT => 'integer',
        ArrayTableDataTypeInterface::TYPE_FLOAT => 'numeric',
        ArrayTableDataTypeInterface::TYPE_STRING => 'text',
        ArrayTableDataTypeInterface::TYPE_DATETIME => 'timespamp',
    ];
    
    /**
    *   {inherit}
    *
    */
    private function ravelingDataType(string $array_type):string
    {
        if (!array_key_exists($array_type, $this->data_types)) {
            throw new InvalidArgumentException(
                "data type not defined:{$array_type}"
            );
        }
        
        return $this->data_types[$array_type];
    }
    
    /**
    *   {inherit}
    *
    */
    private function unRavelingDataType(string $used_type):string
    {
        if (!in_array($used_type, $this->data_types)) {
            throw new InvalidArgumentException(
                "data type not defined:{$used_type}"
            );
        }
        
        return array_keys($this->data_types, $used_type);
    }
    
    /**
    *   {inherit}
    *
    */
    private function isDefinedDataType(string $array_type):bool
    {
        return array_key_exists($array_type, $this->data_types);
    }
}
