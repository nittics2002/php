<?php

declare(strict_types=1);

namespace wrapper;

class StandardArrayObject
{
    /**
    *   @val array
    */
    private array $dataset;
    
    /**
    *   @val array [method_name=>function_name]
    */
    private array $define_standard_functions = [
        
        //array かつ arg1がarray
        array_change_key_case
        array_chunk
        array_column
        array_count_values
        
        array_diff_assoc
        array_diff_key
        array_diff_uassoc
        array_diff_ukey
        array_diff
        array_udiff_assoc
        array_udiff_uassoc
        array_udiff
        
        array_filter
        array_flip
        
        array_intersect_assoc
        array_intersect_key
        array_intersect_uassoc
        array_intersect_ukey
        array_intersect
        array_uintersect_assoc 
        array_uintersect_uassoc
        array_uintersect
        
        array_keys
        array_merge_recursive
        array_merge
        array_pad
        array_replace_recursive
        array_replace
        array_reverse
        array_slice
        array_unique
        array_values
        
        
        
        //arrayだがreturnの検討必要
        array_splice
        compact
        
        
        //array 引数は検討必要
        array_combine
        array_fill_keys
        array_map
        
        
        
        //引数にarrayなし
        array_fill
        array
        list
        range
        
        
        /////
        
        
        //bool
        array_key_exists/key_exists
        in_array
        
        
        //boolだがarrayのreturnにする
        array_multisort
        array_walk
        array_walk_recursive
        
        arsort
        asort
        krsort
        ksort
        natcasesort
        natsort
        rsort
        sort
        uasort
        uksort
        usort
        
        shuffle
        
        //int|string|null
        array_key_first
        array_key_last
        key
        
        //mixed
        array_pop
        array_reduce
        array_shift
        current/pos
        
        
        //mixedだがarrayのreturnにする
        end
        next
        prev
        reset
        
        
        //int
        array_push
        array_unshift
        count/seizeof
        extract
        
        //int|float
        array_product
        array_sum
        
        //int|string|arrray
        array_rand
        
        //int|string|false
        array_search
        
        
        
        
        
        
    ];
    
    
    
    
    
    
    
    
    
    
    
    
    /**
    *   __construct
    *
    *   @param iterable $dataset
    */
    public function __construct(
         iterable $dataset,
    ) {
        $this->dataset = is_array($dataset)?
            $dataset: iterator_to_array($dataset);
    }
    
    /**
    *   toArray
    *
    *   @return array
    */
    public function toArray():array
    {
        return $this->dataset;
    }
    
    
    
    
    
    
    
    
    
    
    /**
    *   {inherit}
    *
    */
    public function __call(
        string $name,
        array $arguments
    ): mixed {
        
        
        
        
        
        $function_name = 'array' . $this->StudyToSnake($name);
        if (function_exists($function_name)) {
            $result = call_user_func_array(
                $function_name,
                $arguments
            );
        }
        
    }
    
    
    
}
