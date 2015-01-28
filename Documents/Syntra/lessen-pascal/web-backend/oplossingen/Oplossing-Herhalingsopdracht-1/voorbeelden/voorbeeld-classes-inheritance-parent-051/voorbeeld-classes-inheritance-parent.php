<?php

	require_once 'Person-class.php';
	require_once 'Employee-class.php';

	$werknemer = new Employee('Ryan', 'Carsonified'); // Instantie aanmaken van de klasse Employee
	
	// Aangepaste employee klasse
	//$werknemer = new Employee('Ryan', 'Carsonified'); // Instantie aanmaken van de klasse Employee

	$dialog;

	$dialog[] 	=	'De werknemer ' . $werknemer->getName() . ' werkt bij ' . $werknemer->getCompany() . ' en heeft ' . $werknemer->getSavings() . '&euro; op zijn spaarboekje staan.';
	$dialog[]	=	$werknemer->work(8);
	$dialog[]	=	'De werknemer ' . $werknemer->getName() . ' heeft ' . $werknemer->getSavings() . '&euro; op zijn spaarboekje staan.'; // Method uit de parent class

	require_once 'voorbeeld-classes-inheritance-parent-view.php';

?>