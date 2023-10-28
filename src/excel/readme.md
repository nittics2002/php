#

## 231028

- ExcelSheet
    - excel vba macro っぽい感じで作成?
    - data,formuraなどの保持
    - data は dimention array で key で 行列位置
        - setData($dimention) で範囲を保存
        - アドレスとarray行列位置は ExcelRangeで変換
- ExcelRange
    - ExcelSheetとのリンク
    - range("A1:B10") method で範囲を
    - ->value($dimention) で ExcelSheet->setData()をcall
        - ExcelSheet->data に

- アドレスが飛び飛びになる可能性があるので、ksort()する?
    - workbook保存時にsort?
        - どこに機能を作る? writer? sheet? range?
            - rangeは駄目
            - write()時にsheetで?




## 230503

- TableArea

