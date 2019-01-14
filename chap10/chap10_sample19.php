<?php
class Rectangle {
    public $name = __CLASS__;
}
class Square extends Rectangle {
    public $name = __CLASS__;
}
class Circle {
    public $name = __CLASS__;
}
function checkIfRectangle($shape)
{
    if ($shape instanceof Rectangle) {
        print $shape->name;
        print " is a rectangle\n";
    }
}

checkIfRectangle(new Square());
checkIfRectangle(new Circle());
?>
