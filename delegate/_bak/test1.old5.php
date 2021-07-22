<?php

ini_set('error_reporting', E_ALL);
ini_set('display_error', '1');

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



////////////////////////////////////////////


//ブリッジ

trait BridgeTrait
{
    /**
    *   delegatorNamespace
    *
    *   @return string
    */
    abstract protected static function delegatorNamespace():string;
    
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
    *   isOriginalObject
    *
    *   @param mixed $target
    *   @return bool
    */
    protected static function isOriginalObject(mixed $target):bool
    {
        $originalNamespace = static::class;
        return $target instanceof $originalNamespace;
    }
    
    /**
    *   isDelegatorObject
    *
    *   @param mixed $target
    *   @return bool
    */
    protected static function isDelegatorObject(mixed $target):bool
    {
        $delegatorNamespace = static::delegatorNamespace();
        return $target instanceof $delegatorNamespace;
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
            $delegated[] = static::isOriginalObject($argument)?
                static::convertToDelegator($argument):
                $argument;
        }
        return $delegated;
    }
    
    /**
    *   convertAndExecuteAllArgumentsAndResult
    *
    *   @param array $arguments
    *   @return mixed
    */
    protected static function convertAndExecuteAllArgumentsAndResult(
        callable $callback,
        array $arguments
    ): mixed {
        $converted = static::convertAllArgumentsUgingDelegator(
            $arguments,
        );
        
        $result = call_user_func_array(
            $callback,
            $converted,
        );
        
        return static::isOriginalObject($result)?
            static::convertToDelegator($result):
            $result;
    }
}



//abstractだとnamespaceをstaticで取得する為、危険
class BridgeClass implements MyInterface
{
    use BridgeTrait;
    
    /**
    *   @var string 
    */
    protected static string $delegatorNamespace = LibClass::class;
    
    /**
    *   @var object 
    */
    protected object $delegator;
    
    /**
    *   @var string //MyInterface
    */
    protected string $id;
    
    /**
    *   __construct
    *
    *   @param array $arguments
    *   @return object
    */
    public function __construct(
        string $id
    ) {
        $delegatorNamespace = static::delegatorNamespace();
        
        
        $this->delegator = new $delegatorNamespace(
            $id
        );
        
        
        //var_dump($this->delegator);
        
        
        
        //$this->gelegator = call_user_func_array(
            //[
                //static::delegatorNamespace(),
                //static::$delegatorNamespace,
                //'__construct'
            //],
            //$id
        //);
        
        //MyInterface
        //delegatorで持つので不要
        //$this->id = $id;
    }
    
    /**
    *   {inherit}
    */
    protected static function delegatorNamespace():string
    {
        return static::$delegatorNamespace;
    }
    
    /**
    *   {inherit}
    */
    protected static function convertToOriginal(
        object $delegator
    ):object{
        return call_user_func_array(
            [
                static::class,
                '__construct',
            ],
            $delegator->getMyId(),
        );
    }
    
    /**
    *   {inherit}
    */
    protected static function convertToDelegator(
        object $original
    ):object{
        return call_user_func_array(
            [
                static::delegatorNamespace(),
                '__construct',
            ],
            $original->getId()
        );
    }
    
    
    
    
    
    //magic method用のabstract class作るか?
    
    /**
    *   {inherit}
    */
    public function __call(
        string $name,
        array $arguments
    ): mixed {
        return static::convertAndExecuteAllArgumentsAndResult(
            [static::class, $name],
            $arguments
        );
    }
    
    /**
    *   {inherit}
    */
    public static function __callStatic(
        string $name,
        array $arguments
    ): mixed {
        return static::convertAndExecuteAllArgumentsAndResult(
            [static::class, $name],
            $arguments
        );
    }
    
    
    
    
    //property　magic method 要検討
    
    
    /**
    *   {inherit}
    */
    public function __get($name) {
        return $this->delegator->$name;
    }
    
    /**
    *   {inherit}
    */
    public function __set($name, $arguments) {
        $this->delegator->$name = $arguments;
    }
    
    /**
    *   {inherit}
    */
    public function __isset($name) {
        return isset($this->delegator->$name);
    }
    
    /**
    *   {inherit}
    */
    public function __unset($name) {
        unset($this->delegator->$name);
    }
    
    
    //method injection MyInterface => must be convert
    /**
    *   {inherit}
    */
    public function injected(MyInterface $obj)
    {
        //return $this->__call('injected', [$obj]);
        
        return call_user_func_array(
            [
                static::class,
                '__call'
            ],
            ['injected', [$obj]]
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

echo "--------------------------\n";


$idBridge1 = 'ブリッジ1';
$BridgeClass1 = new BridgeClass($idBridge1);
var_dump($BridgeClass1->id);

echo "--------------------------\n";

$BridgeClass1->bridge('bridgeオリジナルmethod');


echo "--------------------------\n";

$idBridge2 = 'ブリッジ2';
$BridgeClass2 = new BridgeClass($idBridge2);
var_dump($BridgeClass2->id);

echo "--------------------------\n";

$BridgeClass1->injected($BridgeClass2);

echo "--------------------------END\n";
