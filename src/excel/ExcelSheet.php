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

    /**
    *   replaceData
    *
    *   @param string $address
    *   @param array $range
    *   @return static
    */ 
    public function replaceData(
        string $address,
        array $dimension,
    ):static {
        $addend = $this->reLocate(
            $address,
            $dimension,
        );
        
        $this->data = array_replace_recursive(
            $this->data,
            $addend,
        );
        
        return $this;
    }

    /**
    *   reLocate
    *
    *   @param string $address
    *   @param array $range
    *   @return array{mixed[]}
    */ 
    private function reLocate(
        string $address,
        array $dimension,
    ):array {
        list($row_no, $colimn_no) =
            ExcelRange::toLocation($address);

        $row_length = count($dimension);
        
        $replaced = array_combine(
            range($row_no, $row_no + $row_length),
            $dimension,
        );

        $column_length = count(current($dimension));

        foreach($replaced as &$row) {
            $row = array_combine(
                range($colimn_no, $colimn_no + $column_length),
                $row,
            );
        };
        unset($row);

        return $replaced;
    }





    
    
}

