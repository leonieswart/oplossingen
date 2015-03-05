<?php

	require_once 'MathLibrary-class.php';

	$dialog;

	$dialog[]	=	'De waarde van pi is ' . MathLibrary::$piNumber;

	$dialog[]	=	'De lengte van de schuine zijde van een driehoek waarbij de overige zijden 5cm en 5cm zijn, bedraagt: ' . MathLibrary::pythagorasHypothenuse(5,5) . 'cm';

	$dialog[]	=	MathLibrary::getTestString();

	require_once 'voorbeelden-classes-static-view.php';

?>