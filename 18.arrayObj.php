<?php

$arr = array(
  "HTML",
  "CSS",
  "JavaScript",
  "PHP",
);

$coding = new ArrayObject($arr);
$coding->append("Java");
$iterator = $coding->getIterator();

while ($iterator->valid()) {
  echo $iterator->current() . '<br />';
  $iterator->next();
}

echo '<br />';
//standerd PHP Library (SPL)

$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");

$ai = new ArrayIterator($cars);
$ci = new CachingIterator($ai);

// foreach ($ai as $key => $value) {
//   echo $key . ' => ' . $value . '<br />';
// }

foreach ($ci as $key => $value) {
  echo $value;
  if ($ci->hasNext()) {
    echo ' , ';
  } else {
    echo '.';
  }
}
