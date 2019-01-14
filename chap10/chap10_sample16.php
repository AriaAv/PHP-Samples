<?php
class MyClass 
{
    public $var = 1;
    public $v1 = 1000;
    public $sum=0;
    public function __clone() 
    {
        $this->sum=$this->var+$this->v1;
    }
}
//*******************
$obj1 = new MyClass();
$obj1->var=20;
$obj1->v1=20; 
$obj2 = clone $obj1;
echo "<pre>";
print_r($obj1);
echo "\n";
print_r($obj2);
?>
