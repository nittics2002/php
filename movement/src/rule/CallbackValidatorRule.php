<?php

namespace Validator\rule;

use UnexpectedValueException;
use Validator\ValidatorRuleInterface;

class CallbackValidatorRule implements ValidatorRuleInterface
{
    /**
     *   judgementProcessing
     *   
     *   @var callable
     */
    private callable $judgementProcessing;
    
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
            new UnexpectedValueException(
                "A return value of judgment processing isn't bool"
            );
        }
        
        return $retult;
    }
}
