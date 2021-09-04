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
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function lower(
    string $text
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function upper(
    string $text
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function title(
    string $text
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function study(
    string $text
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function camel(
    string $text
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function snake(
    string $text
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @return DateInterface 
  */
  public static function kana(
    string $text,
    string $mode
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function length(
    string $text
  ):int;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function width(
    string $text
  ):int;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function trim(
    string $text
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public static function insert(
    string $text,
    string $insert,
    int $offset
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public static function delete(
    string $text,
    int $offset,
    int $length
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @return DateInterface 
  */
  public static function encode(
    string $text,
    string $code
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public static function match(
    string $text,
    string $pattern,
    ?string $option
  ):bool;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public static function matchAll(
    string $text,
    string $pattern,
    ?string $option
  ):array;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @return DateInterface 
  */
  public static function implode(
    array $array,
    string $separator
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @return DateInterface 
  */
  public static function explode(
    string $text,
    string $separator
  ):array;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @param ?DateTimezoneInterface $timezone 
  * @param string $datetime 
  * @return DateInterface 
  */
  public static function replace(
    string $text,
    string $pattern,
    string $replacement,
    ?string $option
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @param string $datetime 
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public static function splice(
    string $text,
    int $offset,
    ?int $length,
    ?string $replacement
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public static function substr(
    string $text,
    int $start,
    int $length
  ):string;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @return DateInterface 
  */
  public static function split(
    string $text,
    int $length
  ):array;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @param string $datetime 
  * @param ?DateTimezoneInterface $timezone 
  * @return DateInterface 
  */
  public static function search(
    string $text,
    string $pattern,
    ?string $option
  ):array;

  /*
  * createFromFormat
  *
  * @param string $format 
  * @return DateInterface 
  */
  public static function isEmpty(
    string $text
  ):bool;

} 
