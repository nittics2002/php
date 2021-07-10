<?php

declare(strict_types=1);

namespace wrapper\array;

use wrapper\array\BasicFunction;

class ValueFunction extends BasicFunction
{
    /**
    *   {inherit}
    */
    private array $functions = [
        'in_array',
        'array_key_first',
        'array_key_last',
        'key',
        'array_reduce',
        'current',
        'count',
        'array_product',
        'array_sum',
        'array_rand',
    ];

    /**
    *   @val array [function_name=>argument_position]
    */
    private array $not_first_array_argument = [
        'array_key_exists' => 1,
        'array_search' => 1,
    ];
}
