<?php

namespace Validator;

class ValidatorErrorBug
{
    /**
     *  __construct
     * 
     *  @param string $rule
     *  @param mixed $value
     */
    public function __construct(
        public string $rule,
        public mixed $value,
    ):void {
    }
}
