<?php
echo "<pre>";
$foo = array("Robert" => "Bob", "Seppo" => "Sepi");
end($foo);
$bar = each($foo);
print_r($bar);
?>
