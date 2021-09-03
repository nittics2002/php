<?php

/**
* DateInterface
*
* @version 
*
*/

declare(strict_types=1);

namespace Concerto\contract;

use DateTimeInterface;

interface DateInterface extends DateTimeInterface
{

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public static function createFromFormat(
    string $format,
    string $datetime,
    ?DateTimezoneInterface $timezone
  ):DateInterface;

  /*
  * now
  *
  * @return DateInterface 
  */
  public static function now():DateInterface;

  /*
  * today
  *
  * @return DateInterface 
  */
  public static function today():DateInterface;

  /*
  * yeasterday
  *
  * @return DateInterface 
  */
  public static function yeasterday():DateInterface;

  /*
  * tomorrow
  *
  * @return DateInterface 
  */
  public static function tomorrow():DateInterface;
  
  /*
  * thisQuarter
  *
  * @return DateInterface 
  */
  public static function thisQuarter():DateInterface;

  /*
  * thisYear
  *
  * @return DateInterface 
  */
  public static function thisYear():DateInterface;

  /*
  * thisMonth
  *
  * @return DateInterface 
  */
  public static function thisMonth():DateInterface;

  /*
  * add
  *
  * @param DateInterface $interval
  * @return DateInterface 
  */
  public function add(
    DateIntervalInterface $interval
  ):DateInterface;

  /*
  * addContext
  *
  * @param string $datetime 
  * @return DateInterface 
  */
  public function addContext(
    string $datetime
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param DateInterface $interval
  * @return DateInterface 
  */
  public function sub(
    DateIntervalInterface $interval
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param string $datetime 
  * @return DateInterface 
  */
  public function subContext(
    string $datetime
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param ?int $quater
  * @return DateInterface 
  */
  public function addQuarters(
    ?int $quater
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param ?int $year
  * @return DateInterface 
  */
  public function addYears(
    ?int $year
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param ?int $year
  * @return DateInterface 
  */
  public function addMonths(
    ?int $month
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param ?int $year
  * @return DateInterface 
  */
  public function addWeeks(
    ?int $week
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param ?int $year
  * @return DateInterface 
  */
  public function addDays(
    ?int $day
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param ?int $year
  * @return DateInterface 
  */
  public function addHours(
    ?int $hour
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param ?int $year
  * @return DateInterface 
  */
  public function addMinutes(
    ?int $minute
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @param ?int $year
  * @return DateInterface 
  */
  public function addSeconds(
    ?int $second
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function subQuarters(
    ?int $quater
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function subYears(
    ?int $year
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function subMonths(
    ?int $month
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function subWeeks(
    ?int $week
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function subDays(
    ?int $day
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function subHours(
    ?int $hour
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function subMinutes(
    ?int $minute
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function subSeconds(
    ?int $second
  ):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function nextQuarter():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function nextYear():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function nextMonth():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function nextWeek():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function nextDay():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function previousQuarter():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function previousYear():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function previousMonth():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function previousWeek():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function previousDay():DateInterface;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public function modify(string $modifier):DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function firstDayOfMonth():DateInterface;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function lastDayOfMonth():DateInterface;

  /*
  * createFromFormat
  *
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public function eq(
    DateInterface $datetime
  ):bool;

  /*
  * createFromFormat
  *
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public function ne(
    DateInterface $datetime
  ):bool;

  /*
  * createFromFormat
  *
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public function gt(
    DateInterface $datetime
  ):bool;

  /*
  * createFromFormat
  *
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public function ge(
    DateInterface $datetime
  ):bool;

  /*
  * createFromFormat
  *
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public function lt(
    DateInterface $datetime
  ):bool;

  /*
  * createFromFormat
  *
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public function le(
    DateInterface $datetime
  ):bool;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function toArray():array;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function year():int;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function month():int;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function week():int;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function day():int;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function hour():int;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function minute():int;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function second():int;

  /*
  * createFromFormat
  *
  * @return DateInterface 
  */
  public function timezone():DateTimezoneInterface;

  /*
  * unixtime
  *
  * @return int 
  */
  public function unixtime():int;

} 
