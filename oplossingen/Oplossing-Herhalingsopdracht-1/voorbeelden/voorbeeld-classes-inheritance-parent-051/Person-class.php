<?php 

class Person {
	
	public $name;
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

	// Returnt het bedrag op de bankrekening
	public function getSavings()
	{
		return $this->savings;
	}

	// Voegt geld aan de bankrekening toe
	public function addMoney($addition)
	{
		$this->savings += $addition;
	}


}

?>