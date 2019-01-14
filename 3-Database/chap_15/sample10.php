<?php 
If(!($msqlconc = mssql_connect("127.0.0.1", "sa", "sqladmin"))) 
{
     print("could not connect to MS-SQL Server database"); 
} else {
     mssql_select_db("library", $msqlconc); 
     $query = "SELECT * FROM book"; 
     $runquery = mssql_query($query, $msqlconc); 
     $numfields = mssql_num_fields($runquery); 
     print("<TABLE BORDER=1>\n"); 
     print("<TR><TD><b>Name</b><TD><TD><b>publisher</b><TD></TR>"); 
     while($db_row = mssql_fetch_array($runquery)) 
     {
          echo "<TR><TD>".$db_row['name']."<TD>";
          echo "<TD>".$db_row['publisher']."<TD></TR>"; 
     } 
     echo "</TABLE>"; 
     mssql_close($msqlconc); 
 } 
?> 
