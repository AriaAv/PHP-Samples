<?php
class Person {
    function __construct($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    private $name;
};

$judy = new Person("Judy");
$joe = new Person("Joe");
print $judy->getName();
print $joe->getName();
?>
