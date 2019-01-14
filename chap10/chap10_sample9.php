<?php
class MyClass {
    static $myStaticVariable;
    static $var1 = 0;
}
MyClass::$var1++;
print MyClass::$var1;
?>
