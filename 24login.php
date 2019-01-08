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
	<form action="24login.php" method="post">
	
		User-Name:<input type="text" name="username"><br>
		User-Password:<input type="password" name="password"><br>
		<input type="submit" name="submit">
	</center>
	</form>



    <?php 
    		
    		if (isset($_POST['submit'])) {
    			# code...
    			$uname = $_POST['username'];
    			$upassword = $_POST['password'];
    			
    			$connection = mysqli_connect('localhost','root','','php');

    			if ($connection) {
    				# code...
    				echo "working";
    			}else
    			{
    				echo "not working";
    			}




    			// if ($uname && $upassword) {
    			// 	# code...

    			// echo $uname ;
    			// echo "<br>" ;
    			// echo $upassword ;
    			// }


    		}
		    
    
    
    
    ?>
</body>
</html>