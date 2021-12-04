<?php

/**
*   DatePeriodInterface
*
*   @version 211204
*/

declare(strict_types=1);

namespace Concerto\util;

use Countable;
use Concerto\util\DateInterface;
use Concerto\util\DateIntervalInterface;

interface DatePeriodInterface extends Traversable,
    Countable
{
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
