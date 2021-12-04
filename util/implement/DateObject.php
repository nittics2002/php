<?php

/**
*   DateObject
*
*   @version
*/

declare(strict_types=1);

namespace Concerto\util\implement;

use DateTimeImmutable;
use InvalidArgumentException;
use Concerto\util\{
    DateInterface,
    DateIntervalInterface,
    DateTimezoneInterface,
};
use Concerto\util\implements\{
    DateIntervalObject,
    DatePeriodObject,
};

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
        ?DateTimezoneInterface $timezone,
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
    *   thisHalf
    *
    *   @return DateInterface
    */
    public static function thisHalf(): DateInterface
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
    *   thisQuater
    *
    *   @return DateInterface
    */
    public static function thisQuater(): DateInterface
    {
    }

    /*
    *   thisYear
    *
    *   @return DateInterface
    */
    public static function thisYear(): DateInterface
    {
        return $this->modify(
            'this year'
        );
    }

    /*
    *   thisMonth
    *
    *   @return DateInterface
    */
    public static function thisMonth(): DateInterface
    {
        return $this->modify(
            'this month'
        );
    }

    /*
    *   datetimeToString
    *
    *   @param DateInterface $date
    *   @return string
    */
    protected datetimeToString(
        DateInterface $date
    ): string
    {
        return $date->fotmat(
            DateTimeInterface::ATOM,
        );
    }

    /*
    *   add
    *
    *   @param DateInterface $interval
    *   @return DateInterface
    */
    public function add(
        DateIntervalInterface $interval,
    ): DateInterface {
        $result = $this->datetime->add($interval);
        return new $this->__construct(
            $this->datetimeToString($result),
        );
    }

    /*
    *   sub
    *
    *   @param DateInterface $interval
    *   @return DateInterface
    */
    public function sub(
        DateIntervalInterface $interval,
    ): DateInterface {
        $result = $this->datetime->sub($interval);
        return new $this->__construct(
            $this->datetimeToString($result),
        );
    }

    /*
    *   addDuration
    *
    *   @param int $duration
    *   @param string $designator
    *   @param ?bool $isTime
    *   @return DateInterface
    */
    protected function addDuration(
        int $duration,
        string $designator,
        ?bool $isTime = false,
    ): DateInterface {
        return $duration < 0?
            $this->subDuration(
                abs($duration),
                $designator,
            ):
            $this->datetimeToString(
                $this->add(
                    new DateInterval(
                        $isTime? 'PT':'T' .
                        "{$duration}{$designator}"
                    ),
                ),
            );
    }

    /*
    *   subDuration
    *
    *   @param int $duration
    *   @param string $designator
    *   @param ?bool $isTime
    *   @return DateInterface
    */
    protected function subDuration(
        int $duration,
        string $designator,
        ?bool $isTime = false,
    ): DateInterface {
        return $duration < 0?
            $this->addDuration(
                abs($duration),
                $designator,
            ):
            $this->datetimeToString(
                $this->sub(
                    new DateInterval(
                        $isTime? 'PT':'T' .
                        "{$duration}{$designator}"
                    ),
                ),
            );
    }

    /*
    *   addHalfs
    *
    *   @param ?int $half
    *   @return DateInterface
    */
    public function addHalfs(
        ?int $half,
    ): DateInterface {
        return $this->addDuration(
            $year * 6,
            'M',
        );
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
        return $this->addDuration(
            $year * 3,
            'M',
        );
    }

    /*
    *   addYears
    *
    *   @param ?int $year
    *   @return DateInterface
    */
    public function addYears(
        ?int $year = 1,
    ): DateInterface {
        return $this->addDuration(
            $year,
            'Y',
        );
    }

    /*
    *   addMonths
    *
    *   @param ?int $month
    *   @return DateInterface
    */
    public function addMonths(
        ?int $month,
    ): DateInterface {
        return $this->addDuration(
            $year,
            'M',
        );
    }

    /*
    *   addWeeks
    *
    *   @param ?int $week
    *   @return DateInterface
    */
    public function addWeeks(
        ?int $week,
    ): DateInterface {
        return $this->addDuration(
            $year,
            'W',
        );
    }

    /*
    *   addDays
    *
    *   @param ?int $day
    *   @return DateInterface
    */
    public function addDays(
        ?int $day,
    ): DateInterface {
        return $this->addDuration(
            $year,
            'D',
        );
    }

    /*
    *   addHours
    *
    *   @param ?int $hour
    *   @return DateInterface
    */
    public function addHours(
        ?int $hour,
    ): DateInterface {
        return $this->addDuration(
            $year,
            'H',
            true,
        );
    }

    /*
    *   addMinutes
    *
    *   @param ?int $minute
    *   @return DateInterface
    */
    public function addMinutes(
        ?int $minute,
    ): DateInterface {
        return $this->addDuration(
            $year,
            'M',
            true,
        );
    }

    /*
    *   addSeconds
    *
    *   @param ?int $second
    *   @return DateInterface
    */
    public function addSeconds(
        ?int $second,
    ): DateInterface {
        return $this->addDuration(
            $year,
            'S',
            true,
        );
    }

    /*
    *   subHalfs
    *
    *   @param ?int $half
    *   @return DateInterface
    */
    public function subHalfs(
        ?int $half,
    ): DateInterface{
        return $this->subDuration(
            $year * 3,
            'M',
        );
    }

    /*
    *   subQuaters
    *
    *   @param ?int $quater
    *   @return DateInterface
    */
    public function subQuaters(
        ?int $quater,
    ): DateInterface {
        return $this->subDuration(
            $year * 3,
            'M',
        );
    }

    /*
    *   subYears
    *
    *   @param ?int $year
    *   @return DateInterface
    */
    public function subYears(
        ?int $year,
    ): DateInterface {
        return $this->subDuration(
            $year,
            'Y',
        );
    }

    /*
    *   subMonths
    *
    *   @param ?int $month
    *   @return DateInterface
    */
    public function subMonths(
        ?int $month,
    ): DateInterface {
        return $this->subDuration(
            $year,
            'M',
        );
    }

    /*
    *   subWeeks
    *
    *   @param ?int $week
    *   @return DateInterface
    */
    public function subWeeks(
        ?int $week,
    ): DateInterface {
        return $this->subDuration(
            $year,
            'W',
        );
    }

    /*
    *   subDays
    *
    *   @param ?int $day
    *   @return DateInterface
    */
    public function subDays(
        ?int $day,
    ): DateInterface {
        return $this->subDuration(
            $year,
            'D',
        );
    }

    /*
    *   subHours
    *
    *   @param ?int $hour
    *   @return DateInterface
    */
    public function subHours(
        ?int $hour,
    ): DateInterface {
        return $this->subDuration(
            $year,
            'H',
            true,
        );
    }

    /*
    *   subMinutes
    *
    *   @param ?int $minute
    *   @return DateInterface
    */
    public function subMinutes(
        ?int $minute,
    ): DateInterface {
        return $this->subDuration(
            $year,
            'M',
            true,
        );
    }

    /*
    *   subSeconds
    *
    *   @param ?int $second
    *   @return DateInterface
    */
    public function subSeconds(
        ?int $second,
    ): DateInterface {
        return $this->subDuration(
            $year,
            'S',
            true,
        );
    }

    /*
    *   nextHalf
    *
    *   @return DateInterface
    */
    public function nextHalf(): DateInterface
    {
        return $this->addDuration(
            6,
            'M',
        );
    }

    /*
    *   nextQuater
    *
    *   @return DateInterface
    */
    public function nextQuater(): DateInterface
    {
        return $this->addDuration(
            3,
            'M',
        );
    }

    /*
    *   nextYear
    *
    *   @return DateInterface
    */
    public function nextYear(): DateInterface
    {
        return $this->addDuration(
            1,
            'Y',
        );
    }

    /*
    *   nextMonth
    *
    *   @return DateInterface
    */
    public function nextMonth(): DateInterface
    {
        return $this->addDuration(
            1,
            'M',
        );
    }

    /*
    *   nextWeek
    *
    *   @return DateInterface
    */
    public function nextWeek(): DateInterface
    {
        return $this->addDuration(
            1,
            'W',
        );
    }

    /*
    *   nextDay
    *
    *   @return DateInterface
    */
    public function nextDay(): DateInterface
    {
        return $this->addDuration(
            1,
            'D',
        );
    }

    /*
    *   previousHalf
    *
    *   @return DateInterface
    */
    public function previousHalf(): DateInterface
    {
        return $this->subDuration(
            6,
            'M',
        );
    }

    /*
    *   previousQuater
    *
    *   @return DateInterface
    */
    public function previousQuater(): DateInterface
    {
        return $this->subDuration(
            3,
            'M',
        );
    }

    /*
    *   previousYear
    *
    *   @return DateInterface
    */
    public function previousYear(): DateInterface
    {
        return $this->subDuration(
            1,
            'Y',
        );
    }

    /*
    *   previousMonth
    *
    *   @return DateInterface
    */
    public function previousMonth(): DateInterface
    {
        return $this->subDuration(
            1,
            'M',
        );
    }

    /*
    *   previousWeek
    *
    *   @return DateInterface
    */
    public function previousWeek(): DateInterface
    {
        return $this->subDuration(
            1,
            'W',
        );
    }

    /*
    *   previousDay
    *
    *   @return DateInterface
    */
    public function previousDay(): DateInterface
    {
        return $this->subDuration(
            1,
            'D',
        );
    }

    /*
    *   modify
    *
    *   @param string $modifir
    *   @return DateInterface
    */
    public function modify(
        string $modifier,
    ): DateInterface {
        $result = $this->datetime->modify(
            $modifir
        );

        if ($result === false) {
            throw new InvalidArgumentException(
                "first day of month error"
            );
        }

        return new $this->__construct(
            $this->datetimeToString(
                $result
            )
        );
    }

    /*
    *   firstDayOfMonth
    *
    *   @return DateInterface
    */
    public function firstDayOfMonth(): DateInterface
    {
        $result = $this->datetime->modify(
            'first day of'
        );
    }

    /*
    *   lastDayOfMonth
    *
    *   @return DateInterface
    */
    public function lastDayOfMonth(): DateInterface
    {
        $result = $this->datetime->modify(
            'last day of'
        );
    }

    /*
    *   same
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function same(
        DateInterface $datetime,
    ): bool {
        return $this->datetime === $datetime;
    }

    /*
    *   different
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function different(
        DateInterface $datetime,
    ): bool {
        return $this->datetime !== $datetime;
    }

    /*
    *   eq
    *
    *   @param DateInterface $datetime
    *   @return bool
    */
    public function eq(
        DateInterface $datetime,
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
        DateInterface $datetime,
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
        DateInterface $datetime,
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
        DateInterface $datetime,
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
        DateInterface $datetime,
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
        DateInterface $datetime,
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
        return getdate(
            $this->unixtime()
        );
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
    
    /*
    *   period
    *
    *   @param DateIntervalInterface $interval
    *   @param ?bool $exclude_start_date
    *   @return DatePeriodInterface
    */
    public function period(
        DateIntervalInterface $interval,
        ?bool $exclude_start_date = false,
    ): DatePeriodInterface {
        return new DatePeriodObject(
            $this,
            $interval,
            $exclude_start_date?
                DatePeriod::EXCLUDE_START_DATE:0
        );
    }
    
    /*
    *   {inherit}
    * 
    *   @return DateInterface
    */
    public function diff(
        DateTimeInterface $targetObject,
        bool $absolute = false,
    ): DateInterface {
        $result = $this->datetime->diff(
            $targetObject,
            $absolute,
        );
        return new $this->__construct(
            $this->datetimeToString(
                $result,
            );
        );
    }
    
    /*
    *   {inherit}
    */
    public function format(
        string $format,
    ): string {
        return $this->datetime->format(
            $format,
        );
    }
    
    /*
    *   {inherit}
    */
    public function getOffset():int
    {
        return $this->datetime->getOffset();
    }
    
    /*
    *   {inherit}
    * 
    *   @return DateTimeZoneInterface
    */
    public function getTimezone():DateTimeZoneInterface
    {
        $result = $this->datetime->getTimezone();
        return new DateTimeZoneObject(
            $result->getName(),
        );
    }
}
