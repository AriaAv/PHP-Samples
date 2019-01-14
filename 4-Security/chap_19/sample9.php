<?php
 $session_lifetime=1200;
 ini_set("session.cookie_lifetime",$session_lifetime); 
 session_start(); 
?>
<html>
<script type="text/javascript" src="http://127.0.0.1/md5.js"></script>
<script language=javascript>

function getCookie(cookieName)
{
  var cookieValue = null;
  var posName = document.cookie.indexOf(escape(cookieName) + '=');
  if (posName != -1)
  {
     var posValue = posName + (escape(cookieName) + '=').length;
     var endPos = document.cookie.indexOf(';', posValue);
     if (endPos != -1)
     {
        cookieValue = unescape(document.cookie.substring(posValue, endPos));
     }
     else
     {
        cookieValue = unescape(document.cookie.substring(posValue));
     }
  }
  return cookieValue;
}
//****************************************
function  send()
{
  form1.password.value=hex_md5(form1.password.value+getCookie("PHPSESSID"));
  form1.submit();
}
</script>
<body>
<form name="form1"  method="get" action="http://127.0.0.1/verify.php"  onsubmit= send()>

	<p><b>Username</b>&nbsp; <input type="text" name="username" size="20"></p>
	<p><b>Password</b> <input type="password" name="password" size="20"></p>
	<p><input type="submit" value="Submit" name="B1"><input type="reset" value="Reset" name="B2"></p>
</form>
</body>
</html>
