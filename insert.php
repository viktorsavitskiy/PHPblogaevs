<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="blogcss.css">
</head>
<body>
	
	
	<?php
	
	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$entry = $_POST['entry'];
	}
	
	//continue converting insert statement to pdo
	$db = new PDO("mysql:host=localhost;dbname=blog",
	"root", "root");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
	$queryStr = "INSERT INTO entries (title, entry)
	VALUES ('$title', '$entry')";
	$db->query($queryStr);
	echo "<p class='success'>Blog entered <a href=get-blogs.php>Check out blogs here</a></p>";
	} catch (PDOException $e) {
	echo $e->getMessage();
	}
	
	
		
		
	?>
	 
</body>
</html>