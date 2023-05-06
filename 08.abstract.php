<?php

class Student
{
  public $name;
  public $age;

  public function details()
  {
    echo $this->name . " is " . $this->age . " Years Old ";
  }
}

$s = new Student;
$s->name = "Kamal";
$s->age = 15;
