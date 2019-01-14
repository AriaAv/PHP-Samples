<?php
class MyColorEnumClass {
    const RED = "Red";
    const GREEN = "Green";
    const BLUE = "Blue";

    function printBlue()
    {
        print self::BLUE;
    }
}

print MyColorEnumClass::RED;
$obj = new MyColorEnumClass();
$obj->printBlue();
?>
