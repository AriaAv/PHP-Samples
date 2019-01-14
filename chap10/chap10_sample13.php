<?php
class PrettyPrinter 
{
    static function printHelloWorld()
    {
        print " Hello, World ";       
    }
    function printNewline()
    {
         $this->printHelloWorld();
         print "\n";
    }
}
//***************************
$a=new PrettyPrinter();
$a->printNewline();
?>
