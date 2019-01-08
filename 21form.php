<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


	<form action="21form.php" method="post">
		
		<input type="text" name="u_name" placeholder="name">
		<input type="password" name="u_pass" placeholder="password">
		<input type="submit" name="submit">



	</form>





    <?php 
    	
    	if (isset($_POST['submit'])) {
    		# code...
    		$array=["shashi","harshi","sharath","sharathM"];
    		$username=$_POST['u_name'];
    		$userpass=$_POST['u_pass'];

    		if (strlen($userpass)< 5) {
    			# code...
    			echo "Your pass too short<br>";

    		}if (strlen($userpass)> 10) {
    			# code...
    			echo "Your pass too langer<br>";

    		}
    		if (!in_array($username, $array)) {
    			# code...
    			echo "we donot see in the list<br>";

    		}
    		else{
    			echo "welcome<br>";
    		}






    		// echo "You name->".$username."<br>";
    		// echo "Your password->".$userpass."<br>";
    	}
			    
    
    
    
    ?>
</body>
</html>