<?php
class UserData
{
  public $user;
  public $userId;

  public function __construct($userName, $userId)
  {
    $this->user = $userName;
    $this->userId = $userId;

    echo "User Name Is {$this->user} & User Id Is {$this->userId}";
  }

  public function __destruct()
  {
    unset($this->user);
    unset($this->userId);
  }
}

$ur = new UserData("Mamun", 23);
