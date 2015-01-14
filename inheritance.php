<?php

	class Person{
		public $firstName;
		public $lastName;

		function __construct($firstName, $lastName){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
		}

		function getName(){
			return "This is my name: " . $this->firstName;
		}
	}

	class Child extends Person{
		function __construct($firstName, $lastName, $sound){
			parent::__construct($firstName, $lastName);
			$this->sound = $sound;
		}
		function childName(){
			return "This child will " . $this->sound;
		}
	}

	class Brother extends Person{
		function __construct($firstName, $lastName, $bsound){
			parent::__construct($firstName, $lastName);
			$this->bsound = $bsound;
		}
		function brotherName(){
			return "The brother will  " . $this->bsound;
		}
	}

	$Child = new Child("Little Roger","Kim","cry");
	$Brother = new Brother("Little Roy","Kim","scream");

	print $Child->getName();
	print $Child->childName();
	print $Brother->brotherName();

	class Poo{
		public $smell;
		public $color;

		function __construct($smell, $color){
			$this->smell = $smell;
			$this->color = $color;
		}

		function getSmell(){
			return "This poo smells " . $this->smell;
		}
	}

	class dogPoo extends Poo{
		function __construct($smell, $color, $dsize){
			parent::__construct($smell, $color);
			$this->dsize = $dsize;
		}
		function dogPooSmell(){
			return "This also smells " . $this->smell;
		}
	}

	class catPoo extends Poo{
		function __construct($smell, $color, $csize){
			parent::__construct($smell, $color);
			$this->csize = $csize;
		}
		function catPooSmell(){
			return "Cat poo also smells " . $this->smell;
		}
	}

	$dogPoo = new dogPoo("bad","brown","small");
	$catPoo = new catPoo("bad","brown","small");
	print $dogPoo->getSmell();
	print $dogPoo->dogPooSmell();
	print $catPoo->catPooSmell();

	class transportation{
		public $type;
		public $speed;

		function __construct($type, $speed){
			$this->type = $type;
			$this->speed = $speed;
		}

		function getSpeed(){
			return "The speed is over " . $this->speed;
		}
	}

	class car extends transportation{
		function __construct($type, $speed, $carsize){
			parent::__construct($type, $speed);
			$this->carsize = $carsize;
		}
		function carSpeed(){
			return "The car speed is " . $this->speed;
		}
	}

	class motorcycle extends transportation{
		function __construct($type, $speed, $msize){
			parent::__construct($type, $speed);
			$this->msize = $msize;
		}
		function motorcycleSpeed(){
			return "The motorcycle speed is " . $this->speed;
		}
	}

	$motorcycle = new motorcycle("scooter","9000","2meters");
	$car = new car("car","9000","3meters");
	print $motorcycle->getSpeed();
	print $motorcycle->motorcycleSpeed();
	print $car->carSpeed();