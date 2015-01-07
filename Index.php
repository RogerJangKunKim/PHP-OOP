<?php

	class hair{
		public $color = "black";
		public $dye = "red";
		public $clean = "wash";

		function getHair() {
			return "{$this->color}" . "or" . "{$this->dye}";
		}
	}

	$hair1 = new hair();
	$hair1->color = "black";
	$hair1->dye = "red";
	print "should hair be {$hair1->getHair()}?";

	class drive{
		public $car = "minivan";
		public $ccolor = "blue";
		public $brand = "hyundai";

		function getCar() {
			return "{$this->ccolor}" . "and is a " . "{$this->brand}";
		}
	}

	$car1 = new car();
	$car1->ccolor = "blue";
	$car1->brand = "hyundai";
	print "My car is {$car1->getCar()}.";

	class bike{
		public $ride = "bike";
		public $type = "hybrid";
		public $bcolor = "green";

		function getBike() {
			return "{$this->bcolor}" . "and is a " . "{$this->type}";
		}
	}

	$bike1 = new bike();
	$bike1->bcolor = "green";
	$bike1->type = "hybrid";
	print "My bike is {$bike1->getBike()}.";
?>