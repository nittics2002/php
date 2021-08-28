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

  public function modify(string $modifier):DateInterface;

  public function eq(DateInterface $datetime):bool;
  public function ne(DateInterface $datetime):bool;
  public function gt(DateInterface $datetime):bool;
  public function ge(DateInterface $datetime):bool;
  public function lt(DateInterface $datetime):bool;
  public function le(DateInterface $datetime):bool;
  
  public function equalTo(DateInterface $datetime):bool;
  public function equalTo(DateInterface $datetime):bool;
  public function equalTo(DateInterface $datetime):bool;
  public function equalTo(DateInterface $datetime):bool;







} 
