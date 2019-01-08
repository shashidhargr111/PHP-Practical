<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    
		 class Car {

		 	function MoveWheels(){

		 		echo "Four Wheels Move<br>";


		 	}

		 }class bike {

		 	function MoveWheels(){

		 		echo "It`s have two Wheels Move <br>";


		 	}

		 }  


		 $bmw = new Car();
		 $merces_benz = new bike();

		 $bmw->MoveWheels();
		 $merces_benz->MoveWheels();
    
    ?>
</body>
</html>