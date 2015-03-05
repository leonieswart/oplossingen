<?php

	// SELF

	require_once 'Person-class.php';
	require_once 'Employee-class.php';

	$werknemer = new Employee('Ryan', 'Carsonified'); // Instantie aanmaken van de klasse Employee

	$dialog;

	$dialog[] 	=	'De werknemer ' . $werknemer->getName() . ' werkt bij ' . $werknemer->getCompany() . ' en heeft ' . $werknemer->getSavings() . '&euro; op zijn spaarboekje staan.'; // Methods uit de parent class

	$dialog[] 	=	$werknemer->work(8); // Method uit de child class

	$dialog[] 	=	'De werknemer ' . $werknemer->getName() . ' werkt bij ' . $werknemer->getCompany() . ' en heeft ' . $werknemer->getSavings() . '&euro; op zijn spaarboekje staan.'; // Method uit de parent class
	
	$dialog[] 	=	'Na aftrek van de belastingen houdt hij ' . $werknemer->getNettoSavings() . '&euro; over';

	require_once 'voorbeeld-classes-inheritance-self-view.php';
?>