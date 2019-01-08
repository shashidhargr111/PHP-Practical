<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 
			session_start();
			
			echo $_SESSTION['name_session'] = "hello word";
	

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
		echo "<br>";
		echo "_________________________________________";
		echo "<br>";

		print_r($_GET);

		$id=200;
		$id1=20100;
		$button="hello";
		$button1="world";
		

		echo "<br>";
		$name = "cookie";
		$value = 200;
		$expire= time() + (60*60*24*7);

		if (isset($_COOKIE['name'])) {
			# code...
			$cookie_name = $_COOKIE['name'];
			echo $cookie_name;
		}else
		{
			$cookie_name="";
		}

		 

	
	?>



<br>

<a href="9.php?id=<?php echo $id ?>"><?php echo $button ?></a>
<a href="9.php?id=<?php echo $id1 ?>"><?php echo $button1 ?></a>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>