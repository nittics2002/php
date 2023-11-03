<?php

namespace dev\excel;

class Point
{
    /**
    *   __construct
    *
    *   @param int|float $x
    *   @param int|float $y
    */
    public function __construct(
        private int|float $x = 0,
        private int|float $y = 0,
    ) {
    }
    
    /**
    *   translate
    *
    *   @param int|float $x
    *   @param int|float $y
    *   @return static
    */
    public function translate(
         int|float $x,
         int|float $y,
    ):static {
        return new static(
            $this->x + $x,
            $this->y + $y,
        );
    }
   
    /**
    *   distance
    *
    *   @param Point $point
    *   @return float
    */
    public function distance(
         Point $point,
    ):float {
        return sqrt(
            ($this->x - $point->getX()) ** 2 +
            ($this->y - $point->getY()) ** 2
        );
    }
    
    /**
    *   getX
    *
    *   @return int|float
    */
    public function getX():int|float
    {
        return $this->x;
    }
    
    /**
    *   getY
    *
    *   @return int|float
    */
    public function getY():int|float
    {
        return $this->y;
    }
}
