<?php

namespace test\_first;

use PHPUnit\Framework\TestCase;
use _first\First1;

class First1Test extends TestCase
{
    
    
    public function FullNameProvider():array
    {
        return [
            [
                '青木',
                '太郎',
                null,
                '太郎 青木',
            ],
        ];
    }
    
    /**
    *   @test
    *   @dataProvider FullNameProvider
    */
    public function testFullName(
        string $first_name,
        string $last_name,
        ?string $separator,
        string $expected,
    ):void
    {
        if ($separator === null) {
            $obj = new First1(
                $first_name,
                $last_name,
            );
        } else {
            $obj = new First1(
                $first_name,
                $last_name,
                $separator,
            );
        }
        
        $this->assertEquals(
            $expected,
            $obj->fullName(),
        );
    }
    
}
