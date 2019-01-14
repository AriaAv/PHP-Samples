<?php
class Person {
    var  $name;
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
};
$judy = new Person();
$judy->setName("Judy");

$joe = new Person();
$joe->setName("Joe");

print $judy->getName() . "\n";
print $joe->getName(). "\n";
?>
