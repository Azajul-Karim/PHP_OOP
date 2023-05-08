<?php
include "person.php";

spl_autoload_register(function ($class_name) {
  include $class_name . ".php";
});






$person = new Person;
foreach ($person as $key => $value) {
  echo " inside class<br>";
  echo "<pre>";
  echo "$key => $value";
  echo "</pre>";
}
