<?php
trait Java
{
  public function javaCoder()
  {
    return "I Love Java <br>";
  }
}

trait Php
{
  public function phpCoder()
  {
    return "I Love PHP <br>";
  }
}
class CoderOne
{
  use java, php;
}

class CoderTwo
{
  // use Php;
}

$c1 = new CoderOne;
echo $c1->javaCoder();
// $c2 = new CoderTwo;
echo $c1->phpCoder();
