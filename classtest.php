<?php
	class Poo{
		public $smell;
		public $color;
		public $function;

		function __construct($smell, $color, $function) {
			$this->smell=$smell;
			$this->color=$color;
			$this->function=$function;
		}

		function getPoo(){
			return "{$this->smell}";
		}
		function getPoocolor(){
			return "{$this->color}";
		}
	}

	$Poo1 = new Poo("smelly","brown","Does nothing");
	print "Poo is {$Poo1->getPoo()}.";
	print "Poo is also {$Poo1->getPoocolor()}.";

	?>