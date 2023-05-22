<?php
include 'php.php';


class phpChild extends Php
{
  static function getClass()
  {
    return __CLASS__;
  }
}

$php = new Php();
$php->frameWork();

$childPhp = new phpChild();
$childPhp->frameWork();
