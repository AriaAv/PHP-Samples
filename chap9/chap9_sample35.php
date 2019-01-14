<h2>This Files Has Been Received</h2>
<?php
echo "<pre>";
printf("\n\n\nFileName             Type                          Size       status\n"); 
for($i=0;$i<70;$i++)
   printf("="); 
printf("\n");
foreach ($_FILES["upfile"]["error"] as $key => $error) 
{
   if ($error == UPLOAD_ERR_OK) 
   {
      $tmp_name = $_FILES["upfile"]["tmp_name"][$key];
      $name ="uploads\\". $_FILES["upfile"]["name"][$key];
      if (move_uploaded_file($_FILES["upfile"]["tmp_name"][$key], $name)) 
      {
          printf("%-20s ",$_FILES["upfile"]["name"][$key]);
          printf("%-30s ",$_FILES["upfile"]["type"][$key]);
          printf("%-10s ",$_FILES["upfile"]["size"][$key]);
          printf("%-10s ",$_FILES["upfile"]["error"][$key]);
          echo "\n";
          for($i=0;$i<70;$i++)
             printf("-");
          printf("\n"); 
      }
    }
}
?>  
