<?php

declare(strict_types=1);

namespace arrays\sqlite;

trait SqliteTableCommonTrait
{
    /**
    *   @var string[] [sql1,...]
    *
    */
    private array $sqls = [];
    
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
    *   @@param array $column_names
    *   @@param ?array $other_column_names
    *   @return array [[column_name1,...], ([column_name1,...])]
    */
    private function parseColumns(
        array $column_names,
        ?array $other_column_names,
    ):array{
        if ($other_column_names === null) {
            return $column_names;
        }
        
        $diff = array_diff($column_names);
        
        $intercect = array_intersect(
            $column_names,
            $other_column_names
        );
        
        $renamed = array_map(
            fn($column_name) => "{$column_name}_a",
            $intercect
        );
        
        return [
            $column_names,
            $diff + $renamed,
        ];
    }
    
    /**
    *   parseColumnConditions
    *
    *   @@param array $column_conditions [table1colname => table2colname,...]
    *   @return array [[table1colname, table2colname],...]
    */
    private function parseColumnConditions(
        return array_map (
            fn ($column1, $column) => [$column1, $column],
            array_keys($column_conditions),
            array_values($column_conditions),
        );
    }
    
    
    
    
    
    
    
    
    
}
