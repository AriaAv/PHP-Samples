<?php
class PrettyPrinter {
    static function printHelloWorld()
    {
        print "Hello, World";
        self::printNewline();
    }

    function printNewline()
    {
        print "<br>Hello";
    }
}
//*****************************
PrettyPrinter::printHelloWorld();
?>
