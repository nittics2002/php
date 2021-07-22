<?php

//ライブラリ側

interface LibInterface
{
    public function injected(LibInterface $obj);
    //convertDelegatorで使う
    public function getId();
} 

class LibClass implements LibInterface
{
    public $id;
    
    public function __construct($id)
    {
        $this->id = $id;
    }
    
    public function injected(LibInterface $obj)
    {
        var_dump($obj->id);
        return $this->id;
    }
    
    public function extended($str)
    {
        var_dump($str);
        return $str;
    }
    
    //convertDelegatorで使う
    public function getId()
    {
        return $this->id;
    }
}

//プロジェクト側

interface MyInterface
{
    public function injected(MyInterface $obj);
} 

class MyClass implements MyInterface
{
    public $id;
    
    public function __construct($id)
    {
        $this->id = $id;
    }
    
    public function injected(MyInterface $obj)
    {
        var_dump($obj->id);
        return $this->id;
    }
    
    //convertOriginalで使う
    public function getMyId()
    {
        return $this->id;
    }
}

//ライブラリ側

$idLib1 = 'ライブラリ1';
$LibClass1 = new LibClass($idLib1);
var_dump($LibClass1->id);

$idLib2 = 'ライブラリ2';
$LibClass2 = new LibClass($idLib2);
var_dump($LibClass2->id);

$str = '継承した関数';
$LibClass1->extended($str);

$LibClass1->injected($LibClass2);



//プロジェクト側

$idMy1 = 'プロジェクト1';
$MyClass1 = new MyClass($idMy1);
var_dump($MyClass1->id);

$idMy2 = 'プロジェクト2';
$MyClass2 = new MyClass($idMy2);
var_dump($MyClass2->id);

$MyClass1->injected($MyClass2);

//ブリッジ


//traitで汎用化できないか？
trait BridgeTrait
{
    /**
    *   @var object 
    */
    protected object $gelegator;
    
    /**
    *   @var string 
    */
    protected string $originalNamespace;
    
    /**
    *   @var string 
    */
    protected string $delegatorNamespace;
    
    /**
    *   convertToOriginal
    *
    *   @param object $original
    *   @return object
    */
    abstract protected static function convertToOriginal(
        object $delegator
    ):object;
    
    /**
    *   convertToDelegator
    *
    *   @param object $original
    *   @return object
    */
    abstract protected static function convertToDelegator(
        object $original
    ):object;
    
    /**
    *   delegator
    *
    *   @return object
    */
    protected static function delegator()
    {
        return $this->gelegator;
    }
    
    /**
    *   originalNamespace
    *
    *   @return string
    */
    protected static function originalNamespace():string
    {
        return $this->originalNamespace;
    }
    
    /**
    *   delegatorNamespace
    *
    *   @return string
    */
    protected static function delegatorNamespace():string
    {
        return $this->delegatorNamespace;
    }
    
    /**
    *   isOriginalObject
    *
    *   @param mixed $target
    *   @return bool
    */
    protected static function isOriginalObject(mixed $target):bool
    {
        return $target instanceof $this->originalNamespace();
    }
    
    /**
    *   isDelegatorObject
    *
    *   @param mixed $target
    *   @return bool
    */
    protected static function isDelegatorObject(mixed $target):bool
    {
        return $target instanceof $this->delegatorNamespace();
    }
    
    /**
    *   constructDelegator
    *
    *   @param array $arguments
    *   @return object
    */
    protected static function constructDelegator(
        array $arguments
    ):object{
        $result = call_user_func_array(
            [$this->delegator(), '__construct'],
            $arguments,
        );
        
        if (!$this->isDelegatorObject($result)) {
            throw new LogicException(
                "faild constructDelegator:" .
                    var_export($arguments, true)
            );
        }
        
        return $result;
    }
    
    /**
    *   convertAllArgumentsUgingDelegator
    *
    *   @param array $arguments
    *   @return array
    */
    protected static function convertAllArgumentsUgingDelegator(
        array $arguments
    ):object {
        $delegated = [];
        foreach($arguments as $argument) {
            $delegated[] = $this->isOriginalObject($argument)?
                $this->convertDelegator($argument):
                $argument;
        }
        return $delegated;
    }
    
    /**
    *   convertAllArgumentsAndResult
    *
    *   @param array $arguments
    *   @return mixed
    */
    protected function convertAndExecuteAllArgumentsAndResult(
        callable $callback、
        array $arguments,
    ): mixed {
        
        
    }
    
    
    
    
    
    
    /**
    *   {inherit}
    */
    public function __call(
        string$name,
        array $arguments
    ): mixed {
        $delegated_arguments =
            $this->convertAllArgumentsUgingDelegator($arguments);
        
        $result = call_user_func_array(
            [$this->delegator(), $name],
            $delegated_arguments,
        );
        
        return $this->isOriginalObject($result)?
            $this->convertDelegator($result):
            $result;
    }
    
    /**
    *   {inherit}
    */
    public function __callStatic(
        string$name,
        array $arguments
    ): mixed {
        
        
        //呼び出すmethodもstaticの必要が......
        
    }
    
    
}

class BridgeClass implements MyInterface
{
    use BridgeTrait;
    
    public $id;
    
    public function __construct($id)
    {
        $this->id = $id;
        $this->constructDelegator(
            "delegator_{$id}"
        );
    }
    
    //abstract overwrite
    //original<=>delegator変換の定義
    protected function convertToOriginal(
        object $delegator
    ):object {
        return $this->constructDelegator(
            $delegator->getId()
        );
    }
    
    protected function convertToDelegator(
        object $original
    ):object {
        return $this->constructDelegator(
            $original->getMyId()
        );
    }
    
    //変換が必要なimplements methods
    public function injected(MyInterface $obj)
    {
        return $this->__call(__METHOD__, [$object]);
    }
    
    //magic methodのdelegate
    public function __get($name) {
        return $this->__call(__METHOD__, [$name]);
    }
    
    public function __set($name, $arguments) {
        $this->__call(
            __METHOD__, 
            array_merge([$name], $arguments),
        );
    }
    
    public function __isset($name) {
        return $this->__call(__METHOD__, [$name]);
    }
    
    public function __unset($name, $arguments) {
        $this->__call(
            __METHOD__, 
            array_merge([$name], $arguments),
        );
    }
    
    
    
    //bridgeオリジナルmethod
    public function bridge($str)
    {
        var_dump($str);
        return $str;
    }
}

/////////////////////////////

//こんな感じで実行したい

$idBridge1 = 'ブリッジ1';
$BridgeClass1 = new BridgeClass($idBridge1);
var_dump($BridgeClass1->id);

$idBridge2 = 'ブリッジ2';
$BridgeClass2 = new BridgeClass($idBridge2);
var_dump($BridgeClass2->id);

$BridgeClass1->injected($BridgeClass2);

