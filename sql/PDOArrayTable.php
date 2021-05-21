<?php
/**
*   PDOArrayTable
*
*   @version 210522
*/

declare(strict_types=1);

namespace sql;

use BadMethodCallException;
use DateTimeInterface;
use PDO;

class PDOArrayTable
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
    *   {inherit}
    *
    */
    public function __call(string $name ,array $arguments) : mixed
    {
        if (method_exists($this->pdo, $name)) {
            return call_user_func_array(
                [$this->pdo, $name],
                $arguments
            );
        }
        
        throw BadMethodCallException(
            "not defined method:{$name}"
        );
    }
    
    /**
    *   createTableFromArrayTable
    *
    *   @param array $name
    *   @param array $data
    *   @return array schema
    */
    public function createTableFromArrayTable(
        string $name,
        array $data
    {
        $schema = $this->createTableFromArrayTable($data);
        
        if (empty($schema)) {
            return [];
        }
        
        $create_sql = $this->buildCreateTableSql($name, $schema);
        
        list($insert_sql, $binds) = 
            $this->buildInsertStatement($name, $schema, $data);
        
        $this->doCreateTableFromArrayTable(
            $schema,
            $create_sql,
            $insert_sql,
            $binds
        );
        
        return $schema;
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
                    $data_type = gettype($val);
                    
                    if ($data_type === 'integer') {
                        $schema[$key] = 'integer';
                    } elseif ($data_type === 'double') {
                        $schema[$key] = 'numeric';
                    } elseif ($data_type === 'string'
                         || $data_type === 'boolean'
                    ) {
                        $schema[$key] = 'text';
                    }
                }
            }
        }
        
        return $schema;
    }
    
    /**
    *   buildCreateTableSql
    *
    *   @param string $name
    *   @param array $schema
    *   @param string
    */
    private function buildCreateTableSql(
        string $name,
        array $schema
    ):string {
        $columns = [];
        
        foreach($schema as $column => $data_type) {
            $columns[] = "{$column} {$data_type}";
        }
        
        return "CREATE TABLE {$name} ("
            . implode (',', $columns)
            . ")";
    }
    
    /**
    *   buildInsertStatement
    *
    *   @param string $name
    *   @param array $schema
    *   @param array $data
    *   @return array [sql, binds]
    */
    private function buildInsertStatement(
        string $name,
        array $schema,
        array $data
    ):array {
        //カラム名の順序を定義
        $define_column_index = array_flip(array_keys($schema));
        
        $values = [];
        $binds = [];
        
        $row_index = 0;
        foreach($data as $list) {
            if (!is_array($list)) {
                continue;
            }
            
            foreach ($list as $key => $val) {
                $column_index = $define_column_index[$key]?? null;
                
                if ($column_index === null) {
                    continue;
                } elseif ($val instanceof DateTimeInterface) {
                    $values[$key] = ":{$row_index}_{$column_index}";
                    $binds[":{$row_index}_{$column_index}"] =
                        $val->format(DateTimeInterface::ATOM);
                } elseif (strtotime($val) !== false) {
                    $values[$key] = ":{$row_index}_{$column_index}";
                    $binds[":{$row_index}_{$column_index}"] =
                        (new DateTime())
                        ->setTimestamp(strtotime($val))
                        ->format(DateTimeInterface::ATOM);
                } else {
                    $data_type = gettype($val);
                    
                    if ($data_type === 'integer') {
                        $values[$key] = "{:$row_index}_{$column_index}";
                        $binds[:"{$row_index}_{$column_index}"] =
                            (int)$val;
                    } elseif ($data_type === 'double') {
                        $values[$key] = "{:$row_index}_{$column_index}";
                        $binds[:"{$row_index}_{$column_index}"] =
                            (float)$val;
                    } elseif ($data_type === 'string') {
                        $values[$key] = "{:$row_index}_{$column_index}";
                        $binds[:"{$row_index}_{$column_index}"] =
                            (string)$val;
                    } elseif ($data_type === 'boolearn') {
                        $values[$key] = "{:$row_index}_{$column_index}";
                        $binds[:"{$row_index}_{$column_index}"] =
                            $val? '1':'0';
                    }
                }
            }
        }
        
        $sql = "INSERT INTO {$name} ("
            . implode(',', array_keys($schema))
            . ") VALUES ("
            . implode('),(', $values)
            . ")";
            
            
        
        )
        
        return [$list, $binds];
    }
    
    /**
    *   doCreateTableFromArrayTable
    *
    *   @param array $schema
    *   @param string $create_sql
    *   @param string $insert_sql,
    *   @param array $binds
    */
    private function doCreateTableFromArrayTable(
        array $schema,
        string $create_sql,
        string $insert_sql,
        array $binds
    ):string {
        $error_mode = $this->pdo->getAttribute(
            PDO::ATTR_ERRMODE
        );
        
        $this->pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
        
        try {
            $this->pdo->beginTransaction();
            
            $stmt = $this->pdo->prepare($create_sql);
            $stmt->execute();
            
            $stmt = $this->pdo->prepare($insert_sql);
            
            $param_data_types = array_values($schema);
            
            foreach ($binds as $param => $val) {
                $exploded = explode('_', $param);
                $bind_parameter = PDO::PARAM_STR;
                
                if (!isset($exploded[1]]) {
                    throw new RuntimeException(
                        "pdo bind error:{$param}"
                    );
                }
                
                if ($exploded[1] === 'integer') {
                    $bind_parameter = PDO::PARAM_INT;
                }
                
                $stmt->bindValue($param, $val, $bind_parameter);
                
            }
            
            $stmt->execute();
            
            $this->pdo->commit();
            
        } catch (Exception $e) {
            $this->pdo->rollBack();
            throw e;
        } finally {
            $this->pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }
    }
}