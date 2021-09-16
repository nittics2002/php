<?php

/**
* DateInterface
*
* @version
*
*/

declare(strict_types=1);

namespace Concerto\delegator;

interface DateTimeZoneInterface
{

    /*
    * name
    *
    * @return string
    */
    public function name(): string;

    /*
    * offset
    *
    * @return int
    */
    public function offset(): int;
}
