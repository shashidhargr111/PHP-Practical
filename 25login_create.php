<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<center>
        <h1>Create</h1>
	<form action="25login_create.php" method="post">
	
		User-Name:<input type="text" name="username"><br>
		User-Password:<input type="password" name="password"><br>
		<input type="submit" name="submit">
	</center>
	</form>



    <?php 
    include "db.php";
    		if (isset($_POST['submit'])) {
    			# code...
    			//$uname = $_POST['username'];
    			//$upassword = $_POST['password'];
    			
                $uname = mysqli_real_escape_string($connection,$_POST['username']);
    			$upassword = mysqli_real_escape_string($connection,$_POST['password']);
    			

    			$query = "INSERT INTO user (u_name,u_pass) ";
    			$query .="VALUES ('$uname','$upassword')";

    			$result= mysqli_query($connection,$query);
    			
    			if (!$result) {
    				#  code...
    				die('Query Failed'. mysqli_error());
    			}

    		}
		    
    ?>
</body>
</html>