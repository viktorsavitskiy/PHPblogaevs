<!doctype html>
<html>
<body>
	<?php include('connect.php');
	$heading = $_POST["title"];
	$content = $_POST["entry"];
	$tablename = "entries";
	mysql_select_db('blog');
	$query = "INSERT INTO $tablename VALUES('$heading', '$content')";
	mysql_query($query, $conn);
	echo "<p>Data inserted. <a href='get-blogs.php'>Blog menu</a></p>";
	mysql_close($conn);
	?> 
</body>
</html>