<?php

declare(strict_types=1);

namespace wrapper\array;

use wrapper\array\AbstractBasicFunction;

class ValueFunction extends AbstractBasicFunction
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
        'array_key_exists' => 2,
        'array_search' => 2,
    ];

    /**
    *   {inherit}
    */
    public function resolveArgument(
        array $dataset,
        string $name,
        array $arguments,
    ):array{
      if (array_key_exists(
        $name,
        $this->not_first_array_argument,
      )) {
        array_splice(
          $arguments,
          $this->not_first_array_argument[$name],
          1,
          $dataset,
        );
        return $arguments;
      }
      
      array_unshift($arguments, $dataset);
      return $arguments;
    }
}
