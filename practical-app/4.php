<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values
 */
		function ad_num($num1,$num2){
			$sum = $num1+$num2;
			return $sum;

		}

		$result=ad_num(55,66);
		echo $result."<br>";
echo "----------------------------------------------<br>";
		function add_num($num1,$num2){
			$sum = $num1+$num2;
			echo $sum."<-add<br>";

		}function sub_num($num1,$num2){
			$sum = $num1-$num2;
			echo $sum."<-sub<br>";

		}function div_num($num1,$num2){
			$sum = $num1/$num2;
			echo $sum."<-div<br>";

		}function mult_num($num1,$num2){
			$sum = $num1*$num2;
			echo $sum."<-Multiply<br>";

		}

		add_num(150,5);
		sub_num(150,5);
		div_num(150,5);
		mult_num(150,5);

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>