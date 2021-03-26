<?php

namespace Validator;

class ValidatorErrorBug
{
    /**
     *  __construct
     * 
     *  @param string $name
     *  @param mixed $value
     *  @param string $rule
     */
    public function __construct(
        public string $name,
        public mixed $value,
        public string $rule,
    ):void {
    }
    
    /**
     *  fromArray
     * 
     *  @param array $parameters
     *  @return static
     */
    public static function fromArray(array $parameters):static
    {
        return new static(
            $parameters['name'],
            $parameters['value'],
            $parameters['rule'],
        );
    }
}
