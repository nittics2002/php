<?php

namespace dev\excel;


//Interface定義する

readonly class ExcelRangeAddress
{
    private string $address;

    private array $area;
    
    public function __cosntruct(
        ...$arguments
    ) {
        $length = count($arguments);

        if (
            $length === 1 &&
            static::validAddress($arguments[0])
        ) {
            $this->address = $arguments[0];
            $this->area = static::toArea($arguments[0]);
            return;
        }

        if (
            $length === 1 &&
            static::validArea($arguments)
        ) {
            $this->area = $arguments;
            $this->address = static::toAddress($arguments);
            return;
        }

        throw new InvalidArgumentException(
            "invalid arguments length"
        );
    }
    
    public static function createFromAddress(
        string $address,
    ): static {
        return new static($address);
    }

    public static function createFromArea(
        int|string $row_no1,
        int|string $column_no1,
        int|string|null $row_no2 = null,
        int|string|null $column_no2 = null,
    ):static {
        return new static(
            $row_no1,
            $column_no1,
            $row_no2,
            $column_no2,
        );
    }
        
    public static function validAddress(
        mixed $address,
    ):bool {
        if (!is_string($address)) {
            return false;
        }

        $splited1 = explode('::', $address);

        
        
        
    }
        
    public static function validArea(
        mixed $address,
    ):bool {

    }

    public function isCell():bool
    {
    }

    public function isRow():bool
    {
    }

    public function isArea():bool
    {
    }





    //行列番号からアドレスへ
    public static function toAddress():string
    {
    }

    //アドレスからへ行列番号
    //array{int,int,int,int}
    public static function toArea():array
    {
        
        return list($row_no1, $column_no1, $row_no1, $column_n2);
    }
}

