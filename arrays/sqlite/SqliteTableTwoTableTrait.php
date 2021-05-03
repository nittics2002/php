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
    *   @return static
    */
    public function join(
        ArrayTableInterface $other_table,
    ):static {
        extract($this->parseColumns(
            $this->columnNames(),
            $other_table->columnNames(),
        ));
        
        $sql = "
            SELECT A.*, B.*
            FROM (
            
             
                ) A
            JOIN (
            
            
            ) B
                ON 1 = 1
        ";
        
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
