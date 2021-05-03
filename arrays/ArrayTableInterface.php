<?php

declare(strict_types=1);

namespace arrays;

interface ArrayTableInterface
{
    
    
    
    /**
    *   join
    *
    *   @param ArrayTableInterface $other_table
    *   @return static
    */
    public function join(
        ArrayTableInterface $other_table,
    ):static;
    
    /**
    *   leftJoin
    *
    *   @param ArrayTableInterface $other_table
    *   @return static
    */
    public function leftJoin(
        ArrayTableInterface $other_table,
    ):static;
    
    
    
}
