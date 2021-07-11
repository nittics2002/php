<?php

declare(strict_types=1);

namespace wrapper\array;

use wrapper\array\BasicFunction;

class CompartedFunction extends BasicFunction
{
    /**
    *   {inherit}
    */
  private array $functions = [
    'com',
    ];

    /**
    *   @val array [function_name=>argument_position]
    */
    private array $not_first_array_argument = [
        'array_key_exists' => 1,
        'array_search' => 1,
    ];
}
