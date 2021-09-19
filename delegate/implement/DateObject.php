<?php

/**
*   DateObject
*
*   @version
*
*/

declare(strict_types=1);

namespace Concerto\contract;

use DateTimeImmutable;
use InvalidArgumentException;
use Concerto\contract\DateInterface;

class DateObject implements DateInterface
{

    /*
    *   @var DateTimeInterface
    */
    protected DateTimeInterface $datetime;

    /*
    *   @var int
    */
    protected static int $fiscal_start_month = 4;

    /*
    *   __construct
    *
    *   @param ?string $datetime
    *   @param ?DateTimezoneInterface $timezone
    */
    public function __construct(
        ?string $datetime = 'now',
        ?DateTimezoneInterface $timezone = null
    ) {
        $this->datetime = new DateTimeImmutable(
            $datetime,
            $timezone
        );
    }

    /*
    *   setFiscalStartMonth
    *
    *   @param int $month
    *   @return DateInterface
    */
    public function setFiscalStartMonth(
        int $month
    ): DateInterface {
        if ($month < 1 || $month > 12) {
            throw new InvalidArgumentException(
                "required 1 to 12"
            );
        }
        $this->fiscal_start_month = $month;
        return $this;
    }

    /*
    *   createFromFormat
    *
    *   @param string $format
    *   @param string $datetime
    *   @param ?DateTimezoneInterface $timezone
    *   @return DateInterface
    */
    public static function createFromFormat(
        string $format,
        string $datetime,
        ?DateTimezoneInterface $timezone
    ): DateInterface {
        if (mb_ereg_match('!', $format)) {
            $format = "!{$format}";
        }

        $this->datetime =
        DateTimeImmutable::createFromFormat(
            $format,
            $datetime,
            $timezone,
        );
        return $this;
    }

    /*
    *   now
    *
    *   @return DateInterface
    */
    public static function now(): DateInterface
    {
        return new $this->__construct();
    }

    /*
    *   today
    *
    *   @return DateInterface
    */
    public static function today(): DateInterface
    {
        return new $this->__construct(
            'today'
        );
    }

    /*
    *   yeasterday
    *
    *   @return DateInterface
    */
    public static function yeasterday(): DateInterface
    {
        return new $this->__construct(
            'yeasterday'
        );
    }

    /*
    *   tomorrow
    *
    *   @return DateInterface
    */
    public static function tomorrow(): DateInterface
    {
        return new $this->__construct(
            'tomorrow'
        );
    }

    /*
    *   createFiscalStartDate
    *
    *   @param int $year
    *   @param ?int $month
    *   @return DateTimeInterface
    */
    protected static function createFiscalStartDate(
        int $year,
        ?int $month = null
    ): DateTimeInterface {
        $month = $month ?? self::$fiscal_start_month;

        if ($month < 1 || $month > 12) {
            throw new InvalidArgumentException(
                "required 1 to 12"
            );
        }

        if ($month < self::$fiscal_start_month) {
            --$year;
        }

        return DateTimeImmutable::createFromFormat(
            '!Y-n',
            "{$year}-" . (string)self::$fiscal_start_month
        );
    }

    /*
    *   thisFiscalYear
    *
    *   @return DateInterface
    */
    public static function thisFiscalYear(): DateInterface
    {
        $today = self::today();

        return new $this->__construct(
            self::createFiscalStartDate(
                (int)$today->format('Y'),
                (int)$today->format('n'),
            )
        );
    }

    /*
    *   thisHalf
    *
    *   @return DateInterface
    */
    public static function thisHalf(): DateInterface
    {
    }

    /*
    *   thisQuater
    *
    *   @return DateInterface
    */
    public static function thisQuater(): DateInterface
    {
        return new $this->__construct(
            'tomorrow'
        );
    }

    /*
    *   thisYear
    *
    *   @return DateInterface
    */
    public static function thisYear(): DateInterface
    {
    }

    /*
    *   thisMonth
    *
    *   @return DateInterface
    */
    public static function thisMonth(): DateInterface
    {
    }

