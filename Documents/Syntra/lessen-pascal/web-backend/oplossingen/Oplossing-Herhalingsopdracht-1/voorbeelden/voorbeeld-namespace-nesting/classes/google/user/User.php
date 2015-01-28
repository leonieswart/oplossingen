<?php

	namespace google\user\user;

	class User
	{
		public function getUserIsValid()
		{
			$validator	=	new \google\user\userValidator\UserValidator();

			$isValid	=	$validator->validate();

			return $isValid;
		}
	}

?>