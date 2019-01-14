<?php
class MyClass  {
    function __destruct()
    {
        print "An object of type MyClass is being destroyed\n";
    }
}
$obj = new MyClass();
echo "This is begining of the script";
?>
<br> This is my HTML CODE
<br>
<?php
echo "This is the end of the script<br><br>";
?>
