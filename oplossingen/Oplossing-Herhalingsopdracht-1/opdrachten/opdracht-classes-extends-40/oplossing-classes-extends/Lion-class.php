<?php

	class Lion extends Animal
	{
		protected $lionSpecies;

		public function __construct(  $name, $sex, $health, 
$lionSpecies )
		{
			parent::__construct( $name, $sex, $health );
			
			$this->lionSpecies = $lionSpecies;
		}

		public function getSpecies()
		{
			return $this->lionSpecies;
		}

		public function doSpecialMove()
		{
			return 'Roarrrr';
		}
	}

?>