<?php
class foo {
    function name() 
    {
        echo "My name is " , get_class($this) , "\n";
    }
}

$bar = new foo();
echo "this object is created from  " , get_class($bar) , " class\n";
?>
