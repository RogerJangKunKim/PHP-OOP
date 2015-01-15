<?php
	class Poo{
		public $smell;
		public $color;
		

		function __construct($smell, $color) {
			$this->smell = $smell;
			$this->color = $color;
			
		}

		function getPoo(){
			return $this->smell;
		}
		function getPooColor(){
			return $this->color;
		}
	}

	$Poo1 = new Poo("smelly","brown");
	print "Poo is: ". $Poo1->getPoo();
	print "Poo is also: ". $Poo1->getPooColor();

	class Car{
		public $type;
		public $maker;
		

		function __construct($type, $maker) {
			$this->type = $type;
			$this->maker = $maker;
			
		}

		function getCar(){
			return $this->type;
		}
		function getCarMaker(){
			return $this->maker;
		}
	}

	$Car1 = new Car("car","Hyundai");
	print "Car is: ". $Car1->getCar();
	print "Car is made by: ". $Car1->getCarMaker();

	class drink{
		public $type;
		public $name;
		

		function __construct($type, $name) {
			$this->type = $type;
			$this->name = $name;
			
		}

		function getDrinkType(){
			return $this->type;
		}
		function getDrinkName(){
			return $this->name;
		}
	}

	$Drink1 = new Drink("juice","Kool-aid");
	print "The drink is a: ". $Drink1->getDrinkType();
	print "The Drink is: ". $Drink1->getDrinkName();

	?>