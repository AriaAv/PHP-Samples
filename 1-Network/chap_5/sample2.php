<?php // at the very start of the file
 function rewrite ($text) {
   return str_replace('http://www.yoursite.com/', 'http://www.mysite.com/',
                       $contents);
 }
 ob_start('rewrite');
?>
Visit <A HREF="http://www.yoursite.com/foo/bar">our site</A> now!
Visit <A HREF="http://www.mysite.com/foo/bar">our site</A> now!
