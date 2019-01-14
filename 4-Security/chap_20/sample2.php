<?php
$browser_name = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];
echo "Thanks for sending me $browser_name.";

$counter++; 
$my_name = "image_$counter";
if (is_uploaded_file($temp_name)) {
  move_uploaded_file($temp_name, "/web/images/$my_name");
} else {
  die("There was a problem processing the file.");
}
?>