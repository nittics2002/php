<?php

namespace Concerto\delegator;


interface StringInterface
{
  public static function lower(string $text):string;
  public static function upper(string $text):string;
  public static function title(string $text):string;
  public static function study(string $text):string;
  public static function camel(string $text):string;
  public static function snake(string $text):string;
  public static function kana(string $text string $mode):string;
  public static function length(string $text):int;
  public static function width(string $text):int;
  public static function trim(string $text):string;
  public static function insert(string $text, string $insert, int $position):string;
  public static function delete(string $text, int $start, int $length):string;
  public static function encode(string $text, string $code):string;
  public static function match(string $text, string $pattern, ?string $option):bool;
  public static function matchAll(string $text, string $pattern, ?string $option):array;
  public static function implode(array $array, string $separator):string;
  public static function explode(string $text, string $separator):array;
  public static function replace(string $text, string $pattern, string $replacement, ?string $option):string;
  public static function splice(string $text, int $offset, ?int $length, ?string $replacement):string;
  public static function substr(string $text, int $start, int $length):string;
  public static function split(string $text, int $length):array;
  public static function search(string $text, string $pattern, ?string $option):array;

} 
