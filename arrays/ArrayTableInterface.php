<?php

declare(strict_types=1);

namespace arrays;

interface ArrayTableInterface
{
    
    
    
    /**
    *   join
    *
    *   @param ArrayTableInterface $table
    *   @return static
    */
    public function join(
        ArrayTableInterface $table,
    ):static;
    
    
    
}
