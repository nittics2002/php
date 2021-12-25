<?php



namespace test\Concerto;



trait ExpansionAssertionTrait
{

    //https://github.com/sebastianbergmann/phpunit/issues/2456

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