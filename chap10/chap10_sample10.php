<?php
class MyClass {
    static $var1 = 0;
    function myMethod()
    {
        print self::$var1;
    }
}

$obj = new MyClass();
$obj->myMethod();
?>
