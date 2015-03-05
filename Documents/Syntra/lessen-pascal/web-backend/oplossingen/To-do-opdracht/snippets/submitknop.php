<?php

// Als je op de knop submit klikt dan....
	if 	( isset( $_POST['submit'] ) ) 

		{
			// nakijken of het invulvak "taak" ingevuld werd >>>> is het leeg dan....
			if 	( $_POST['taak'] == "" )
				
				{
					// dan verschijnt onderstaande boodschap
					$melding = "Gelieve een taak in te vullen!";
					$opmaak = "modal error";

				}

			// is het ingevuld dan .......		
			else

				{
					//variabele taak is de waarde uit invulvak
					$taak = $_POST['taak'];

					// array taken in session wordt gevuld met $taak
					$_SESSION['taken'][] = $taak;

					//we vullen ook een array met op dezelfde key de waarde false (zie deeltje afvinken) 
					$_SESSION['verplaatsing'][] = $done;
					
					//tonen we de melding:...
					$melding = "Taak toegevoegd!";
					$opmaak = "modal okay";


					//zetten we de klasse van divs doneandone en todo op show
					$hide = "show";

					header( 'location: ' . $_SERVER[ 'PHP_SELF' ]  );


				}



		}

//werd er nog niet op de submitknop gedrukt dan tonen we onderstaande boodschap
	else 

		{
			$melding = "De applicatie is klaar voor gebruik. Geef je taken in.";
								$opmaak = "modal okay";

		}

?>