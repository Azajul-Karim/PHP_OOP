<?php
include_once 'sendEmail.php';
include_once 'sendSms.php';
include_once 'user.php';

$user = new User();
$msg = $user->getMsg();

switch ($msg) {
  case 'email':
    $sendMsg = new SendEmail();
    break;
  case 'sms':
    $sendMsg = new SendSms();
    break;
  default:
    $sendMsg = new SendEmail();
    break;
}

$sendMsg->notification();
