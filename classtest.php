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

	?>