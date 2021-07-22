<?php

trait PropertiesTrait {
    public $same = true;
    public $different;
}

class PropertiesExample {
    use PropertiesTrait;
    public $same = true;
    public $different = true; // Fatal error
}


$obj = new PropertiesExample();
var_dump($obj->different);echo "\n";
