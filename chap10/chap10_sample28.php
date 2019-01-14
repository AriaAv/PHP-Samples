<?php
class simpleclass
{
    public $var=”simpleclass”; 
    public function displayvar() {
        echo  $var;
    }
}
//************************************
class extendclass extends simpleclass
{
    function displayvar()
    {
        echo "Extending class\n";
       parent::displayvar();
    }
}
$extended = new extendclass();
$extended->displayvar();
?> 
