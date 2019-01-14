<?php
class Ancestor {
    const NAME = "Ancestor";
    function __construct()
    {
        print "In " . self::NAME . " constructor\n";
    }
}
class Child extends Ancestor {
    const NAME = "Child";
    function __construct()
    {
        parent::__construct();
        print "In " . self::NAME . " constructor\n";
    }
}
$obj = new Child();
?>
