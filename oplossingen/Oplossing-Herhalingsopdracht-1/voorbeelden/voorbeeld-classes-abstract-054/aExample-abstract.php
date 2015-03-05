<?php 

	abstract class aExample {
		
		abstract public function getTaxRate ();

		abstract protected function setTaxRate ($taxRate);

		public function getCountry()
		{
			return 'Belgi&euml;';
		}
	}

?>