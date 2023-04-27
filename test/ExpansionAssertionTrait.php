<?php

declare(strict_types=1);

namespace test\Concerto;

trait ExpansionAssertionTrait
{
    /**
    *   assertEqualsDateTime
    * 
    *   https://github.com/sebastianbergmann/phpunit/issues/2456
    * 
    *   @param mixed $expected
    *   @param mixed $actual
    *   @param ?float $delta_second
    *   @param ?string $message
    */
    public function assertEqualsDateTime(
       mixed $expected,
       mixed $actual,
       ?float $delta_second = 1.0,
       ?string $message = '',
   ) {
       $this->assertEqualsWithDelta(
           $expected,
           $actual,
           $delta_second,
           $message = '',
       );
   }
}