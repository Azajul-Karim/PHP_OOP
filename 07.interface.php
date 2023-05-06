<?php
interface School
{
  function mySchool();
}

interface College
{
  function myCollege();
}

interface Versity
{
  function myVersity();
}

class Teacher implements School, College, Versity
{

  function __construct()
  {
    $this->mySchool();
    $this->myCollege();
    $this->myVersity();
  }


  function mySchool()
  {
    echo 'I Am a School Teacher.<br>';
  }

  function myCollege()
  {
    echo 'I Am a College Teacher.<br>';
  }

  function myVersity()
  {
    echo 'I Am a Versity Teacher.<br>';
  }
}


class Student implements School, College, Versity
{

  function __construct()
  {
    $this->mySchool();
    $this->myCollege();
    $this->myVersity();
  }


  function mySchool()
  {
    echo 'I Am a School Student.<br>';
  }

  function myCollege()
  {
    echo 'I Am a College Student.<br>';
  }

  function myVersity()
  {
    echo 'I Am a Versity Student.<br>';
  }
}

$teacher = new Teacher();
$student = new Student();
