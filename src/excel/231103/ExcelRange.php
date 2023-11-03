<?php

namespace dev\excel;

use dev\excel\ExcelSheet;


//Interface定義する

//readonly?
class ExcelRange
{

    private ExcelSheet $sheet;

    private ExcelRangeAddress $address;

    public function __cosntruct(
        ExcelSheet $sheet,
        string $address,
    ) {
        $this->sheet = $sheet;
        $this->sheet = new ExcelRangeAddress($address);
    }
    




    public function value(
        mixed $data,
    ):ExcelSheet
    {
        return $this->address->isCell()?
            $this->setDataToExcelSheet([[$data]]):
            ($this->address->isRow()?
                $this->setDataToExcelSheet([$data]):
                $this->setDataToExcelSheet($data)
            );
    }
    
    private function setDataToExcelSheet(
        array $dimension,
    ):ExcelSheet {
        //アドレスに対応した二次元配列キーに変換

        


        
    }





    

    
    
}

