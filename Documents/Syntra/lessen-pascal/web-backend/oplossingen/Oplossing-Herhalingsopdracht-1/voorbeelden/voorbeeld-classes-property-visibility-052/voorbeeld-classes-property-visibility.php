<?php

	require_once 'Base-class.php';
	require_once 'Extending-class.php';

	$class 	= new Extending();

	$dialog;

	$dialog[]	=	'public variable: ' . $class->publicVariable;
	//$dialog[]	=	'protected variable:' . $class->protectedVariable; // geen toegang
	//$dialog[]	=	'private variable:' . $class->privateVariable; // geen toegang

	$dialog[]	=	'protected variable extending: ' .$class->getProtectedVariableExtending();
	$dialog[]	=	'protected variable base: ' .$class->getProtectedVariableBase();
	$dialog[]	=	'private variable extending: ' .$class->getPrivateVariableExtending();
	$dialog[]	=	'private variable base: ' .$class->getPrivateVariableBase();

	require_once 'voorbeeld-classes-property-visibility-view.php';
?>