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
    public function name(): string
    {
        return $this->getName();

    /*
    *   offsetTime
    *
    *   @return int
    */
    public function offsetTime(): int
    {
        return $this->getOffset(
            new DateTimeImmutable(
                'now',
                new DateTimeZone('UTC')
            )
        );
    }

    /*
    *   toDateTimezone
    *
    *   @return int
    */
    public function toDateTimezone(): DateTimezone
    {
        return $this;
    }
}
