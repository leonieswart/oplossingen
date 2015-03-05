<?php

	class Animal
	{

		protected $name, 
					$sex,
					$health;

		public function __construct( $name, $sex, $health )
		{
			$this->name		=	$name;
			$this->sex		=	$sex;
			$this->health	=	$health;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getSex()
		{
			return $this->sex;
		}

		public function getHealth()
		{
			return $this->health;
		}

		public function changeHealth( $healthPoint )
		{
			$this->health 	+= 	$healthPoint;

			return $this->health;
		}

		public function doSpecialMove()
		{
			return 'Walk';
		}

	}

?>
