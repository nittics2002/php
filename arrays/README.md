# SqliteArrayTable

##210503

- joinの時、テーブルを作成する必要がある
 - createTable()が必要




##210503

- SqliteTableCommon
 - appendSql()
 - create define_columns method

---

##sqlite3を利用したテーブルクラス

- sample1

`php
$sqliteArrayTable = new SqliteArrayTable($array);

$resultSqliteArrayTable = $sqliteArrayTable->join(
        $otherSqliteArrayTable,
        [['colA1' => 'colB4'],['colA4' => 'ColB4'],]
    )->groupBy(
        [['colA1' => 'aggFunction1']]
    )->execute();

$resultArray = $resultSqliteArrayTable->toArray();
`

###method

### constructor

- \__construct(array $data, ?array def_column_types[[colName => dataType],...])

#### const dataType

use php

- int
- float
- string
- datetime

use database

- INT
- DECIMAL
- TEXT
- TIMESTAMP

not used?

- DATE
- TIME

### two table method

@return self (mutable)

- join
- leftJoin
- union|unionAll
- intersect|intersectAll
- except|exceptAll


### self　table  method

@return self (mutable)

- groupBy (short-hand aggregate method)
- orderBy
- offset
- limit

- pivot
- stepWidth

### table real execute method

@return new static (immutable)

- execute (create table & sql exec & stmt fetchAll)

### select  method

@return static (immutable)

- selectColumns (alias select)
- selectRows(?offset, ?length) (short-hand offset+limit method)
- firstRow
- lastRow

@return array (immutable)

- toArray

### aggregete method

@return self (mutable)

- aggregate(column_name, function_namme)

#### aggregate function

@return numeric

- count
- sum
- max
- min
- avg
- and (bit and)
- or (bit or)

@return string

- string_agg(string $delimiter)

@return ?int 0|1|null

- every
- any

#### window function

???

### table method

@return array

- columnNames
- columnTypes [[colName => dataType],...]]

- parseColumns(...$column_names) (private)


### not support method

- where



