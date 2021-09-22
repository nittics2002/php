<?php

/**
*   DateInterface
*
*   @version
*/

declare(strict_types=1);

namespace Concerto\util;

interface DateTimeZoneInterface
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
