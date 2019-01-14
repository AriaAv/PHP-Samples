<?php
class person{
     public $name;
     public $family;
     function print1() 
     {
           echo "<pre>".$this->name." \n". $this->family;
      }
}
class student extends person {
     public $student_ID;
 }
//******************************
$st = new student();
$st->student_ID=7777;
$st->name="ali";
$st->family="ahmadi";
$st->print1();
?>
