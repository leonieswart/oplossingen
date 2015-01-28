<?php

	function __autoload($className) {
	  require_once('classes/' . $className . '-class.php');
	}

	$messages;	

	$nothingInstance	=	new EchoNothing();
	$messages[] = $nothingInstance->nothing;

	$somethingInstance	=	new EchoSomething();
	$messages[] = $somethingInstance->something;

	require_once( 'voorbeeld-autoload-view.php' );
?>