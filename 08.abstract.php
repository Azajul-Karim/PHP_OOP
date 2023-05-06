<?php

abstract class Student
{
  public $name;
  public $age;

  public function details()
  {
    echo $this->name . " Is " . $this->age . " Years Old.<br>";
  }
  abstract public function School();
}


class Boy extends Student
{
  public function describe()
  {
    echo parent::details() . "And I Am a High School Student.<br>";
  }

  public function School()
  {
    echo "I Like Story Book";
  }
}

$s = new Boy();
$s->name = "Kamal";
$s->age = 15;
$s->describe();
$s->School();