    /*
    *   add
    *
    *   @param DateInterface $interval
    *   @return DateInterface
    */
    public function add(
        DateIntervalInterface $interval
    ): DateInterface {
      $result = $this->datetime->add($interval);
      return new $this->__construct(
        $result->format(
          DateTimeInterface::ATOM
        );
      );
    }

    /*
    *   addContext
    *
    *   @param string $datetime
    *   @return DateInterface
    */
    public function addContext(
        string $datetime
    ): DateInterface {
    }

    /*
    *   sub
    *
    *   @param DateInterface $interval
    *   @return DateInterface
    */
    public function sub(
        DateIntervalInterface $interval
    ): DateInterface {
      $result = $this->datetime->sub($interval);
      return new $this->__construct(
        $result->format(
          DateTimeInterface::ATOM
        );
      );
    }

    /*
    *   subContext
    *
    *   @param string $datetime
    *   @return DateInterface
    */
    public function subContext(
        string $datetime
    ): DateInterface {
    }

    /*
    *   addQuaters
    *
    *   @param ?int $quater
    *   @return DateInterface
    */
    public function addQuaters(
        ?int $quater
    ): DateInterface {
    }

    /*
    *   addYears
    *
    *   @param ?int $year
    *   @return DateInterface
    */
    public function addYears(
        ?int $year
    ): DateInterface {
    }

    /*
    *   addMonths
    *
    *   @param ?int $month
    *   @return DateInterface
    */
    public function addMonths(
        ?int $month
    ): DateInterface {
    }

    /*
    *   addWeeks
    *
    *   @param ?int $week
    *   @return DateInterface
    */
    public function addWeeks(
        ?int $week
    ): DateInterface {
    }

    /*
    *   addDays
    *
    *   @param ?int $day
    *   @return DateInterface
    */
    public function addDays(
        ?int $day
    ): DateInterface {
    }

    /*
    *   addHours
    *
    *   @param ?int $hour
    *   @return DateInterface
    */
    public function addHours(
        ?int $hour
    ): DateInterface {
    }

    /*
    *   addMinutes
    *
    *   @param ?int $minute
    *   @return DateInterface
    */
    public function addMinutes(
        ?int $minute
    ): DateInterface {
    }

    /*
    *   addSeconds
    *
    *   @param ?int $second
    *   @return DateInterface
    */
    public function addSeconds(
        ?int $second
    ): DateInterface {
    }

    /*
    *   subQuaters
    *
    *   @param ?int $quater
    *   @return DateInterface
    */
    public function subQuaters(
        ?int $quater
    ): DateInterface {
    }

    /*
    *   subYears
    *
    *   @param ?int $year
    *   @return DateInterface
    */
    public function subYears(
        ?int $year
    ): DateInterface {
    }

    /*
    *   subMonths
    *
    *   @param ?int $month
    *   @return DateInterface
    */
    public function subMonths(
        ?int $month
    ): DateInterface {
    }

    /*
    *   subWeeks
    *
    *   @param ?int $week
    *   @return DateInterface
    */
    public function subWeeks(
        ?int $week
    ): DateInterface {
    }

    /*
    *   subDays
    *
    *   @param ?int $day
    *   @return DateInterface
    */
    public function subDays(
        ?int $day
    ): DateInterface {
    }

    /*
    *   subHours
    *
    *   @param ?int $hour
    *   @return DateInterface
    */
    public function subHours(
        ?int $hour
    ): DateInterface {
    }

    /*
    *   subMinutes
    *
    *   @param ?int $minute
    *   @return DateInterface
    */
    public function subMinutes(
        ?int $minute
    ): DateInterface {
    }

    /*
    *   subSeconds
    *
    *   @param ?int $second
    *   @return DateInterface
    */
    public function subSeconds(
        ?int $second
    ): DateInterface {
    }

    /*
    *   nextQuater
    *
    *   @return DateInterface
    */
    public function nextQuater(): DateInterface
    {
    }

    /*
    *   nextYear
    *
    *   @return DateInterface
    */
    public function nextYear(): DateInterface
    {
    }

