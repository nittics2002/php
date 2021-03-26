<?php

namespace Validator;

interface ValidatorInterface
{
    /**
     *   isValid
     *   
     *   @return bool
     */
    public function isValid():bool;
    
    /**
     *   errors
     *   
     *   @return iterable
     */
    public function errors():iterable;
}
