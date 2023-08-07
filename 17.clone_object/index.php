<?php
include_once 'language.php';

$java = new Language();

$java->setCat('OOP');
$java->setLang('JAVA');
// echo $java->getCat();

echo '<br />';

$php = clone $java;
$php->setCat('OOP');
$php->setLang('PHP');

echo $java->getCat() . '<br />'; // OOP
echo $java->getLang() . '<br />'; // PHP

echo $php->getCat() . '<br />'; // OOP
echo $php->getLang() . '<br />'; // PHP
