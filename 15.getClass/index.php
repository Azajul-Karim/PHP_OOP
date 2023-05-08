<?php
include 'php.php';


class phpChild extends Php
{
  function cms()
  {
    echo "Child Calss Constant And Class Name ->" . __CLASS__ . "<br/>";
    echo "Child Calss Function And Class Name ->" . get_class($this) . "<br/>";
  }
}

$php = new phpChild;
$php->frameWork();
echo "<hr>";
$php->cms();
