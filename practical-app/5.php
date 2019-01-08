<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

	

	

/*  Step1: Use a pre-built math function here and echo it

*/
	echo pow(10,2)."<br>";
	echo rand(100,150)."<br>";
	echo sqrt(55)."<br>";


	// Step 2:  Use a pre-built string function here and echo it

	echo "-----------------<br>";
	$string = " Hello world";
	echo strlen($string)."<br>";
	echo strtolower($string)."<br>";
	echo strtoupper($string)."<br>";



	echo "-----------------<br>";
	// Step 3:  Use a pre-built Array function here and echo it
	$list = [1,2,3,45,6,7,8];
	echo max($list)."<br>";
	echo min($list)."<br>";



	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>