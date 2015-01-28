<?php

	require_once 'AdventureTimeCharacter-class.php';
	require_once 'BadGuy-class.php';
	require_once 'GoodGuy-class.php';

	// Maak instantie van de klasse Timestamp
	$finn 				= new GoodGuy( 'Finn', 'Mathematical!', 'finn.jpg' );
	$jake 				= new GoodGuy( 'Jake', 'It\'s business time!', 'jake.jpg' );
	$princessBubblegum 	= new GoodGuy( 'Princess Bubblegum', 'Finn, what the cabbage?', 'princess-bubblegum.jpg' );
	$iceKing 			= new BadGuy( 'Ice King', 'I am the king! I am the king of c-c-cool!', 'ice-king.jpg' );

	$dialog;

	$dialog[]	=	array( 'profilePicture' => $jake->profilePicture, 'text' => $jake->getFormattedChatchPhrase() );

	$dialog[]	=	array( 'profilePicture' => $finn->profilePicture, 'text' => $finn->getFormattedChatchPhrase() );

	$dialog[]	=	array( 'profilePicture' => $iceKing->profilePicture, 'text' => $iceKing->getFormattedChatchPhrase() );

	$dialog[]	=	array( 'profilePicture' => $princessBubblegum->profilePicture, 'text' => $princessBubblegum->tauntBadGuy( $iceKing ) );

	$dialog[]	=	array( 'profilePicture' => $iceKing->profilePicture, 'text' => $iceKing->kidnapCharacter( $princessBubblegum ) );

	$dialog[]	=	array( 'profilePicture' => $finn->profilePicture, 'text' => $finn->freeCharacter( $princessBubblegum, $iceKing ) );

	$dialog[]	=	array( 'profilePicture' => $princessBubblegum->profilePicture, 'text' => $princessBubblegum->getFormattedChatchPhrase() );

	// Roep de view op die deze variabelen op de juiste plaats toont.
	require_once 'voorbeeld-classes-inheritance-extends-view.php';
?>