<?php
class Person {
    private  $name;
    function setName($name)
    {
        $this->name = $name;
    }
};
$judy = new Person();
$judy->setName("Judy");
?>
