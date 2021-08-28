<?php

namespace Concerto\delegator;

interface DateTimeZoneInterface 
{
  public function name():string;
  public function offset():int;

} 
