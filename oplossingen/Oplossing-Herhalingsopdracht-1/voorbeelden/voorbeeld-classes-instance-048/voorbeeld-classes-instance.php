<?php

	require_once 'Finn-class.php';

	// Maak instantie van de klasse Finn
	$finn = new Finn();

	// Welk type is deze instantie? (puur voor demonstratieve doeleinden)
	$finnType 		= 	gettype( $finn );

	$name 				= 	$finn->name;
	$profilePicture 	= 	$finn->profilePicture;

	$finn->setTimestamp();

	$timestamp 		= 	$finn->getTimestamp();
	$catchPhrase 	= 	$finn->getCatchPhrase();


	// Roep de view op die deze variabelen op de juiste plaats toont.
	require_once 'voorbeeld-classes-instance-view.php';

?>