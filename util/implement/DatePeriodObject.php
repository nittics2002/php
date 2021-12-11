<?php

/**
*   DatePeriodObject
*
*   @version 211204
*/

declare(strict_types=1);

namespace Concerto\util;

use Countable;
use DatePeriod;
use Concerto\util\DateInterface;
use Concerto\util\DateIntervalInterface;
use Concerto\util\DatePeriodInterface;

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
