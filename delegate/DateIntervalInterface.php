<?php

/**
* DateIntervalInterface
*
* @version 
*
*/

declare(strict_types=1);

namespace Concerto\contract;

interface DateIntervalInterface
{

  /*
  * createFromDateString
  *
  * @param string $datetime 
  * @return DateIntervalInterface 
  */
  public static function createFromDateString(
    string $datetime
  ):DateIntervalInterface;

  /*
  * format
  *
  * @param string $format 
  * @return string 
  */
  public function format(
    string $format
  ):string;

} 
