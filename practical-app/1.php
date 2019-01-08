<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
		


		<?php  


		/* 
		   Step 1:  Use the Echo Function to say hello with html h1 Tags embedded inside php.
		   Step 2: Write a comment above the echo function and explain
		   what that function is doing.
		*/

		//step 1 Dynamic text
		$title = "This Dynamic text";
		$title1 = "Hello world";
		echo "<h1>$title</h1>";

		?>
		<h1><?php echo $title1;?></h1>
		<h2><?php echo $title1;?></h2>
		<h3><?php //echo $title1;?></h3>
		
	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>