<?php
ob_start(  );
phpinfo(  );
$phpinfo = ob_get_contents(  );
ob_end_clean(  );
  
if (strpos($phpinfo, "module_pdf") === FALSE) {
  echo "You do not have PDF support in your PHP, sorry.";
} else {
  echo "Congratulations, you have PDF support!";
}
?>
