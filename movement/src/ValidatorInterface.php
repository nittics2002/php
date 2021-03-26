<?php

namespace Validator;

use Validator\ValidatorErrorBug;

interface ValidatorInterface
{
    /**
     *   isValid
     *   
     *   @param mixed $value
     *   @return bool
     */
    public function isValid(mixed $value):bool;
    
    /**
     *   error
     *   
     *   @return ?ValidatorErrorBug
     */
    public function error():?ValidatorErrorBug;
}
