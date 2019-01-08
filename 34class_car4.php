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

		 	var $wheels = 4;
		 	var $hood =1;
		 	var $engine =1;
		 	var $doors =4;

		 	function MoveWheels(){

		 	 // echo "Four Wheels Move<br>";

		 		 $this->wheels = 4;

		 	}function Create_Doors(){

		 	 // echo "Four Wheels Move<br>";

		 		 $this->doors = 4;

		 	}

		 } class Bike {

		 	var $wheels = 4;
		 	var $hood =1;
		 	var $engine =1;

		 	

		 	function MoveWheels(){

		 	 // echo "Four Wheels Move<br>";

		 		 $this->wheels = 2;

		 	}function top_speed(){

		 	 // echo "Four Wheels Move<br>";

		 		 $this->speed = 120;

		 	}

		 } 


		 $bmw = new Car();
		 $truck = new Car();
		 $tvs = new Bike();
		 // $bmw->MoveWheels();
		 // $bmw->wheels = 8;
		 echo $bmw->wheels."<-This wheels bmw<br>";
		 echo $truck->wheels = 10 ."<br>";
		 $bmw->Create_Doors();
		 echo $bmw->doors."<-This doors<br>";
		 $tvs->top_speed();
		 echo $tvs->speed."<-This bike speed<br>";
		 echo $tvs->wheels=200;
		 

?>
</html>