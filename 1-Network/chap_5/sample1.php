<?php
ob_start(  );
include "page1.htm";
$contents = ob_get_contents(  );
ob_end_clean(  );
echo str_replace('http://www.yoursite.com/', 'http://www.mysite.com/', $contents);
?>
