<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php 

		 class Car {

		 	public $wheels = 4;
		 	protected $hood =1;
		 	private $engine =1;
		 	var $doors =4;

		 	function showProperty(){

		 	 // echo "Four Wheels Move<br>";

		 		echo $this->hood;

		 	}
		 	
		 	
		 }

		 $bmw = new Car();
		 $semi = new Semi();
		 class Semi extends Car{

		 	function showProperty1(){

		 	 // echo "Four Wheels Move<br>";

		 		echo $this->engine;

		 	}

		 	



		 }

		 echo $semi->showProperty();
		 echo $semi->showProperty1();
		 

?>
</html>