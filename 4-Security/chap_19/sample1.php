<html>
<head>
<title>Password Creator</title>
</head>
<body>
  <form action=generate_passwords.php method=post>
  <h3>Enter a password to create MD5 and Crypt based passwords.</h3>
  Password: <input type="text" name="password">
  <input type="submit" name="create" value="Create Passwords!">
  </form>
  <?
  if(strlen(trim($_POST['password']))) {
   ?>
    <h3>The passwords for the string "<?=$_POST['password']?>" are:</h3>
    <ul>
    <li><b>MD5:</b> <?=md5($password)?>
    <li><b>Crypt:</b> <?=crypt($password)?>
    </ul>
    <?
  }
  ?>
  </body>
 </html>
