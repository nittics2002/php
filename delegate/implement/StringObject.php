<?php

/**
* StringObject
*
* @version 
*
*/

declare(strict_types=1);

namespace Concerto\delegator;

use InvalidArgumentException;
use RuntimeException;

class StringObject
{
  /*
  * lower
  *
  * @param string $string 
  * @return string 
  */
  public static function lower(
    string $string
  ):string{
    return mb_strtolower($string);
  }

  /*
  * upper
  *
  * @param string $string 
  * @return string 
  */
  public static function upper(
    string $string
  ):string{
    return mb_strtoupper($string);
  }

  /*
  * title
  *
  * @param string $string 
  * @return string 
  */
  public static function title(
    string $string
  ):string;

  /*
  * study
  *
  * @param string $string 
  * @return string 
  */
  public static function study(
    string $string
  ):string;

  /*
  * camel
  *
  * @param string $string 
  * @return string 
  */
  public static function camel(
    string $string
  ):string;

  /*
  * snake
  *
  * @param string $string 
  * @return string 
  */
  public static function snake(
    string $string
  ):string;

  /*
  * kana
  *
  * @param string $string 
  * @param string $mode 
  * @return string 
  */
  public static function kana(
    string $string,
    string $mode
  ):string{
    return mb_convert_kana(
      $string,
      $mode,
    );
  }

  /*
  * length
  *
  * @param string $string 
  * @return int 
  */
  public static function length(
    string $string
  ):int{
    return mb_strlen($string);
  }

  /*
  * width
  *
  * @param string $string 
  * @return int 
  */
  public static function width(
    string $string
  ):int{
    return mb_strwidth($string);
  }

  /*
  * trim
  *
  * @param string $string 
  * @return string 
  */
  public static function trim(
    string $string
  ):string;

  /*
  * insert
  *
  * @param string $string 
  * @param string $insert 
  * @param int $offset 
  * @return string 
  */
  public static function insert(
    string $string,
    string $insert,
    int $offset
  ):string;

  /*
  * delete
  *
  * @param string $string 
  * @param ?int $offset 
  * @param ?int $length 
  * @return string 
  */
  public static function delete(
    string $string,
    int $offset,
    int $length
  ):string;

  /*
  * encode
  *
  * @param string $string 
  * @param string $to_encoding 
  * @param string $from_encoding 
  * @return string 
  */
  public static function encode(
    string $string,
    string $to_encoding
    ?string $from_encoding,
  ):string {
    $result = mb_convert_encoding(
      $string,
      $to_encoding
      $from_encoding,
    );
    if ($result === false) {
      throw new InvalidArgumentException(
        "encode error"
      );
    }
    return $result;
  }

  /*
  * match
  *
  * @param string $string 
  * @param string $pattern 
  * @param ?string $option 
  * @return bool 
  */
  public static function match(
    string $string,
    string $pattern,
    ?string $option
  ):bool{
    return mb_ereg_match(
      $pattern,
      $string,
      $option,
    );
  }

  /*
  * matchAll
  *
  * @param string $string 
  * @param string $pattern 
  * @param ?string $option 
  * @return array 
  */
  public static function matchAll(
    string $string,
    string $pattern,
    ?string $option = 'msr',
  ):array{
    if (!mb_ereg_search_init($string, $pattern, $options)) {
      throw new InvalidArgumentException(
        "matchAll init error"
      );
    }

    if (!mb_ereg_search_setpos(0)) {
      throw new InvalidArgumentException(
        "matchAll position error"
      );
   }
   
   $matches = [];
   while(($regs = mb_ereg_search_regs()) !== false) {
     $matches[] = $regs;
   }
   return $matches;
 }

  /*
  * implode
  *
  * @param string $string 
  * @param string $separator 
  * @return string 
  */
  public static function implode(
    array $array,
    string $separator
  ):string;

  /*
  * explode
  *
  * @param string $string 
  * @param string $separator 
  * @return array 
  */
  public static function explode(
    string $string,
    string $separator
  ):array;

  /*
  * replace
  *
  * @param string $string 
  * @param string $pattern 
  * @param string $replacement 
  * @param ?string $option 
  * @return string 
  */
  public static function replace(
    string $string,
    string $pattern,
    string $replacement,
    ?string $option
  ):string{
    $result = mb_ereg_replace(
      $pattern,
      $replacement,
      $string,
      $option,
    );

    if ($result === false) {
      throw new InvalidArgumentException(
        "replace error"
      );
    }

    if ($result === null) {
      throw new InvalidArgumentException(
        "encoding error"
      );
    }
    return $result;
  }

  /*
  * split
  *
  * @param string $string 
  * @param int $offset 
  * @param ?iint $length 
  * @param ?string $replacement 
  * @return string 
  */
  public static function splice(
    string $string,
    int $offset,
    ?int $length,
    ?string $replacement
  ):string;

  /*
  * substr
  *
  * @param string $string 
  * @param int $start
  * @param ?int $length
  * @return string 
  */
  public static function substr(
    string $string,
    int $start,
    ?int $length = null
  ):string{
    return mb_substr(
      $string,
      $start,
      $length,
    );
  }

  /*
  * split
  *
  * @param string $string 
  * @param ?int $length
  * @return array 
  */
  public static function split(
    string $string,
    ?int $length = null
  ):array{
    $result = mb_split(
      $string,
      $length,
    );

    if ($result === false){
      throw new InvalidArgumentException(
        "sprit error"
      );
    }
    return $result;
  }

  /*
  * search
  *
  * @param string $string 
  * @param string $pattern 
  * @param ?string $option 
  * @return array 
  */
  public static function search(
    string $string,
    string $pattern,
    ?string $option = null
  ):array;

  /*
  * isEmpty
  *
  * @param string $string 
  * @return bool 
  */
  public static function isEmpty(
    string $string
  ):bool;

} 
