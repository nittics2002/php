<?php

/**
*   DatePeriodInterface
*
*   @version 211204
*/

declare(strict_types=1);

namespace Concerto\date;

use Countable;
use DatePeriod;
use Concerto\date\DateInterface;
use Concerto\date\DateIntervalInterface;

interface DatePeriodInterface extends Traversable,
    Countable
{
    /*
    *   createFromDatePeriod
    *
    *   @param DatePeriod $period
    *   @return DatePeriodInterface
    */
    public static function createFromDatePeriod(
        DatePeriod $period,
    ): DatePeriodInterface;
    
    /*
    *   interval
    *
    *   @return DateIntervalInterface
    */
    public function interval(): DateIntervalInterface;

    /*
    *   startDate
    *
    *   @return DateInterface
    */
    public function startDate(): DateInterface;

    /*
    *   endDate
    *
    *   @return DateInterface
    */
    public function endDate(): DateInterface;

    /*
    *   current
    *
    *   @return DateInterface
    */
    public function current(): DateInterface;
}
