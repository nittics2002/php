<?php

/**
*   DateInterface
*
*   @version
*/

declare(strict_types=1);

namespace Concerto\util\implement;

use DateTimeZone;
use Concerto\util\DateTimeZoneInterface;

class DateTimeZoneObject extends DateTimeZone implements
    DateTimeZoneInterface
{
    /*
    *   name
    *
    *   @return string
    */
    public function name(): string;

    /*
    *   offset
    *
    *   @return int
    */
    public function offset(): int;
}
