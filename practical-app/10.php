<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php 

			class Dog{

				var $eyeColors="red";
				var $nose ="wide";
				var $furColor = "brown";

				function ShowAll(){

					echo $this->eyeColors."<br>";
					echo $this->nose."<br>";
					echo $this->furColor."<br>";

				}

			}

			class fox extends Dog{
				function greyFox(){
					echo $this->nose =5555;
				}
			}


			$pitbull =new Dog();
			$foxco =new fox();
			$foxco->greyFox();
			$foxco->ShowAll();
			$pitbull->ShowAll();
			echo $foxco->furColor . "this";





	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

		Step 6: Call the method ShowAll
	
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>