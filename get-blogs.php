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
	echo $row['id'] . ' - ' . $row['title'] . ' - ' .
	$row['entry'];
	echo '<br />';
	}
	$query->closeCursor();
	} catch (PDOException $e) {
	echo $e->getMessage();
	}

	
	}

	
	

	?>


</body>
</html>