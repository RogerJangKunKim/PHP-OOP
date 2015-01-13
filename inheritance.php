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
		function childName(){
			return "This child's last name is " . $this->lastName;
		}
	}

	class Brother extends Person{
		function brotherName(){
			return "The brother's last name is also " . $this->lastName;
		}
	}

	$Child = new Child("Little Roger","Kim");

	print $Child->getName();

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
		function dogPooSmell(){
			return "This also smells " . $this->smell;
		}
	}

	class catPoo extends Poo{
		function catPooSmell(){
			return "Cat poo also smells " . $this->smell;
		}
	}

	$dogPoo = new dogPoo("bad","brown");

	print $dogPoo->getSmell();

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
		function carSpeed(){
			return "The car speed is" . $this->speed;
		}
	}

	class motorcycle extends transportation{
		function motorcycleSpeed(){
			return "The motorcycle speed is " . $this->speed;
		}
	}

	$motorcycle = new motorcycle("car","9000");

	print $motorcycle->getSpeed();