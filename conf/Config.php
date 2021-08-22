<?php

/**
*  config 
*
*   @version 210822
*/

declare(strict_types=1);

namespace Concerto\conf;

use ArrayObject;
use Concerto\arrays\ArrayDot;
use Concerto\conf\{
  ConfigInterface,
  ConfigReaderInterface,
};

class Config extends ArrayObject implements ConfigInterface
{
    /**
    *   __construct
    *
    *   @param ConfigReaderInterface $reader
    */
    public function __construct(
        ConfigReaderInterface $reader
    ){
        parent::__construct(
            $reader->read(),
            ArrayObject::ARRAY_AS_PROPS
        );
    }
    
    /**
    *   {inherit}
    **/
    public function has(
      string $name
    ):bool {
        return ArrayDot::has($this->getArrayCopy(), $name);
    }
    
    /**
    *   {inherit}
    **/
    public function get(
      string $name
    ):mixed{
        return ArrayDot::get($this->getArrayCopy(), $name);
    }
    
    /**
    *   set
    *
    *   @param string $name
    *   @param mixed $val
    *   @return static
    **/
    public function set(
      string $name,
      $val
    ): static {
        $data = ArrayDot::set($this->getArrayCopy(), $name, $val);
        parent::__construct(
            $data,
            ArrayObject::ARRAY_AS_PROPS
        );
        return static;
    }
    
    /**
    *   remove
    *
    *   @param string $name
    *   @return static
    **/
    public function remove(
        string $name
    ): static {
        $data = ArrayDot::remove($this->getArrayCopy(), $name);
        parent::__construct(
            $data,
            ArrayObject::ARRAY_AS_PROPS
        );
        return static;
    }
    
    /**
    *   replace
    *
    *   @param ConfigReaderInterface $reader
    *   @return static
    **/
    public function replace(
        ConfigReaderInterface $reader
    ):static {
        $src = $this->getArrayCopy();
        $dest = $reader->read();
        
        $data = array_replace_recursive($src, $dest);
        parent::__construct(
            $data,
            ArrayObject::ARRAY_AS_PROPS
        );
        return static;
    }
}
