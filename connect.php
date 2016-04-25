<?php
//databases connecte
$dbhost = "localhost:8889";
$dbuser = "root";
$dbpass = "root";
$dbname = "blog";
$conn = @mysql_connect($dbhost, $dbuser, $dbpass, $dbname);

//test database error
if(mysql_errno()){
	die("Database connect failed:");
		
}

	
?>
	
	