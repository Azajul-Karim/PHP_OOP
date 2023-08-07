<?php
include 'programming.php';

$pro = new Programming();
$ser = serialize($pro);
// file_put_contents('programming.txt', $ser);
// echo $ser;

$getContents = file_get_contents('programming.txt');
$unser = unserialize($getContents);
echo "<pre>";
print_r($unser);
