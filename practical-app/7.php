<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

/*		
		Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
		// include "../db.php";
		$connection = mysqli_connect('localhost','root','','php') or die ("connection error");

		$qurey = "SELECT *FROM user";
		$result = mysqli_query($connection,$qurey);

		if (!$result) {
			# code...
			die('qurey failed' . mysqli_error());
		}


		while ($row=mysqli_fetch_assoc($result)) {
			# code...
			?><pre style="border: 3px solid black;width: 500px;"><?php print_r($result); ?> </pre><?php
		}

		
	?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
