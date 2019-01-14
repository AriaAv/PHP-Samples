<?php
class person{
  public $name;
  public $family;
  function print1() 
  {
    echo "<pre> $this->name \t $this->family \n";
  }
}

class student extends person {
  public $student_ID;

 }
class employee extends person {
  public $employee_ID;

 }
//***************************************
$st = new student();
$st->student_ID=7777;
$st->name="ali";
$st->family="ahmadi";
$st->print1();

$emp = new employee();
$emp->employee_ID=8888;
$emp->name="reza";
$emp->family="mohammadi";
$emp->print1();
?>
