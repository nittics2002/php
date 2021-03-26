<?php

namespace Validator;

use TypeError;

use Validator\{
    ValidatorErrorBug,
    ValidatorInterface,
}

class CallbackValidator implements ValidatorInterface
{
    /**
     *   judgementProcessing
     *   
     *   @var callable
     */
    private callable $judgementProcessing;
    
    /**
     *   ValidatorErrorBug
     *   
     *   @var ValidatorErrorBug
     */
    private ValidatorErrorBug $validatorErrorBug;
    
    /**
     *  __construct
     * 
     *  @param callable $judgementProcessing
     */
    public function __construct(callable $judgementProcessing):void
    {
        $this->judgementProcessing = $judgementProcessing;
    }
    
    /**
     *   @inheritDoc
     */
    public function isValid(mixed $value):bool
    {
        $this->validatorErrorBug = null;
        
        $retult = call_user_func(
            $this->judgementProcessing,
            $value
        );
        
        if (!is_bool($result)) {
            new TypeError(
                "A return value of judgment processing isn't 'bool'"
            );
        }
        
        if (!$result) {
          $this->validatorErrorBug = new ValidatorErrorBug(
            
          );
        }
        
        return $retult;
    }
    
    /**
     *   @inheritDoc
     */
    public function error():?ValidatorErrorBug
    {
        return $this->validatorErrorBug;
    }
}
