<?php
class student {
    public $id=10;
    public $name="";
    public function print1(){
             echo "id is=". $this->id;
             echo "<br>name is=". $this->name;
    }
}
//***************************

$obj = new student();
$obj->id=20000;
$obj->name="alireza";
$obj->print1(); 
?>
