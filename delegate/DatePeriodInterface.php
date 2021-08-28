<?php

namespace Concerto\delegator;

use DateInterface;
use DateIntervalInterface;

interface DatePeriodInterface
{
  public function interval():DateIntervalInterface;
  public function startDate():DateInterface;
  public function endDate():DateInterface;
  public function recurrences():?int;

} 