    /*
    *   nextMonth
    *
    *   @return DateInterface
    */
    public function nextMonth(): DateInterface
    {
    }

    /*
    *   nextWeek
    *
    *   @return DateInterface
    */
    public function nextWeek(): DateInterface
    {
    }

    /*
    *   nextDay
    *
    *   @return DateInterface
    */
    public function nextDay(): DateInterface
    {
    }

    /*
    *   previousQuater
    *
    *   @return DateInterface
    */
    public function previousQuater(): DateInterface
    {
    }

    /*
    *   previousYear
    *
    *   @return DateInterface
    */
    public function previousYear(): DateInterface
    {
    }

    /*
    *   previousMonth
    *
    *   @return DateInterface
    */
    public function previousMonth(): DateInterface
    {
    }

    /*
    *   previousWeek
    *
    *   @return DateInterface
    */
    public function previousWeek(): DateInterface
    {
    }

    /*
    *   previousDay
    *
    *   @return DateInterface
    */
    public function previousDay(): DateInterface
    {
    }

    /*
    *   modify
    *
    *   @param string $modifir
    *   @return DateInterface
    */
    public function modify(
        string $modifier
    ): DateInterface {
    }

    /*
    *   firstDayOfMonth
    *
    *   @return DateInterface
    */
    public function firstDayOfMonth(): DateInterface
    {
    }

    /*
    *   lastDayOfMonth
    *
    *   @return DateInterface
    */
    public function lastDayOfMonth(): DateInterface
    {
    }

    /*
    *   same
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function same(
        DateInterface $datetime
    ): bool {
      return $this->datetime === $datetime;
    }

    /*
    *   eq
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function eq(
        DateInterface $datetime
    ): bool {
      return $this->datetime == $datetime;
    }

    /*
    *   ne
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function ne(
        DateInterface $datetime
    ): bool {
      return $this->datetime != $datetime;
    }

    /*
    *   gt
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function gt(
        DateInterface $datetime
    ): bool {
      return $this->datetime > $datetime;
    }

    /*
    *   ge
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function ge(
        DateInterface $datetime
    ): bool {
      return $this->datetime >= $datetime;
    }

    /*
    *   lt
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function lt(
        DateInterface $datetime
    ): bool {
      return $this->datetime < $datetime;
    }

    /*
    *   le
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function le(
        DateInterface $datetime
    ): bool {
      return $this->datetime <= $datetime;
    }

    /*
    *   toArray
    *
    *   @return array
    */
    public function toArray(): array
    {
    }

    /*
    *   year
    *
    *   @return int
    */
    public function year(): int
    {
      return (int)$this->datetime->format('Y');
    }

    /*
    *   month
    *
    *   @return int
    */
    public function month(): int
    {
      return (int)$this->datetime->format('m');
    }

    /*
    *   week
    *
    *   @return int
    */
    public function week(): int
    {
      return (int)$this->datetime->format('w');
    }

    /*
    *   day
    *
    *   @return int
    */
    public function day(): int
    {
      return (int)$this->datetime->format('d');
    }

    /*
    *   hour
    *
    *   @return hour
    */
    public function hour(): int
    {
      return (int)$this->datetime->format('H');
    }

    /*
    *   minute
    *
    *   @return int
    */
    public function minute(): int
    {
      return (int)$this->datetime->format('i');
    }

    /*
    *   second
    *
    *   @return int
    */
    public function second(): int
    {
      return (int)$this->datetime->format('s');
    }

    /*
    *   microsecond
    *
    *   @return int
    */
    public function microsecond(): int
    {
      return (int)$this->datetime->format('u');
    }

    /*
    *   timezone
    *
    *   @return DateTimezoneInterface
    */
    public function timezone(): DateTimezoneInterface
    {
      $timezone = $this->datetime->getTimezone();
      return new DateIntervalObject(
        $timezone->getName()
      );
    }

    /*
    *   unixtime
    *
    *   @return int
    */
    public function unixtime(): int
    {
      return $this->datetime->getTimestamp();
    }
}
