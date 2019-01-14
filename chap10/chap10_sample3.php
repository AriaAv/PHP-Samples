<?php
class MyClass  {
    function __destruct()
    {
        print "An object of type MyClass is being destroyed\n";
    }
}

$obj = new MyClass();
$obj = NULL;
?>
