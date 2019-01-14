<?php
$text = '<p>Test paragraph.</p><!-- Comment --> Other text';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p>');
?>
