<?php
/*
access modifiers
1.public
2.private
3.protected
*/

// -> = object operator

class Person
{
  public $name = "Azajul Karim";
  public $age;

  //method
  public function personName()
  {
    echo "Person Name Is : " . $this->name . "</br>";
  }

  //method
  public function personAge($value)
  {
    echo "Person Age Is : " . $this->age = $value;
  }
}

$personOne = new Person("", "");
$personOne->personName();
$personOne->personAge(23);
