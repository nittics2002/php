<?php

/**
*   DateIntervalInterface
*
*   @version 211204
*/

declare(strict_types=1);

namespace Concerto\util;

interface DateIntervalInterface
{
    /*
    *   createFromDateString
    *
    *   @param string $datetime
    *   @return DateIntervalInterface
    */
    public static function createFromDateString(
        string $datetime
    ): DateIntervalInterface;

    /*
    *   format
    *
    *   @param string $format
    *   @return string
    */
    public function format(
        string $format
    ): string;
    
    /*
    *   fiscalYear
    *
    *   @return ?int
    */
    public function fiscalYear(): ?int;
    
    /*
    *   quater
    *
    *   @return ?int
    */
    public function quaters(): ?int;
    
    /*
    *   year
    *
    *   @return int
    */
    public function years(): int;
    
    /*
    *   month
    *
    *   @return int
    */
    public function months(): int;
    
    /*
    *   weeks
    *
    *   @return int
    */
    public function weeks(): int;
    
    /*
    *   day
    *
    *   @return int
    */
    public function day(): int;
    
    /*
    *   hour
    *
    *   @return int
    */
    public function hours(): int;
    
    /*
    *   minute
    *
    *   @return int
    */
    public function minutes(): int;
    
    /*
    *   second
    *
    *   @return int
    */
    public function seconds(): int;
    
    /*
    *   milliSeconds
    *
    *   @return int
    */
    public function milliSeconds(): int;
    
    /*
    *   microSecond
    *
    *   @return int
    */
    public function microSeconds(): int;
}
