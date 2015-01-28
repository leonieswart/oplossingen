<?php 

	class Employee extends Person {
		
		public $company;
		public $hourlyRate	=	10; // uurloon

		// Probleem: de constructor van de parent wordt niet meer aangeroepen
		/*
		public function __construct($company)
		{
			$this->company = $company;
		}
		*/

		// Oplossing
		public function __construct( $person, $company )
		{
			parent::__construct( $person );

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

	}

?>