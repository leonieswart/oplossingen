<?php

	function autoloader( $className ) {
	  require_once( 'classes/' . $className . '-class.php');
	}

	spl_autoload_register( 'autoloader' );

	$messages;	

	$nothingInstance	=	new EchoNothing();
	$messages[] = $nothingInstance->nothing;

	$somethingInstance	=	new EchoSomething();
	$messages[] = $somethingInstance->something;

	require_once( 'voorbeeld-autoload-spl-view.php' );
?>