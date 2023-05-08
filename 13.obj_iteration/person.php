<?php
class Person
{
  public $name = "Topu";
  public $age = "23";
  public $skill = "Blogging";

  private $email = "topu@gmail.com";
  protected $password = '12345';

  function iteratorInner()
  {
    foreach ($this as $key => $value) {
      echo " inside class<br>";
      echo "<pre>";
      echo "$key => $value";
      echo "</pre>";
    }
  }
}
