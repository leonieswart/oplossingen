<?php 

	// SELF

	class Employee extends Person {
		
		public $company;
		public $hourlyRate			=	10; // uurloon
		
		public function __construct($person, $company)
		{
			parent::__construct($person);

			$this->company = $company;
		}
		
		public function work( $hours )
		{

			$earnedMoney =	$this->hourlyRate * $hours;

			$this->addMoney($earnedMoney);

			return 'Werken! Werken! ' . $this->name . ' heeft ondertussen al ' . $hours . ' uur gewerkt.';
		}

		public function getCompany()
		{

			return $this->company;
		}

		// Bereken het totaal na aftrek van de belastingen
		public function calculateTaxes()
		{
			return $this->savings * (5 / 100);
		}
	}

?>