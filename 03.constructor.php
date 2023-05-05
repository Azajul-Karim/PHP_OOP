<?php
//constructor

class Person
{
  public $name;
  public $age;

  function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function personDetails()
  {
    echo "Person Name Is {$this->name} & Person Age Is {$this->age}" . "</br>";
  }
}

$personOne = new Person("Azajul", "23");

$personOne->personDetails();
