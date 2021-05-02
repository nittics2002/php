<?php

declare(strict_types=1);

namespace arrays;

use POD;
use arrays\ArrayTableInterface;

class SqliteTable implements ArrayTableInterface
{
    
    /**
    *   @var string
    *
    */
    //private const TYPE_INT = 'int';
    
    
    
    
    
    
    /**
    *   @var PDO
    *
    */
    private PDO $pdo;
    
    
    
    
    /**
    *   __construct
    *
    *   @param ArrayTableInterface $data
    */
    public function __construct(
        ArrayTableInterface $data,
        
        
        
    ) {
        
        $this->init();
        
        
    }
    
    
    /**
    *   init
    *
    *   @param ArrayTableInterface $table
    *   @return ???
    */
    private function init(
        ArrayTableInterface $data,
    ) {
        $this->pdo = new PDO('sqlite::memory:');
        
        
        
        
        //カラム名取得
        array_keys
        
        //データ型検索
        array_values
        
        
        foreach
        
            $data_type = gettype($aa)
        
        
        
    }
    
    /**
    *   init
    *
    *   @param mixed $value
    *   @return string
    */
    private function init(
        mixed $value
    ) {
        
        
        
        
        
        
        
        throw new InvalidArgumentException(
            "data type error"
        );
    }
    
    
    
    
    
    
    /**
    *   join
    *
    *   @param ArrayTableInterface $table
    *   @return static
    */
    public function join(
        ArrayTableInterface $table,
    ):static {
        
        
        
        
        
        
        
    }
    
    
    
}
