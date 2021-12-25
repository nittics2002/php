<?php

declare(strict_types=1);

namespace test\Concerto\data\implement;

use PHPUnit\Framework\TestCase;
use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use Concerto\date\{
    DateInterface,
    //DateIntervalInterface,
    DateTimezoneInterface,
};
use Concerto\date\implements\{
    DateObject,
    //DateIntervalObject,
    //DatePeriodObject,
    //DateTimeZoneObject,
};


class DateObjectTest extends TestCase
{
    use ExpansionAssertionTrait;
    
    protected function setUp(): void
    {
        ini_set('date.timezone', 'Asia/Tokyo');
    }
    
    /**
    *   @test
    */
    public function preliminaryConfirmation()
    {
        $obj = new DateObject();
        
        $this->assertInstanceOf(
            DateTimeImmutable::class,
            $this->getPrivateProperty(
                $obj,
                'datetime',
            );
        );
        
        $this->assertInstanceOf(
            DateInterface::class,
            $obj,
        );
        
        $this->assertInstanceOf(
            DateTimeInterface::class,
            $obj,
        );
        
        $this->assertInstanceOf(
            DateTimeImmutable::class,
            $obj->toDateTimeImmutable(),
        );
        
        $this->assertInstanceOf(
            DateTime::class,
            $obj->toDateTime(),
        );
        
        $this->assertInstanceOf(
            DateTimeZoneInterface::class,
            $obj->getTimezone(),
        );
        
        $this->assertIsInt(
            $obj->fiscalStartMonth(),
        );        
        
        $this->assertGreaterThanOrEqual(
            1,
            $obj->fiscalStartMonth(),
        );        
        
        $this->assertLessThanOrEqual(
            12,
            $obj->fiscalStartMonth(),
        );        
    }

    /**
    *   @return ?string $datetime
    *   @return ?DateTimezoneInterface $timezone
    *   @return ?int $fiscal_start_month
    *   @return DateTimeImmutable $expected_datetime
    *   @return DateTimezoneInterface $expected_timezone
    *   @return int $expected_fiscal_start_month
    */
    protected function _constructProvider()
    {
        return [
            //all null
            [
                null,
                null,
                null,
                new DateTimeImmutable(),
                new DateTimeZone(),
                4,
            ],
            //set $datetime
            [
                'now',
                null,
                null,
                new DateTimeImmutable(),
                new DateTimeZone(),
                4,
            ],
            //set $timezone
            [
                null,
                new DateTimeZone('')
                null,
                new DateTimeImmutable(),
                new DateTimeZone('UTC')
                4,
            ],
            //set $fiscal_start_month
            [
                null,
                null,
                10,
                new DateTimeImmutable(),
                new DateTimeZone(),
                10,
            ],
        ];
    }
    
    /**
    *   @test
    *   @dataProvider _constructProvider
    */
    public function _construct(
        ?string $datetime,
        ?DateTimezoneInterface $timezone,
        ?int $fiscal_start_month,
        DateTimeImmutable $expected_datetime,
        DateTimezoneInterface $expected_timezone,
        int $expected_fiscal_start_month,
    )
    {
        
        $obj = new DateObject(
            $datetime,
            $timezone,
            $fiscal_start_month,
        );
        
        $this->assertEqualsDateTime(
            $expected_datetime,
            $obj->toDateTimeImmutable(),
        );
        
        $this->assertEquals(
            $expected_timezone,
            $obj->getTimezone(),
        );
        
        $this->assertEquals(
            $expected_fiscal_start_month,
            $obj->fiscalStartMonth(),
        );
    }
    
    
    
    
}
