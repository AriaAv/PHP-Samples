<?php
$command = "users";
$logged_in = explode(' ', shell_exec($command));
for ($i = 0; $i < count($logged_in); $i++) {
   if ($argv[1] == trim($logged_in[$i])) {
      $found_user = 1;
   }
}
if($found_user) {
   print "User $argv[1] is currently logged in\n";
} else {
   print "User $argv[1] is NOT currently logged in\n";
}
?>
