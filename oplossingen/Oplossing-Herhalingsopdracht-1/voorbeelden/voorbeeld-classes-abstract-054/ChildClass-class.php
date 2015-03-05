<?php 

	class ChildClass extends aExample {
		
		public $taxRate 	=	21;

		public function getTaxRate ()
		{
			return $this->taxRate;
		}
		
		public function setTaxRate ($taxRate)
		{
			$this->taxRate 	=	$taxRate;
		}
	}

?>