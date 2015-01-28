<?php

	session_start();

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$logout	=	User::logout();

	if ( $logout )
	{
		$logoutMessage	=	new Message('success', 'Tot de volgende keer!');
		header( 'location: phpoefening-029-a-login-form.php' );
	}

?>