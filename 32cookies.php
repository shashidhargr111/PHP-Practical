<?php

$name = "name";
$value = 100;
$ecp = time() + (60*60*24*7);

setcookie($name,$value,$ecp);



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



	<?php 

			if (isset($_COOKIE["name"])) {
				# code...
				$name_cookie=$_COOKIE["name"];
				echo $name_cookie;
			}else{

				$name_cookie="";
			}







	?>
	
</body>
</html>