<?php

namespace Concerto\delegator;

use DateTimeInterface;

interface DateInterface extends DateTimeInterface
{
  public static function now():DateInterface;
  public static function today():DateInterface;
  public static function yeasterday():DateInterface;
  public static function tomorrow():DateInterface;

  public static function createFromFormat(string $format, string $datetimr, ?DateTimezoneInterface $timezone):DateInterface;

  public function add(DateIntervalInterface $interval):DateInterface;
  public function addContext(string $datetime):DateInterface;
  public function sub(DateIntervalInterface $interval):DateInterface;
  public function subContext(string $datetime):DateInterface;

  public function addQuarters(?int $quater):DateInterface;
  public function addYears(?int $year):DateInterface;
  public function addMonths(?int $month):DateInterface;
  public function addWeeks(?int $week):DateInterface;
  public function addDays(?int $day):DateInterface;
  public function addHours(?int $hour):DateInterface;
  public function addMinutes(?int $minute):DateInterface;
  public function addSeconds(?int $second):DateInterface;

  public function subQuarters(?int $quater):DateInterface;
  public function subYears(?int $year):DateInterface;
  public function subMonths(?int $month):DateInterface;
  public function subWeeks(?int $week):DateInterface;
  public function subDays(?int $day):DateInterface;
  public function subHours(?int $hour):DateInterface;
  public function subMinutes(?int $minute):DateInterface;
  public function subSeconds(?int $second):DateInterface;

  public function modify(string $modifier):DateInterface;

  public function firstDay():DateInterface;
  public function lastDay():DateInterface;

  public function nextQuarter():DateInterface;
  public function nextYear():DateInterface;
  public function nextMonth():DateInterface;
  public function nextWeek():DateInterface;
  public function nextDay():DateInterface;

  public function previousQuarter():DateInterface;
  public function previousYear():DateInterface;
  public function previousMonth():DateInterface;
  public function previousWeek():DateInterface;
  public function previousDay():DateInterface;
  
  public function this():DateInterface;




  public function eq(DateInterface $datetime):bool;
  public function ne(DateInterface $datetime):bool;
  public function gt(DateInterface $datetime):bool;
  public function ge(DateInterface $datetime):bool;
  public function lt(DateInterface $datetime):bool;
  public function le(DateInterface $datetime):bool;

  public function year():int;
  public function month():int;
  public function week():int;
  public function day():int;
  public function hour():int;
  public function minute():int;
  public function second():int;
  public function toArray():array;

} 
