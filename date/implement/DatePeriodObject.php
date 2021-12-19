<?php

/**
*   DatePeriodObject
*
*   @version 211204
*/

declare(strict_types=1);

namespace Concerto\date;

use Countable;
use DatePeriod;
use Concerto\date\DateInterface;
use Concerto\date\DateIntervalInterface;
use Concerto\date\DatePeriodInterface;

class DatePeriodObject implements DatePeriodInterface
{
    /*
    *   createFromDatePeriod
    *
    *   @param DatePeriod $period
    *   @return DatePeriodInterface
    */
    public static function createFromDatePeriod(
        DatePeriod $period,
    ): DatePeriodInterface {
        $this->period = $period;
        return $this;
    }
    
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
