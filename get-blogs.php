<!doctype html>
<html>
<body>
	<?php
	$db = new PDO("mysql:host=localhost;dbname=blog",
	"root", "root");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
	$queryStr = "SELECT * FROM entries";
	$query = $db->prepare($queryStr);
	$query->execute();
	while ($row = $query->fetch()) {
	echo '<p>'. 'ID: ' .$row['id'] . ' - ' . 'Title: ' .$row['title'] . ' - ' .' Article: '.
	$row['entry'].'</p>';
	//echo '<a href=page.php/?id='$row['id']'>edit/delete''</a>';
	echo '<br />';
	}
	$query->closeCursor();
	} catch (PDOException $e) {
	echo $e->getMessage();
	}
	

	?>


</body>
</html>