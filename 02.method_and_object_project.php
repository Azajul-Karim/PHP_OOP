<form action="" method="post">
  <table>
    <tr>
      <td>Enter The First Number : </td>
      <td><input type="number" name="num1"></td>
    </tr>
    <tr>
      <td>Enter The Second Number : </td>
      <td><input type="number" name="num2"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name='calculation' value="calculate"></td>
    </tr>
  </table>
</form>

<?php
if (isset($_POST['calculation'])) {
  $numOne = $_POST['num1'];
  $numTwo = $_POST['num2'];

  if (empty($numOne) or empty($numTwo)) {
    echo "Field Must Not Be Empty";
  } else {

    echo "First Number Is : " . $numOne . " Second Number Is : " . $numTwo . "<br>";

    $cal = new Calculation;
    $cal->sum($numOne, $numTwo);
    $cal->sub($numOne, $numTwo);
    $cal->mul($numOne, $numTwo);
    $cal->div($numOne, $numTwo);
  }
}



class Calculation
{
  function sum($a, $b)
  {
    echo "Summation = " . ($a + $b) . "<br>";
  }

  function sub($a, $b)
  {
    echo "Subtraction = " . ($a - $b) . "<br>";
  }

  function mul($a, $b)
  {
    echo "Multiplication = " . ($a * $b) . "<br>";
  }

  function div($a, $b)
  {
    echo "Division = " . ($a / $b) . "<br>";
  }
}
?>