<?php

namespace test\_first;

use PHPUnit\Framework\TestCase;

use _first\_First1;

class First1Test extends TestCase
{
    
    
    public function FullNameProvider():array
    {
        return [
            [
                '青木',
                '太郎',
                null,
                '青木 太郎',
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
        ?string $separator = ' ',
        string $expected,
    ):void
    {
        $obj = new First1(
            $first_name,
            $last_name,
            $separator,
        );
        
        $this->assertEquals(
            $expected,
            $obj->fullName(),
        );
    }
    
}
