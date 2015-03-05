<?php 

	class ChildClass implements iExample, iExampleTwo {
		
		public $taxRate 	=	21;
		public $wage;

		public function getTaxRate ()
		{
			return $this->taxRate;
		}
		
		public function setTaxRate ($taxRate)
		{
			$this->taxRate 	=	$taxRate;
		}

		public function setWage( $wage )
		{
			$this->wage = $wage;
		}

		public function getWage()
		{
			return $this->wage;
		}
	}

?>