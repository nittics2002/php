<?php

declare(strict_types=1);

namespace wrapper\array;

use wrapper\array\AbstractBasicFunction;

class NotHaveArrayArgumentFunction extends AbstractBasicFunction
{
    /**
    *   {inherit}
    */
    private array $functions = [
      'array_fill',
      'array',
      'list',
      'range',
    ];

    /**
    *   {inherit}
    */
    public function resolveArgument(
        array $dataset,
        string $name,
        array $arguments,
    ):array{
      return $arguments;
    }
}
