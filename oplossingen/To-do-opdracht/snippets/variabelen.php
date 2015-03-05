<?php
ini_set('session.cookie_lifetime', 60*60*24*31);
session_start();	

	//variabele om taak in op te vangen
	$taak = "";
	//variabele om melding mee weer te geven
	$melding = "";
	$opmaak = "";
	//variabele die we gebruiken bij de verplaatsing tussen todo en done
	$done = false;
	//variabele hide om divs done and done and todo te verbergen/tonen
	$hide = "";
	//Checken of de array session['taken'] leeg is
	$isLeeg =	empty( $_SESSION['taken'] );
?>