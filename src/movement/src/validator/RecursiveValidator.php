<?php

namespace Validator\validator;

use UnexpectedValueException;
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
     *   earlyReturn
     *   
     *   @var bool
     */
    private array $earlyReturn = false;
    
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
        $this->judgementProcessings = $judgementProcessings;
        $this->dataset = $dataset;
    }
    
    /**
     *   @inheritDoc
     */
    public function isValid():bool
    {
        $this->errors = [];
        $judgement = true;
        
        foreach ($this->judgementProcessings as $name => $callbacks) {
            if (!is_array($callbacks)) {
                throw new UnexpectedValueException(
                    "judgementProcessings is not callable[][]."
                        . " name={$name}"
                );
            }
            
            if (!isset($this->dataset[$name])) {
                throw new UnexpectedValueException(
                    "data isn't defined. name={$name}"
                );
                
            }
            
            foreach ($callbacks as $no => $callback) {
                if (!is_callable($callback)) {
                    throw new UnexpectedValueException(
                        "judgementProcessings is not callable[][]."
                            . " name={$name}"
                            . " no={$no}"
                    );
                }
                
                $retult = call_user_func(
                    $callback,
                    $this->dataset[$name]
                );
                
                if (!is_bool($result)) {
                    new UnexpectedValueException(
                        "A return value of judgment processing isn't 'bool'"
                    );
                }
                
                if (!$result) {
                  $judgement = false;
                  
                  $this->errors[$name][$no] = new ValidatorErrorBug(
                    $callable,
                    $value
                  );
                  
                  if ($this->earlyReturn) {
                      return $judgement;
                  }
                }
            }
            
        }
        return $judgement;
    }
    
    /**
     *  {@inheritDoc}
     *
     *  @return ValidatorErrorBug[][]
     *      [
     *          name1 => [ValidatorErrorBug11,...],
     *          name2 => [ValidatorErrorBug21,...],
     *      ]
     */
    public function error():array
    {
        return $this->errors;
    }
    
    /**
     *  setEarlyReturn
     * 
     *  @return static
     */
    public function setEarlyReturn():static
    {
        return $this->earlyReturn = true;
    }
}
