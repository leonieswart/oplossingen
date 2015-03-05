<?php

	require_once 'aExample-abstract.php';
	require_once 'ChildClass-class.php';

	$ChildClass 	=	new ChildClass();

	$ChildClass->setTaxRate(6);

	$messages;

	$messages[]	= 	'De belastingsprocent bedraagt ' . $ChildClass->getTaxRate() . '%';	
	$messages[]	=	'De belastingsprocent werd berekend voor het land ' . $ChildClass->getCountry() . '.';

	require_once 'voorbeeld-classes-abstract-view.php';

?>