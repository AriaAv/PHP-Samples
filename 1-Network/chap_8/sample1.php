<?php
mail("recipient@domain.com", "This is the subject",
"Hello,welcome to our service. To access our site, 
you need the following data:
username: $username
password: $password
If you should have problems with our service,
please contact <mailto:support@domain.com>.
To visit our site now, click here:
http://www.domain.com/Webmaster");
?>
