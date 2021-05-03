<?php

declare(strict_types=1);

namespace arrays\sqlite;

use arrays\ArrayTableDataTypeInterface;

trait SqliteTableDataTypeTrait implements ArrayTableDataTypeInterface
{
    /**
    *   @var array
    *
    */
    private array data_types = [
        TYPE_INT => 'integer',
        TYPE_FLOAT => 'numeric',
        TYPE_STRING => 'text',
        TYPE_DATETIME => 'timespamp',
    ];
    
    /**
    *   {inherit}
    *
    */
    private function ravelingDataType(string $array_type):string
    {
        if (!array_key_exists($this->data_types)) {
            throw new AAA
        }
        
        return $this->data_types($array_type);
    }
    
    /**
    *   {inherit}
    *
    */
    private function unRavelingDataType(string $used_type):string
    {
        if (!in_array($this->data_types)) {
            throw new AAA
        }
        
        return array_keys($this->data_types, $used_type);
    }
}
