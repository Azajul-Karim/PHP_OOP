<?php
abstract class Php
{

  function frameWork()
  {
    echo "Base Calss Constant And Class Name ->" . __CLASS__ . "<br/>";
    echo "Base Calss Function And Class Name ->" . get_class($this) . "<br/>";
  }
}
