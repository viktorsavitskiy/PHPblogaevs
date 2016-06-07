
<!doctype html>
<html>
<head>
	<title>New Blog entry</title>
	<link rel="stylesheet" href="blogcss.css">
</head>
<body>
	<div>
		<div id="head-box">
		<h1>Blog App</h1>
	</div>
	<form name="newBlog" method="POST" action="insert.php">
		<p>Title:</p>
		<input type="text" name="title" placholder="title" id="title"> <br />
		<p>Article:</p>
		<textarea name="entry" rows="10" cols="65"></textarea><br />
		<input type="submit" name="submit" value="submit">
	</form>
</div>
	
</body>
</html>
