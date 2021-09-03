<?php

/**
* DatePeriodInterface
*
* @version 
*
*/

declare(strict_types=1);

namespace Concerto\delegator;

use DateInterface;
use DateIntervalInterface;

interface DatePeriodInterface
{

  /*
  * interval
  *
  * @return DateIntervalInterface 
  */
  public function interval():DateIntervalInterface;

  /*
  * startDate
  *
  * @return DateInterface 
  */
  public function startDate():DateInterface;

  /*
  * endDate
  *
  * @return DateInterface 
  */
  public function endDate():DateInterface;

  /*
  * recurrences
  *
  * @return int 
  */
  public function recurrences():?int;

} 
