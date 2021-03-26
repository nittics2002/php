<?php

namespace Validator\validator;

use TypeError;

use Validator\{
    ValidatorErrorBug,
    ValidatorInterface,
}

class RecursiveValidator implements ValidatorInterface
{
    /**
     *   judgementProcessings
     *   
     *   @var callable[][]
     */
    private array $judgementProcessings = [];
    
    /**
     *   dataset
     *   
     *   @var mixed[][]
     */
    private array $dataset = [];
    
    /**
     *   errors
     *   
     *   @var ValidatorErrorBug[][]
     */
    private array $errors = [];
    
    /**
     *  __construct
     * 
     *  @param callable[][] $judgementProcessings
     *      [
     *          name1 => [callable11,...],
     *          name2 => [callable21,...],
     *      ]
     *  @param mixed[][] $dataset
     *      [
     *          name1 => value1,
     *          name2 => value2,
     *      ]
     */
    public function __construct(
        array $judgementProcessings,
        array $dataset
    ):void {
        $this->judgementProcessing = $judgementProcessing;
        $this->dataset = $dataset;
    }
    
    /**
     *   @inheritDoc
     */
    public function isValid():bool
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
     *  {@inheritDoc}
     *
     *  @return ValidatorErrorBug[]
     */
    public function error():ValidatorErrorBug[]
    {
        return $this->errors;
    }
}
