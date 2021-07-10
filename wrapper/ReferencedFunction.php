<?php

declare(strict_types=1);

namespace wrapper\array;

use wrapper\array\AbstractBasicFunction;

class ReferencedFunction extends AbstractBasicFunction
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
    ];

    /**
    *   {inherit}
    */
    private array $has_others_return = [
      'array_push',
      'array_unshift',
    ];

    *   {inherit}
    */
    public function resolveArgument(
        array $dataset,
        string $name,
        array $arguments,
    ):array{
        array_unshift($arguments, &$dataset);
        return $arguments;
    }
    
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
