<?php

declare(strict_types=1);

namespace arrays\sqlite;

trait SqliteTableCommonTrait
{
    /**
    *   @var array [[column_name => data_type],...]
    *
    */
    private array $define_columns = [];
    
    /**
    *   columnNames
    *
    *   @return array
    */
    public function columnNames():array
    {
        return array_keys($this->define_columns);
    }
    
    /**
    *   columnTypes
    *
    *   @return array
    */
    public function columnTypes():array
    {
        $column_types = [];
        
        foreach ($this->define_columns as $column_name => $type) {
            $column_types[$column_name] = $type;
        }
        
        return $column_types;
    }
    
    /**
    *   columnRavelingTypes
    *
    *   @return array
    */
    private function columnRavelingTypes():array
    {
        return $this->define_columns;
    }
    
    /**
    *   parseColumns
    *
    *   @@param array ...$column_names
    *   @return array
    */
    private function parseColumns(...$column_names):array
    {
        $diff = array_diff($column_names);
        
        $first = array_shift($column_names);
        $counter = 0;
        
        
        
        //array_map???
        $intercect = array_reduce(
            $column_names,
            function($carry, $item) use (&$counter) {
                $intercect = array_intersect($carry, $item);
                
                return array_map(
                    function($column_name) use ($counter) {
                        return "{$column_name}_{$carry}";
                    },
                    $intercect
                );
            },
            $first,
        );
        
        
        
        
        
        
        
        
        return $intercect
        
        
        
        
        
        
        
        
    }
}
