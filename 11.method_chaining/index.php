<?php

spl_autoload_register(function ($class_name) {
  include "method_chaining/" . $class_name . ".php";
});


// $php = new Method;
// $php->frameWork()->cms();

$cal = new Calculation();
echo "Result Is : " . $cal->getValue(3, 5)->getResult();
