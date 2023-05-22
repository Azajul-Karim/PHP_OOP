<?php
class Php
{

  static function frameWork()
  {
    echo static::getClass() . "<br>";
  }

  static function getClass()
  {
    return __CLASS__;
  }
}
