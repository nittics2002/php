<?php

namespace Validator;

interface ValidatorRuleInterface
{
    /**
     *   isValid
     *   
     *   @param mixed $value
     *   @return bool
     */
    public function isValid(mixed $value):bool;
}
