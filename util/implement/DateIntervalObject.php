<?php

/**
*   DateIntervalObject
*
*   @version 211204
*/

declare(strict_types=1);

namespace Concerto\util\implement;

use DateInterval;
use InvalidArgumentException;
use Concerto\util\DateIntervalInterface;

class DateIntervalObject implements DateIntervalInterface
{
    /*
    *   @val DateInterval
    */
    protected DateInterval $interval;
    
    /*
    *   __construct
    *
    *   @param string $duration
    */
    public function __construct(
        string $duration
    ) {
        $this->interval = new DateInterval(
            $duration
        );
    }
    
    /*
    *   {inherit}
    */
    public static function createFromDateInterval(
        DateInterval $interval
    ): DateIntervalInterface {
        $this->interval = $interval;
        return $this;
    }
    
    /*
    *   {inherit}
    */
    public static function createFromDateString(
        string $datetime
    ): DateIntervalInterface {
        $interval = DateInterval::createFromDateString(
            $datetime,
        );
        
        if ($interval === false) {
            throw new InvalidArgumentException(
                "format error:{$datetime}",
            );
        }
        $this->interval =$interval;
        return $this;
    }

    /*
    *   {inherit}
    */
    public function format(
        string $format
    ): string {
        $this->interval->format($format);
    }
    
    /*
    *   {inherit}
    */
    public function fiscalYear(): int
    {
        return intdiv(
            (int)$this->interval->format('%r%m'),
            6,
        );
    }
    
    /*
    *   {inherit}
    */
    public function quaters(): int
    {
        return intdiv(
            (int)$this->interval->format('%r%m'),
            3,
        );
    }
    
    /*
    *   {inherit}
    */
    public function years(): int
    {
        return $this->interval->invert *
            $this->interval->y;
    }
    
    /*
    *   {inherit}
    */
    public function months(): int
    {
        return $this->interval->invert *
            $this->interval->m;
    }
    
    /*
    *   {inherit}
    */
    public function weeks(): int
    {
        return $this->interval->invert *
            $this->interval->w;
    }
    
    /*
    *   {inherit}
    */
    public function day(): int
    {
        return $this->interval->invert *
            $this->interval->d;
    }
    
    /*
    *   {inherit}
    */
    public function hours(): int
    {
        return $this->interval->invert *
            $this->interval->h;
    }
    
    /*
    *   {inherit}
    */
    public function minutes(): int
    {
        return $this->interval->invert *
            $this->interval->i;
    }
    
    /*
    *   {inherit}
    */
    public function seconds(): int
    {
        return $this->interval->invert *
            $this->interval->s;
    }
    
    /*
    *   {inherit}
    */
    public function milliSeconds(): float
    {
        return $this->interval->invert *
            $this->interval->f / 1000;
    }
    
    /*
    *   {inherit}
    */
    public function microSeconds(): float
    {
        return $this->interval->invert *
            $this->interval->f;
    }
}
