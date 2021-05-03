<?php

declare(strict_types=1);

namespace arrays\sqlite;

use PDO;
use arrays\ArrayTableInterface;
use arrays\sqlite\SqliteTableTwoTableTrait;

class SqliteTableTwoTableTrait
{
    
    
    
    /**
    *   {inherit}
    *
    *   @param ArrayTableInterface $other_table
    *   @param array $join_conditions [table1colname => table2colname,...]
    *   @return static
    */
    public function join(
        ArrayTableInterface $other_table,
        array $join_conditions
    ):static {
        $parsed_columns = $this->parseColumns(
            $this->columnNames(),
            $other_table->columnNames(),
        );
        
        $sql = "
            SELECT A.*, B.*
            FROM (
        ";
        
        $sql .= implode(',', $parsed_columns[0]);
        
        $sql .= "
                ) A
            JOIN (
        ";
        
        $sql .= implode(',', $parsed_columns[1]);
        
        
        $sql .= "
            ) B
                ON 1 = 1
        ";
        
        $sql .= implode(
            ' AND ',
            implode(
                ' = '
                $this->parseColumnConditions($join_conditions)
            )
        );
        
        $this->appendMethod($sql);
        
        return static;
    }
    
    /**
    *   {inherit}
    *
    *   @param ArrayTableInterface $table
    *   @return static
    */
    public function leftJoin(
        ArrayTableInterface $table,
    ):static{
        
        
    }
    
    
    

}
