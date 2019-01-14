<?php 
If(!($msqlconc = mssql_connect("emma", "sa", ""))) 
{
     print("could not connect to MS-SQL Server database"); 
} else {
     print("Connected to database "); 
     mssql_close($msqlconc); 
} 
?> 
