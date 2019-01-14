<?php 
     $connectionstring = odbc_connect("lib", "", ""); 
     if(!$connectionstring)
        die("Can Not Connect to database");
     $query = "SELECT * FROM book"; 
     $result = odbc_do($connectionstring, $query); 
     echo '<?xml version="1.0"?>';
     echo "\n<library>";
     while($row=odbc_fetch_array($result)) 
     {
      ?>   
           <book>
           <id>   <?=$row["id"]?></id>
           <name>  <?=$row["name"]?></name>
           <publisher>   <?=$row["publisher"]?></publisher>
           <date>   <?=$row["date"]?></date>
           <price>   <?=$row["price"]?></price>
           <note><?=$row["note"]?></note>
           </book>
      <?
    }
    echo "</library>";
    ?>
