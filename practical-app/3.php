<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
			


	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
	echo "if Statement";
	if(4 > 5){
		echo "I love PHP";
	} elseif(3 <= 3) {
		# code...
		echo "this good program language";
	}else
	{
		echo "plz learn its";
	}
echo "<br>----------------------forloop-------------------<br>";

	
	for ($i=0; $i <= 10; $i++) { 
		# code...
		echo $i."<br>";
	}
echo "<br>----------------------switch Statement-------------------<br>";
	$j=1;
	switch($j) {
		case 1:
			# code...
		echo "this number 1";
			break;
		case 2:
			# code...
		echo "this number 2";
			break;
		case 3:
			# code...
		echo "this number 3";
			break;
		
		default:
			# code...
		echo "Plz Enter the correct number<br>";
			break;
	}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>