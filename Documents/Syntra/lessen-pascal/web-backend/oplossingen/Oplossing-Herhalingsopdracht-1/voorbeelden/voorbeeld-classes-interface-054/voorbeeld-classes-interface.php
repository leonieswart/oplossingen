<?php

	require_once 'iExample-interface.php';
	require_once 'iExampleTwo-interface.php';
	require_once 'ChildClass-class.php';

	$childClass 	=	new ChildClass();

	$childClass->setWage( 1000 );

	$childClass->setTaxRate(6);

	$messages;

	$messages[]	= 'Het loon bedraagt ' . $childClass->getWage() . '&euro;';
	$messages[]	= 'De belastingsprocent bedraagt ' . $childClass->getTaxRate() . '%';

	require_once 'voorbeeld-classes-interface-view.php';

?>