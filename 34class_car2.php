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

		 		echo "Wheels Move";


		 	}

		 }  

		 if (method_exists("Car","MoveWheels")) {
		  	# code...
		  	echo "It`s working";
		  } 
		 	else
		 	{
		 		echo "Not working";
		 	}
    
    
    
    ?>
</body>
</html>