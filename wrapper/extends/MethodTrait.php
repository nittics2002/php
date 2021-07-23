<?php

/**
*   DefineMethodTrait
*
*   @version 210716
*/

declare(strict_types=1);

namespace Concerto\wrapper\extend;

trait DefineMethodTrait
{
    /**
    *   nth
    *
    *   @param int $position
    *   @return mixed
    */
    public function nth(
        int $position
    //): mixed {
    ) {
        $array = $this->toArray();
        $counter = 0;

        while ($counter < $position) {
          if ($position > 0) {

            next($array);
          } else {
            prev($array);
          }
      }
      return current($array);
    }

    /**
    *   first
    *
    *   @return mixed
    */
    public function first(
    //): mixed {
    ) {
      return static::nth(0);
    }
    
    /**
    *   last
    *
    *   @return mixed
    */
    public function last(
    //): mixed {
    ) {
      return static::nth(-1);
    }

    /**
    *  insert 
    *
    *   @param int $position
    *   @param mixed $value,
    *   @return static
    */
    public function insert(
        int $position,
        mixed $value
    //): mixed {
    ) {
      $array = $this->toArray();
      return new static(
        array_splice(
        $array,
        $position,
        0,
        $value,
      ));
    }
    
    /**
    *   delete
    *
    *   @param int|string $key
    *   @return static
    */
    public function delete(
      //int|string $key
      $key
    //): static {
    ) {
      $array = $this->toArray();
      unset($array[$key]);
      return new static(
        $array
      );
    }
    
    /**
    *  any 
    *
    *   @param mixed $value
    *   @return bool
    */
    public function any(
      //mixed $value
      $value
    ): bool {
      foreach($this->toArray() as $current) {
        if ($current === $value) {
          return true;
        }
      }
      return false;
    }
    
    /**
    *  every
    *
    *   @param mixed $value
    *   @return bool
    */
    public function every(
      //mixed $value
      $value
    ): bool {
      foreach($this->toArray() as $current) {
        if ($current !== $value) {
          return false;
        }
      }
      return true;
    }
   
    /**
    *  isEmpty 
    *
    *   @return bool
    */
    public function isEmpty(
    ): bool {
      return $this->toArray() === [];
    }
   
    /**
    *  append
    *
    *   @param StandardArrayObject $sao
    *   @return static
    */
    public function append(
    ): static {
      return new static(
        $this->toArray() +
        $sao->toArray()
      );
    }

    /**
    *  equals
    *
    *   @param StandardArrayObject $sao
    *   @return bool
    */
    public function equals(
    ): bool {
      return $this->toArray() === $sao->toArray();
    }

    /**
    *  notEquals
    *
    *   @param StandardArrayObject $sao
    *   @return bool
    */
    public function notEquals(
    ): bool {
      return !($this->equals($sao));
    }

    /**
    *   same 
    *
    *   @param StandardArrayObject $sao
    *   @return bool
    */
    public function same(
    ): bool {
      return $this->toArray() == $sao->toArray();
    }

    /**
    *  notSame
    *
    *   @param StandardArrayObject $sao
    *   @return bool
    */
    public function notSame(
    ): bool {
      return !($this->same($sao));
    }




}
