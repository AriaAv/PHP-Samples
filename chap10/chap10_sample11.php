<?php
class MyUniqueIdClass {
    static $idCounter = 0;

    public $uniqueId;

    function __construct()
    {
        self::$idCounter++;
        $this->uniqueId = self::$idCounter;
    }
}
//***************************
$obj1 = new MyUniqueIdClass();
print $obj1->uniqueId . "\n";
$obj2 = new MyUniqueIdClass();
print $obj2->uniqueId . "\n";
?>
