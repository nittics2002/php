<?php

namespace _First;

class First1
{
    public function __construct(
        protected string $first_name,
        protected string $last_name,
        protected ?string $separator = ' ',
    ) {
    }
    
    public function fullName():string
    {
        return $this->last_name .
         $this->separator .
         $this->first_name;
    }
    
    public function reversedName():string
    {
        return $this->first_name .
         $this->separator .
         $this->last_name;
    }
}
