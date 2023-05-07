<?php

spl_autoload_register(function ($class_name) {
  include $class_name . ".php";
});



$php = new Method;
$php->frameWork()->cms();

$cal = new Calculation();
$cal->getValue('10');
