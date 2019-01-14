<?php 
If(!($msqlconc = mssql_connect("emma", "sa", ""))) 
{
     print("could not connect to MS-SQL Server database"); 
} else {
     mssql_select_db("library", $msqlconc); 
     $query = "SELECT * FROM book"; 
     mssql_query($query, $msqlconc); 
     mssql_close($msqlconc); 
} 
?>
