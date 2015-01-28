<?php 

	class Extending extends Base {
		
		// Property visbility testen
		public $publicVariable			=	'Public variable extending class';
		protected $protectedVariable	=	'Protected variable extending class';
		private $privateVariable		=	'private variable extending class';
	
		public function getProtectedVariableExtending()
		{

			return $this->protectedVariable;
		}
	
		public function getPrivateVariableExtending()
		{

			return $this->privateVariable;
		}


		public function blabla()
		{

			return 'test';
		}

	}

?>