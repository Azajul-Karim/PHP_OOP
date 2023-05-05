<?php
//constructor

class Person
{
  public $name;
  public $age;

  public function personName()
  {
    echo "Person Name Is : " . $this->name . "</br>";
  }

  public function personAge($value)
  {
    echo "Person Age Is : " . $this->age = $value;
  }
}

$personOne = new Person;
$personOne->personName();

$personOne->personAge(23);
