<?php

	namespace google;

	class Engine
	{
		public function startEngine()
		{
			$string	=	"Let me Google that for you. (Class: " . __CLASS__ . ")";;
			
			return $string;
		}

		public function getUser()
		{
			$user		=	new user\user\User();
			$isValid	=	$user->getUserIsValid();

			return $isValid;
		}
	}

?>