<?php
// include "ruby.php";
// include "java.php";
// include "php.php";

spl_autoload_register(function ($class_name) {
  include $class_name . ".php";
});


// function __autoload($class_name)
// {

//   include $class_name . ".php";
// }

$ruby = new Ruby;
$java = new Java;
$php = new Php;
