<?php

	require_once 'AdventureTimeCharacter-class.php';

	// Maak instantie van de klasse Timestamp
	$finn 				= new AdventureTimeCharacter( 'Finn', 'Mathematical!', 'finn.jpg' );
	$jake 				= new AdventureTimeCharacter( 'Jake', 'It\'s business time!', 'jake.jpg' );
	$princessBubblegum 	= new AdventureTimeCharacter( 'Princess Bubblegum', 'Finn, what the cabbage?', 'princess-bubblegum.jpg' );
	$iceKing 			= new AdventureTimeCharacter( 'Ice King', 'I am the king! I am the king of c-c-cool!', 'ice-king.jpg' );

	// Roep de view op die deze variabelen op de juiste plaats toont.
	require_once 'voorbeeld-classes-inheritance-extends-aanleiding-view.php';
?>