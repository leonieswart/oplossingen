<?php 

	class MathLibrary {
		
		public static $testString	=	'Dit is een wiskundige teststring';
		public static $piNumber		=	3.14;

		public static function pythagorasHypothenuse ($a, $b)
		{

			return sqrt((pow($a, 2) + pow($b, 2)));
		}

		public static function getTestString()
		{

			return self::$testString;
		}
	}

?>