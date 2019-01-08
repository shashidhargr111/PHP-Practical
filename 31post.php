


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="31post.php" method="post">
	
<input type="text" name="name" placeholder="Name">
<input type="submit" value="submit">
</form>
<?php
echo $_POST['name'];

?>
	
</body>
</html>