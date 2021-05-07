<?php

declare(strict_types=1);

namespace arrays\sqlite;

use InvalidArgumentException;
use POD;
use arrays\ArrayTableInterface;
use arrays\sqlite\{
    SqliteTableCommonTrait,
    SqliteTableTwoTableTrait,
};

class SqliteTable implements ArrayTableInterface
{
    use SqliteTableCommonTrait;



    use SqliteTableTwoTableTrait;
    
    
    
    /**
    *   @var PDO
    *
    */
    private PDO $pdo;
    
    
    
    
    /**
    *   __construct
    *
    *   @param array $dataset
    *   @param ?array $define_column_types [column_name => data_type,...]
    */
    public function __construct(
        array $dataset,
        ?array $define_column_types,
    ) {
        if (empty($dataset)) {
            throw new InvalidArgumentException(
                "data is empty"
            );
        }
        $this->init($dataset, $define_column_types);
    }
    
    /**
    *   init
    *
    *   @param array $dataset
    *   @param ?array $define_column_types
    */
    private function init(
        array $dataset,
        ?array $define_column_types,
    ) {
        if ($define_column_types) {
            $this->parseUserDefineColumns(
                $define_column_types
            );
        } else {
            $this->createDefineColumns(
                array_slice($dataset, 0, 1)
            );
        }
        
        $this->createDatabaseTable();
        $this->insertInitData();
    }
    
    /**
    *   createDefineColumns
    *
    *   @param array $rows [column_name => value,...]
    */
    private function createDefineColumns(array $rows)
    {
        foreach $rows as $column_name => $value {
            
            //日付
            if ($value instanceof DateTimeInterface) {
                $this->define_columns[$column_name] =
                    ArrayTableDataTypeInterface::TYPE_DATETIME;
            } else {
                $data_type = gettype($value);
                
                if ($data_type === 'integer') {
                    $this->define_columns[$column_name] =
                        ArrayTableDataTypeInterface::TYPE_INT;
                } elseif ($data_type === 'double') {
                    $this->define_columns[$column_name] =
                        ArrayTableDataTypeInterface::TYPE_INT;
                } elseif ($data_type === 'string') {
                    $this->define_columns[$column_name] =
                        ArrayTableDataTypeInterface::TYPE_INT;
                } else {
                    throw new InvalidArgumentException(
                        "data type not defined:{$name}"
                    );
                }
            }
        }
    }
    
    /**
    *   parseUserDefineColumns
    *
    *   @param array $define_column_types
    */
    private function parseUserDefineColumns(
        array $define_column_types,
    ) {
        foreach $define_column_types as $column_name => $type {
            if (!$this->isDefinedDataType($type)) {
                throw new InvalidArgumentException(
                    "data type not dfined:{$column_name}"
                );
            
            $this->define_columns[$column_name] = $type;
        }
    }
    
    /**
    *   createDatabaseTable
    *
    */
    private function createDatabaseTable()
    {
        $sql = "
            CREATE TABLE table1 (
        ";
        
        $columns = [];
        
        foreach ($this->define_columns as $column_name => $type) {
            $raveling_type = $this->ravelingDataType($type);
            $columns[] = "{$column_name} {$raveling_type}"
        }
        
        $sql .= implode(',', $columns);
        
        $sql .= "
            )
        ";
        
        $this->pdo = new PDO(
            'sqlite::memory:',
            null,
            null,
            PDO::ERRMODE_EXCEPTION
        );
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
    
    /**
    *   insertInitData
    *
    */
    private function insertInitData()
    {
        $sql = "
            CREATE TABLE table1 (
        ";
        
        
        
        
        
        $sql .= "        
            )
        ";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
    
    /**
    *   join
    *
    *   @param ArrayTableInterface $table
    *   @param array $conditions
    *   @return static
    */
    public function join(
        ArrayTableInterface $table,
        array $conditions,
    ):static {
        
        
        
        
        
        
        
    }
    
    
    
}
