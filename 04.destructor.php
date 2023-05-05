<?php
//destructor

class Person
{
  public $name;
  public $age;
  public $id;

  function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function __destruct()
  {
    if (!empty($this->id)) {
      echo "Saving Person";
    }
  }
}

$personOne = new Person("Azajul", "23");

$personOne->setId(12);
