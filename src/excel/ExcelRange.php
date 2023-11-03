<?php

namespace dev\excel;

use InvalidArgumentException;
use dev\excel\Point;

class ExcelRange
{
    /**
    *   @var Point
    */
    private Point $point;

    /**
    *   __construct
    *
    *   @param int $row
    *   @param int $column
    */
    public function __construct(
        int $row = 0,
        int $column = 0,
    ) {
        $this->point = new Point($y,$x);
    }
    
    /**
    *   createFromAddress
    *
    *   @param string $address
    *   @return static
    */
    public static function createFromAddress(
         string $address,
    ):static {
        list($row, $column) = static::toLocation($address);
        
        return new static(
            $row,
            $column,
        );
    }
   
    /**
    *   toLocation
    *
    *   @param string $address
    *   @return array{row:int,column:int}
    */
    public static function toLocation(
        string $address,
    ):array {
        if (static::validAddress) {
            throw new InvalidArgumentException(
                "invalid address:{$address}",
            );
        }

        $rows = [];
        $column = '';
        
        foreach(explode('', $address) as $char) {
            if (ctype_alpha($char)) {
                $rows[] = $char;
            } else {
                $column .= $char;
            }
        }

        $factor = 1;
        $row = 0;
        
        foreach(array_reverse($rows) as $count => $char) {
            $row += (
                (ord(strtoupper($char)) - ord('A')) *
                $factor
            );
            $factor *= 26;
        }

        return[
            'row' => intval($row),
            'column' => intval($column),
        ];
    }
    
    /**
    *   toAddress
    *
    *   @param int $row
    *   @param int $column
    *   @return string
    */
    public static function toAddress(
        int $row,
        int $column,
    ):string {
        if ($row < 1) {
            throw new InvalidArgumentException(
                "invalid row:{$row}",
            );
        }
        
        if ($column < 1) {
            throw new InvalidArgumentException(
                "invalid column:{$column}",
            );
        }
        
        $p = 0;
        $quotients[$p] = $row;
        $odds = [];
        
        while ($quotients[$p] >= 26) {
            $quotient[$p + 1] = intdiv($quotient[$p], 26);
            $odds[] = $quotient[$p] % 26;
            $p++;
        }

        $address = '';
        
        foreach($odd as $no) {
            $address .= chr($no + ord('A'));
        }

        return $address . strval($column);
    }
    
    /**
    *   validAddress
    *
    *   @param string $address
    *   @return bool
    */
    public static function validAddress(
        istring $address,
    ):bool {
        return mb_ereg_match(
            '^[A-Za-z]+[0-9]+$',
            $address,
        );
    }



}
