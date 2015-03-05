<?php 

	class Base {	

		// Property visbility testen
		public $publicVariable			=	'Public variable base class';
		protected $protectedVariable	=	'Protected variable base class';
		private $privateVariable		=	'private variable base class';

		
		public function getProtectedVariableBase()
		{

			return $this->protectedVariable;
		}

		public function getPrivateVariableBase()
		{

			return $this->privateVariable;
		}

		public function blabla($test)
		{

			return 'test';
		}
	}

?>