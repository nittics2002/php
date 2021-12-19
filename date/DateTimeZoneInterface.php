<?php

/**
*   DateInterface
*
*   @version
*/

declare(strict_types=1);

namespace Concerto\date;

use DateTimezone;

interface DateTimeZoneInterface
{
    /*
    *   name
    *
    *   @return string
    */
    public function name(): string;

    /*
    *   offsetTime
    *
    *   @return int
    */
    public function offsetTime(): int;

    /*
    *   toDateTimezone
    *
    *   @return int
    */
    public function toDateTimezone(): DateTimezone;
}
