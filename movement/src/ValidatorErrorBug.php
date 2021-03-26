<?php

namespace Validator;

class ValidatorErrorBug
{
    /**
     *   rule
     *   
     *   @var callable[][]
     */
    private array $rule;
    
    /**
     *   value
     *   
     *   @var mixed
     */
    private array $value;
    
    /**
     *  __construct
     * 
     *  @param callable $rule
     *  @param mixed $value
     */
    public function __construct(
        callable $rule,
        mixed $value
    ):void {
        $this->rule = $rule;
        $this->value = $value;
    }
    
    /**
     *  rule
     * 
     *  @return callable
     */
    public function rule():callable
    {
        return $this->rule;
    }
    
    /**
     *  value
     * 
     *  @return mixed
     */
    public function value():mixed
    {
        return $this->value;
    }
}
