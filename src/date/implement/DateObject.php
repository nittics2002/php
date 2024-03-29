<?php

/**
*   DateObject
*
*   @version 211211
*/

declare(strict_types=1);

namespace Concerto\date\implement;

use DateTimeImmutable;
use InvalidArgumentException;
use Concerto\date\{
    DateInterface,
    DateIntervalInterface,
    DateTimezoneInterface,
};
use Concerto\date\implements\{
    DateIntervalObject,
    DatePeriodObject,
    DateTimeZoneObject,
};

class DateObject implements DateInterface
{
    /*
    *   @var DateTimeImmutable
    */
    protected DateTimeImmutable $datetime;

    /*
    *   @var int
    */
    protected static int $fiscal_start_month = 4;

    /*
    *   __construct
    *
    *   @param ?string $datetime
    *   @param ?DateTimezoneInterface $timezone
    *   @param ?int $fiscal_start_month
    */
    public function __construct(
        ?string $datetime = 'now',
        ?DateTimezoneInterface $timezone = null,
        ?int $fiscal_start_month = 4,
    ) {
        $this->fiscal_start_month = $fiscal_start_month;
        
        $this->datetime = new DateTimeImmutable(
            $datetime,
            $timezone,
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
    *   {inherit}
    */
    public static function createFromInterface(
        DateTimeInterface $object,
    ): DateInterface {
        $datetime = DateTimeImmutable::createFromInterface(
            $object,
        );
        
        return new static(
            $datetime->format(
                DateTimeInterface::ATOM,
            ),
            DateTimeZoneObject::createFromDateTimezone(
                $datetime->getTimeZone(),
            ),
        );
    }
    
    /*
    *   {inherit}
    */
    public  function createFromFormat(
        string $format,
        string $datetime,
        ?DateTimezoneInterface $timezone,
    ): DateInterface {
        if (mb_ereg_match('!', $format)) {
            $format = "!{$format}";
        }

        return static::createFromInterface(
            DateTimeImmutable::createFromFormat(
                $format,
                $datetime,
                $timezone,
            ),
        );
    }

    /*
    *   {inherit}
    */
    public static function now(): DateInterface
    {
        return new static('now');
    }

    /*
    *   {inherit}
    */
    public static function today(): DateInterface
    {
        return new static('today');
    }

    /*
    *   {inherit}
    */
    public static function yeasterday(): DateInterface
    {
        return new static('yeasterday');
    }

    /*
    *   {inherit}
    */
    public static function tomorrow(): DateInterface
    {
        return new static('tomorrow');
    }





    //thisHalf で　再検討中
    //ここをどうする?
    /*
    *   createFiscalStartDate
    *
    *   @param int $year
    *   @param ?int $month
    *   @param ?int $fiscal_start_month
    *   @return DateTimeInterface
    */
    protected static function createFiscalStartDate(
        int $year,
        ?int $month = null,
        ?int $fiscal_start_month = 4,
    ): DateTimeInterface {
        $month = $month ?? $fiscal_start_month;

        if ($month < 1 || $month > 12) {
            throw new InvalidArgumentException(
                "required 1 to 12"
            );
        }

        if ($month < $fiscal_start_month) {
            --$year;
        }

        return DateTimeImmutable::createFromFormat(
            '!Y-n',
            "{$year}-" . (string)static::$fiscal_start_month
        );
    }

    /*
    *   {inherit}
    */
    public static function thisHalf(
        ?int $fiscal_start_month,
    ): DateInterface {
        $today = static::today();
        
        $fiscal_start_month = $fiscal_start_month??
            static::$fiscal_start_month;
        
        $fiscal_start = static::createFromFormat(
            '!Yn',
            (string)$today->year() .
                (string)$fiscal_start_month
        );
        
        $next_fiscal_start = $fiscal_start->addMonths(6);
        
        if ($today >= $next_fiscal_start) {
            return $next_fiscal_start;
        }
        
        if ($today >= $fiscal_start) {
            return $fiscal_start;
        }
        
        return $fiscal_start->subMonths(6);
    }

    /*
    *   {inherit}
    */
    public static function thisQuater(): DateInterface
    {
        $month = (int)static::today()->format('n');

        if (
            $month < $fiscal_start_month
        ) {
            --$year;
        }

        return DateTimeImmutable::createFromFormat(
            '!Y-n',
            "{$year}-" . (string)static::$fiscal_start_month
        );
        
        
        
        
    }

    /*
    *   {inherit}
    */
    public static function thisYear(): DateInterface
    {
        return new static('this year');
    }

    /*
    *   {inherit}
    */
    public static function thisMonth(): DateInterface
    {
        return new static('this month');
    }

    /*
    *   datetimeToString
    *
    *   @param DateInterface $date
    *   @return string
    */
    protected function datetimeToString(
        DateInterface $date,
    ): string {
        return $date->fotmat(
            DateTimeInterface::ATOM,
        );
    }

    /*
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
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
    *   {inherit}
    */
    public function nextHalf(): DateInterface
    {
        return $this->addDuration(
            6,
            'M',
        );
    }

    /*
    *   {inherit}
    */
    public function nextQuater(): DateInterface
    {
        return $this->addDuration(
            3,
            'M',
        );
    }

    /*
    *   {inherit}
    */
    public function nextYear(): DateInterface
    {
        return $this->addDuration(
            1,
            'Y',
        );
    }

    /*
    *   {inherit}
    */
    public function nextMonth(): DateInterface
    {
        return $this->addDuration(
            1,
            'M',
        );
    }

    /*
    *   {inherit}
    */
    public function nextWeek(): DateInterface
    {
        return $this->addDuration(
            1,
            'W',
        );
    }

    /*
    *   {inherit}
    */
    public function nextDay(): DateInterface
    {
        return $this->addDuration(
            1,
            'D',
        );
    }

    /*
    *   {inherit}
    */
    public function previousHalf(): DateInterface
    {
        return $this->subDuration(
            6,
            'M',
        );
    }

    /*
    *   {inherit}
    */
    public function previousQuater(): DateInterface
    {
        return $this->subDuration(
            3,
            'M',
        );
    }

    /*
    *   {inherit}
    */
    public function previousYear(): DateInterface
    {
        return $this->subDuration(
            1,
            'Y',
        );
    }

    /*
    *   {inherit}
    */
    public function previousMonth(): DateInterface
    {
        return $this->subDuration(
            1,
            'M',
        );
    }

    /*
    *   {inherit}
    */
    public function previousWeek(): DateInterface
    {
        return $this->subDuration(
            1,
            'W',
        );
    }

    /*
    *   {inherit}
    */
    public function previousDay(): DateInterface
    {
        return $this->subDuration(
            1,
            'D',
        );
    }

    /*
    *   {inherit}
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
    *   {inherit}
    */
    public function firstDayOfMonth(): DateInterface
    {
        $result = $this->datetime->modify(
            'first day of'
        );
    }

    /*
    *   {inherit}
    */
    public function lastDayOfMonth(): DateInterface
    {
        $result = $this->datetime->modify(
            'last day of'
        );
    }

    /*
    *   {inherit}
    */
    public function same(
        DateInterface $datetime,
    ): bool {
        return $this->datetime === $datetime;
    }

    /*
    *   {inherit}
    */
    public function different(
        DateInterface $datetime,
    ): bool {
        return $this->datetime !== $datetime;
    }

    /*
    *   {inherit}
    */
    public function eq(
        DateInterface $datetime,
    ): bool {
        return $this->datetime == $datetime;
    }

    /*
    *   {inherit}
    */
    public function ne(
        DateInterface $datetime,
    ): bool {
        return $this->datetime != $datetime;
    }

    /*
    *   {inherit}
    */
    public function gt(
        DateInterface $datetime,
    ): bool {
        return $this->datetime > $datetime;
    }

    /*
    *   {inherit}
    */
    public function ge(
        DateInterface $datetime,
    ): bool {
        return $this->datetime >= $datetime;
    }

    /*
    *   {inherit}
    */
    public function lt(
        DateInterface $datetime,
    ): bool {
        return $this->datetime < $datetime;
    }

    /*
    *   {inherit}
    */
    public function le(
        DateInterface $datetime,
    ): bool {
        return $this->datetime <= $datetime;
    }

    /*
    *   {inherit}
    */
    public function toArray(): array
    {
        return getdate(
            $this->unixtime()
        );
    }

    /*
    *   {inherit}
    */
    public function year(): int
    {
        return (int)$this->datetime->format('Y');
    }

    /*
    *   {inherit}
    */
    public function month(): int
    {
        return (int)$this->datetime->format('m');
    }

    /*
    *   {inherit}
    */
    public function week(): int
    {
        return (int)$this->datetime->format('w');
    }

    /*
    *   {inherit}
    */
    public function day(): int
    {
        return (int)$this->datetime->format('d');
    }

    /*
    *   {inherit}
    */
    public function hour(): int
    {
        return (int)$this->datetime->format('H');
    }

    /*
    *   {inherit}
    */
    public function minute(): int
    {
        return (int)$this->datetime->format('i');
    }

    /*
    *   {inherit}
    */
    public function second(): int
    {
        return (int)$this->datetime->format('s');
    }

    /*
    *   {inherit}
    */
    public function microsecond(): int
    {
        return (int)$this->datetime->format('u');
    }

    /*
    *   {inherit}
    */
    public function timezone(): DateTimezoneInterface
    {
        $timezone = $this->datetime->getTimezone();
        return new DateIntervalObject(
            $timezone->getName()
        );
    }

    /*
    *   {inherit}
    */
    public function unixtime(): int
    {
        return $this->getTimestamp();
    }
    
    /*
    *   {inherit}
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
    *   toDateTime
    *
    *   @return DateTime
    */
    public function toDateTime(): DateTime
    {
        return DateTime::createFromImmutable(
            $this->datetime
        );
    }

    /*
    *   toDateTimeImmutable
    *
    *   @return DateTime
    */
    public function toDateTimeImmutable(): DateTimeImmutable
    {
        return $this->datetime;
    }
    
    /*
    *   fiscalStartMonth
    *
    *   @return int
    */
    public function fiscalStartMonth(): int
    {
        return $this->fiscal_start_month;
    }
    
    /**
    *   Hereinafter \DateTimeInterface
    */
    
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
            ),
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
    *   @return int|false
    */
    public function getTimestamp():int|false
    {
        return $this->datetime->getTimestamp();
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
