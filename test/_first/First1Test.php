<?php

namespace test\_First;

use PHPUnit\Framework\TestCase;

class First1Test extends TestCase
{
    
    
    public function testFullNameProvider():array
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
    *   @dataProvider testFullNameProvider
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
