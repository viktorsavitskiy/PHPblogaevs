<!doctype html>
<html>
<body>
	<?php
	include ('connect.php');
	$tablename = "entries";
	$query= "SELECT * FROM $tablename";
	mysql_select_db('blog');
	$result = mysql_query($query, $conn);
	
	
	
	
	while ($row = mysql_fetch_assoc($result)){
		
		echo "<p>{$row['title']}</p>";
		echo "<p>{$row['entry']}</p>";
	}

	
	
	mysql_close($conn);
	?>


</body>
</html>