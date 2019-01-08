
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 
 	<form action="6.php" method="POST">
 		<input type="text" name="name">
 		<input type="password" name="password">
 		<input type="submit" name="submit">
 	</form>




	<?php

	if (isset($_POST['submit'])) {
		# code...
		$username = $_POST['name'];
		$userpassword = $_POST['password'];
		echo "UserName-->".$username."<br>";
		echo "UserPassword-->".$userpassword;
	}

// Step1: Make a form that submits one value to POST super global



	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>