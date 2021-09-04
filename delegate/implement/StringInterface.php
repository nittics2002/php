<?php

/**
* DateInterface
*
* @version 
*
*/

declare(strict_types=1);

namespace Concerto\delegator;

interface StringInterface
{

  /*
  * lower
  *
  * @param string $text 
  * @return string 
  */
  public static function lower(
    string $text
  ):string;

  /*
  * upper
  *
  * @param string $text 
  * @return string 
  */
  public static function upper(
    string $text
  ):string;

  /*
  * title
  *
  * @param string $text 
  * @return string 
  */
  public static function title(
    string $text
  ):string;

  /*
  * study
  *
  * @param string $text 
  * @return string 
  */
  public static function study(
    string $text
  ):string;

  /*
  * camel
  *
  * @param string $text 
  * @return string 
  */
  public static function camel(
    string $text
  ):string;

  /*
  * snake
  *
  * @param string $text 
  * @return string 
  */
  public static function snake(
    string $text
  ):string;

  /*
  * kana
  *
  * @param string $text 
  * @param string $mode 
  * @return string 
  */
  public static function kana(
    string $text,
    string $mode
  ):string;

  /*
  * length
  *
  * @param string $text 
  * @return int 
  */
  public static function length(
    string $text
  ):int;

  /*
  * width
  *
  * @param string $text 
  * @return int 
  */
  public static function width(
    string $text
  ):int;

  /*
  * trim
  *
  * @param string $text 
  * @return string 
  */
  public static function trim(
    string $text
  ):string;

  /*
  * insert
  *
  * @param string $text 
  * @param string $insert 
  * @param int $offset 
  * @return string 
  */
  public static function insert(
    string $text,
    string $insert,
    int $offset
  ):string;

  /*
  * delete
  *
  * @param string $text 
  * @param ?int $offset 
  * @param ?int $length 
  * @return string 
  */
  public static function delete(
    string $text,
    int $offset,
    int $length
  ):string;

  /*
  * encode
  *
  * @param string $text 
  * @param string $code 
  * @return string 
  */
  public static function encode(
    string $text,
    string $code
  ):string;

  /*
  * match
  *
  * @param string $text 
  * @param string $pattern 
  * @param ?string $option 
  * @return bool 
  */
  public static function match(
    string $text,
    string $pattern,
    ?string $option
  ):bool;

  /*
  * matchAll
  *
  * @param string $text 
  * @param string $pattern 
  * @param ?string $option 
  * @return array 
  */
  public static function matchAll(
    string $text,
    string $pattern,
    ?string $option
  ):array;

  /*
  * implode
  *
  * @param string $text 
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
  * @param string $text 
  * @param string $separator 
  * @return array 
  */
  public static function explode(
    string $text,
    string $separator
  ):array;

  /*
  * replace
  *
  * @param string $text 
  * @param string $pattern 
  * @param string $replacement 
  * @param ?string $option 
  * @return string 
  */
  public static function replace(
    string $text,
    string $pattern,
    string $replacement,
    ?string $option
  ):string;

  /*
  * split
  *
  * @param string $text 
  * @param int $offset 
  * @param ?iint $length 
  * @param ?string $replacement 
  * @return string 
  */
  public static function splice(
    string $text,
    int $offset,
    ?int $length,
    ?string $replacement
  ):string;

  /*
  * substr
  *
  * @param string $text 
  * @param int $start
  * @param ?int $length
  * @return string 
  */
  public static function substr(
    string $text,
    int $start,
    ?int $length = null
  ):string;

  /*
  * split
  *
  * @param string $text 
  * @param ?int $length
  * @return array 
  */
  public static function split(
    string $text,
    ?int $length = null
  ):array;

  /*
  * search
  *
  * @param string $text 
  * @param string $pattern 
  * @param ?string $option 
  * @return array 
  */
  public static function search(
    string $text,
    string $pattern,
    ?string $option = null
  ):array;

  /*
  * isEmpty
  *
  * @param string $text 
  * @return bool 
  */
  public static function isEmpty(
    string $text
  ):bool;

} 
