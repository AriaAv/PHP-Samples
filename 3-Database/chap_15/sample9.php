<?php 
If(!($msqlconc = mssql_connect("127.0.0.1", "sa", "emma"))) 
{
     print("could not connect to MS-SQL Server database"); 
} else {
     mssql_select_db("library", $msqlconc); 
     $query = "SELECT * FROM book"; 
     $runquery = mssql_query($query, $msqlconc); 
     $numfields = mssql_num_fields($runquery); 
     print("<TABLE BORDER=""1"">\n"); 
     print("<TR><TD>Column Name</TD><TD>Column Type</TD></TR>"); 
     for ($p=0; $p < $numfields; $p++) 
     {
         $fname = mssql_field_name($runquery, $p); 
         $ftype = mssql_field_type($runquery, $p); 
         print "<TR><TD>" . $fname . "</TD><TD>" . $ftype . "</TD></TR>"; 
     } 
     print("</TABLE>"); 
     mssql_close($msqlconc); 
} 
?> 
