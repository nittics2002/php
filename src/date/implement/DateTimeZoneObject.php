<?php

/**
*   DateInterface
*
*   @version 211211
*/

declare(strict_types=1);

namespace Concerto\date\implement;

use DateTimeZone;
use Concerto\date\DateTimeZoneInterface;

class DateTimeZoneObject implements DateTimeZoneInterface
{
    /*
    *   @val DateTimeZone
    */
    protected DateTimeZone $timezone;
    
    /*
    *   __construct
    *
    *   @param string $timezone
    */
    public function __construct(
        string $timezone
    ) {
        $this->timezone = new DateTimeZone(
            $timezone
        );
    }
    
    /*
    *   name
    *
    *   @return string
    */
    public function name(): string
    {
        return $this->timozone->getName();

    /*
    *   offsetTime
    *
    *   @return int
    */
    public function offsetTime(): int
    {
        return $this->timozone->getOffset(
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
        return new DateTimeZone(
            $this->timozone->name(),
        );
    }
}
