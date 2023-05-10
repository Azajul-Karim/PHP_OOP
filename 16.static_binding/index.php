<?php
include 'php.php';


class phpChild extends Php
{
  function cms()
  {
  }
}

$php = new phpChild;
$php->frameWork();
echo "<hr>";
$php->cms();
