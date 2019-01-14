<html> 
<head></head> 
<body bgcolor="#FFFFFF"> 
<table width="75%" border="1" cellspacing="1" cellpadding="1" 
bgcolor="#FFFFFF"> 
  <tr bgcolor="#CCFFFF"> 
    <td height="22"><b>Names</b></td> 
  </tr> 
     <?php 
     $connectionstring = odbc_connect("lib", "", ""); 
     $query = "SELECT Name FROM book"; 
     $result = odbc_do($connectionstring, $query); 
         while(odbc_fetch_row($result)) 
         {
              $name = odbc_result($result, 1); 
              print ("<tr><td>$name</td></tr>"); 
         } 
         odbc_close($connectionstring); 
    ?> 
</table> 
</body> 
</html>
