<?php

declare(strict_types=1);

namespace wrapper\array;

use wrapper\array\BasicFunction;

class ReferencedFunction extends BasicFunction
{
    /**
    *   {inherit}
    */
    private array $functions = [
        'array_multisort',
        'array_walk',
        'array_walk_recursive',
        'arsort',
        'asort',
        'krsort',
        'ksort',
        'natcasesort',
        'natsort',
        'rsort',
        'sort',
        'uasort',
        'uksort',
        'usort',
        'shuffle',
        'array_splice',
        'array_pop',
        'array_shift',
        'end',
        'next',
        'prev',
        'reset',
        'array_map',
        'array_push',
        'array_unshift',
    ];

    /**
    *   @val array [function_name=>argument_position]
    */
    private array $not_first_array_argument = [
        'array_map' => 1,
    ];

    /**
    *   {inherit}
    */
    private array $has_related_function = [
      'array_push',
      'array_unshift',
    ];
    
    /**
    *   {inherit}
    */
    protected function callFunction(
        string $name,
        array $arguments,
    ):mixed;
        $result = call_user_func_array(
            $name,
            $arguments,
        );
        
        if ($result === false)) {
            throw new RuntimeException(
                "execution failure :{$name}"
            );
        }
        
        reset($arguments);
        return current($arguments);
    }
}
