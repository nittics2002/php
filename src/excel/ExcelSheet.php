<?php

namespace dev\excel;

use IteratorAggregate;
use InvalidArgumentException;
use dev\excel\{
    ExcelRange,
    ExcelRangeAddress,
;

//Interface定義する

class ExcelSheet
{
    /**
    *   @var array{(int|float|string)[]}
    */ 
    private array $data = [];

    private XXX $formura = [];

    public function setData(ExcelRange $range):static
    {
        array_replace_recursive(
            $this->data,
            $range->toArray(),
        );
        return $this;
    }

    public function range(
        string $range_address,
    ): ExcelRange {
        return new ExcelRange(
            $this,
            $range_address,
        );
    }
    
    public function formula(){}


    


    //writer->write()時に ksort()したい
    //アドレスが飛び飛びになる可能性があるため
    //writer->write() はセル位置を考えて保存する必要
    public function getIterator():Iterable
    {
        ksort($this->data, SORT_NATURAL);

        foreach($this->data as $row_no => $rows) {
            ksort($rows, SORT_NATURAL);
            yield $row_no => $rows;
        }
    }













///////////////////////////////

    //行列番号からアドレスへ
    public static function toRangeAddress(
        int|string $row_no1,
        int|string $column_no1,
        int|string|null $row_no2 = null,
        int|string|null $column_no2 = null,
    ):ExcelRangeAddress {
        if (
            !is_null($row_no2) && is_null($row_no2) ||
            is_null($row_no2) && !is_null($row_no2)
        ) {
            throw new InvalidArgumentException(
                "row_no2|column_no2 must be NULL&NULL | !NULL&!NULL" .
                "row_no2={$row_no2},column_no2={$column_no2}",
            )


        
    }

    //アドレスからへ行列番号
    //array{int,int,int,int}
    public static function toRange(
        string $address,
    ):array{



        return list($row_no1, $column_no1, $row_no1, $column_n2);
    }
    

    
    
}

