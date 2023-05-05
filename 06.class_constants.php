<?php
// Constant

// class UserData
// {
//   public $user;
//   public $userId;
//   const NAME = "Abdullah";

//   public function __construct($userName, $userId)
//   {
//     $this->user = $userName;
//     $this->userId = $userId;

//     echo "User Name Is {$this->user} & User Id Is {$this->userId}";
//   }

//   public function display()
//   {
//     echo "Name Is : " . UserData::NAME;
//   }
// }

// $ur = new UserData("Mamun", 23);
// echo "<br>";
// $ur->display();
// echo "<br>";


//Static Properties And Method
// class UserData
// {
//   public $user;
//   public $userId;
//   public static $age = 30;

//   public function __construct($userName, $userId)
//   {
//     $this->user = $userName;
//     $this->userId = $userId;

//     echo "User Name Is {$this->user} & User Id Is {$this->userId}";
//   }

//   function display()
//   {
//     echo "Age Is : " . self::$age;
//   }
// }

// $ur = new UserData("Mamun", 23);
// echo "<br>";
// // $ur->display();
// UserData::display();


// Inheritance

// class UserData
// {
//   public $user;
//   public $userId;

//   public function __construct($userName, $userId)
//   {
//     $this->user = $userName;
//     $this->userId = $userId;
//   }

//   public function display()
//   {
//     echo "User Name Is {$this->user} And User Id Is {$this->userId}";
//   }
// }

// class Admid extends UserData
// {
//   public $level;
//   public function display()
//   {
//     echo "User Name Is {$this->user} And User Id Is {$this->userId} And User Level Is {$this->level}";
//   }
// }

// $ur = new UserData("Mamun", 23);
// $ur->display();
// echo "<br>";
// $ad = new Admid("Nazim", 22);
// $ad->level = "Manager";
// $ad->display();


//Final Keyword

final class UserData
{
  public $user;
  public $userId;

  public function __construct($userName, $userId)
  {
    $this->user = $userName;
    $this->userId = $userId;
  }

  public  function display()
  {
    echo "User Name Is {$this->user} And User Id Is {$this->userId}";
  }
}

class Admid extends UserData
{
  public $level;
  public function display()
  {
    echo "User Name Is {$this->user} And User Id Is {$this->userId} And User Level Is {$this->level}";
  }
}

$ur = new UserData("Mamun", 23);
$ur->display();
echo "<br>";
$ad = new Admid("Nazim", 22);
$ad->level = "Manager";
$ad->display();
