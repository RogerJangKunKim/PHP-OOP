<?php

	class hair{
		public $color;
		public $dye;
		public $clean;

		function __construct($color, $dye, $clean) {
			$this->color = $color;
			$this->dye = $dye;
			$this->clean = $clean;
		}

		function getHair() {
			return "{$this->color}" . "or" . "{$this->dye}";
		}
	}
	$hair1 = new hair("black", "blue", "wash");
	print "should hair be {$hair1->getHair()}?";










	class drive{
		public $car;
		public $ccolor;
		public $brand;

		function __construct($car, $ccolor, $brand) {
			$this->car = $car;
			$this->ccolor = $ccolor;
			$this->brand = $brand;
		}


		function getCar() {
			return "{$this->ccolor}" . "and is a " . "{$this->brand}";
		}
	}

	$car1 = new car("JEEP", "BLUE", "JEEP");
	print "My car is {$car1->getCar()}.";










	class bike{
		public $ride;
		public $type;
		public $bcolor;

		function __construct($ride, $type, $bcolor) {
			$this->ride = $ride;
			$this->type = $type;
			$this->bcolor = $bcolor;
		}

		function getBike() {
			return "{$this->bcolor}" . "and is a " . "{$this->type}";
		}
	}

	$bike1 = new bike("car", "electric", "blue");
	print "My bike is {$bike1->getBike()}.";
?>