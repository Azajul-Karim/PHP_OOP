<?php
/*
     Magic Method
1.__construct
2.__destruct
3.__get($property)
4.__set($property, $value)
5.__call($method, $arg_array)
*/

class Student
{

  public $name;

  public function describe()
  {
    echo "I Am A Student <br>";
  }

  public function __get($pm)
  {
    echo "$pm Dose Not Exist <br>";
  }

  public function __set($pm, $value)
  {
    echo "We Set $pm->$value <br>";
  }

  public function __call($pm, $value)
  {
    echo "There Is No " . $pm .  " Method And Arguments : ", implode(', ', $value);
  }
}

$st = new Student();
$st->describe();
// $st->Hasan;
// $st->age = 15;
// $st->notExistMethod('2', '8', '9');



//class and method existence

if (class_exists("Student")) {
  echo "Class Found";
} else {
  echo "Class Not Found";
}

echo "<br>";

if (method_exists($st, 'describe')) {
  echo "Method  Found";
} else {
  echo "Method Not Found";
}
