<?php

namespace Concerto\delegator;


interface DateIntervalInterface
{
  public static function createFromDateString(string $datetime):DateIntervalInterface;
  public function format(string $format):string;



} 
