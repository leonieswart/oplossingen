<?php 

	// SELF

	class Person {
		
		public $name;
		public $taxRate	=	21;
		public $savings	=	0;

		// Geeft de persoon een naam bij het aanmaken van de instantie van de klasse
		public function __construct($name)
		{

			$this->name = $name;
		}

		// Returnt de naam van de persoon
		public function getName()
		{
			return $this->name;
		}

		// Voegt geld aan de bankrekening toe
		public function addMoney($addition)
		{
			$this->savings += $addition;
		}

		// Returnt het bedrag op de bankrekening
		public function getSavings()
		{
			return $this->savings;
		}

		// Returnt het bedrag op de bankrekening min de belastingen
		public function getNettoSavings()
		{
			// return ($this->savings - $this->calculateTaxes()); // de originele calculateTaxes wordt overschreven door die van de child
			return ($this->savings - self::calculateTaxes()); // Hier wordt altijd de calculateTaxes() methode gebruikt uit de huidige klasse
		}

		// Bereken het totaal na aftrek van de belastingen
		public function calculateTaxes()
		{
			return $this->savings * ($this->taxRate / 100);
		}

	}

?>