<?php

declare(strict_types=1);

namespace sql;

use DateTimeInterface;
use PDO;

class ArrayTableGenerator
{
    /**
    *   @var PDO
    */
    private PDO $pdo;
    
    /**
    *   __construct
    *
    *   @param PDO $pdo
    *
    */
    public function __construct(PDO $PDO)
    {
        $this->pdo = $pdo;
    }
    
    /**
    *   createTableFromArrayTable
    *
    *   @param array $table
    *
    */
    public function createTableFromArrayTable(array $table)
    {
        $schema = $this->createTableFromArrayTable($table);
        $this->createTable($schema);
        $this->insertData($schema, $table);
    }
    
    /**
    *   createTableFromArrayTable
    *
    *   @param array $table
    *   @return array [column_name => data_type,...]
    */
    private function createTableSchema(array $table):array
    {
        $schema = [];
        
        foreach($table as $list) {
            if (!is_array($list)) {
                continue;
            }
            
            foreach ($list as $key => $val) {
                if (array_key_exists($key, $schema)) {
                    continue;
                }elseif ($val instanceof DateTimeInterface
                    || strtotime($val) !== false
                ) {
                    $schema[$key] = 'timestamp';
                } else {
                    $dataType = gettype($val);
                    
                    if ($dataType === 'integer') {
                        $schema[$key] = 'integer';
                    } elseif ($dataType === 'double') {
                        $schema[$key] = 'numeric';
                    } elseif ($dataType === 'string'
                         || $dataType === 'boolean'
                    ) {
                        $schema[$key] = 'text';
                    }
                }
            }
        }
        
        return $schema;
    }
    
    /**
    *   createTable
    *
    *   @param array $schema
    */
    private function createTable(array $schema)
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
    *   insertData
    *
    *   @param array $schema
    *   @param array $table
    */
    private function createTableSchema(array $table):array
    {
        //カラム名の順序を定義
        $define_column_index = array_flip(array_keys($schema));
        
        $values = [];
        $binds = [];
        
        $row_index = 0;
        foreach($table as $list) {
            if (!is_array($list)) {
                continue;
            }
            
            foreach ($list as $key => $val) {
                $column_index = $define_column_index[$key]?? null;
                
                if ($column_index === null) {
                    continue;
                } elseif ($val instanceof DateTimeInterface) {
                    $values[$key] = "{$row_index}_{$column_index}";
                    $binds["{$row_index}_{$column_index}"] =
                        $val->format(DateTimeInterface::ATOM);
                } elseif (strtotime($val) !== false) {
                    $values[$key] = "{$row_index}_{$column_index}";
                    $binds["{$row_index}_{$column_index}"] =
                        (new DateTime())
                        ->setTimestamp(strtotime($val))
                        ->format(DateTimeInterface::ATOM);
                } else {
                    $dataType = gettype($val);
                    
                    if ($dataType === 'integer') {
                        $values[$key] = "{$row_index}_{$column_index}";
                        $binds["{$row_index}_{$column_index}"] =
                            (int)$val;
                    } elseif ($dataType === 'double') {
                        $values[$key] = "{$row_index}_{$column_index}";
                        $binds["{$row_index}_{$column_index}"] =
                            (float)$val;
                    } elseif ($dataType === 'string') {
                        $values[$key] = "{$row_index}_{$column_index}";
                        $binds["{$row_index}_{$column_index}"] =
                            (string)$val;
                    } elseif ($dataType === 'boolearn') {
                        $values[$key] = "{$row_index}_{$column_index}";
                        $binds["{$row_index}_{$column_index}"] =
                            $val? '1':'0';
                    }
                }
            }
        }
        
        
        
        
        
        
        
        return $schema;
    }
    
    
    
    
    
    
    
    
}