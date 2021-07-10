<?php

declare(strict_types=1);

namespace wrapper;

use ArrayObject;
use wrapper\lib\{
    ArrayStandardFunctions,
    CommonFunctionsTrait,
};

class StandardArray extends ArrayObject
{
    use CommonFunctionsTrait;
    
    /**
    *   @var functions
    *
    */
    private array $functions = [
        'ArrayStandardFunctions',
        
    ];
    
    
    
    
    
    /**
    *   {inherit}
    *
    */
    public function __construct(
        mixed $input,
        ?int $flags,
        ?string $iterator_class
    ) {
        parent::__construct(
            $input,
            $flags,
            $iterator_class
        );
        
        
        
        
    }
    
    /**
    *   {inherit}
    *
    */
    public function __call(
        string $name,
        array $arguments
    ): mixed {
        
        
        
        
        
        
        
    }
    
    
    
}
