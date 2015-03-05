<?php

//Als je op de knop afvinken klikt dan...
	if 	( isset( $_POST['afvinken'] ) ) 

		{
			//wordt de variabel $sessionkey ingevuld met de value van button afvinken (nl. key van de array van specifiek item)
			$sessionKey = $_POST['afvinken'];

			$hide = "show";

			//we checken in de array verplaatsing of op de plek van de specifieke key false of true staat
			if  ( $_SESSION['verplaatsing'][$sessionKey] == false ) 
				
				{
					// is de key false dan wordt deze value van taken uitgeloopt in de html bij to do en zetten we de key op true
					$_SESSION['verplaatsing'][$sessionKey] = true;
				}

			else
				{
					// is de key true dan wordt deze value van taken uitgeloopt in de html bij done and done en zetten we de key terug op false
					$_SESSION['verplaatsing'][$sessionKey] = false;

				}

			//we tonen de melding: ...	
			$melding = "Check!";



		}	

//checks voor verplaatsing tussen todo en done en scorebord
	if  ( isset( $_SESSION['verplaatsing'] ) )
	
		{	
			$checkToDo = in_array(false, $_SESSION['verplaatsing']);
			$checkDone = in_array(true, $_SESSION['verplaatsing']);

			$tellerToDo = count( array_keys( $_SESSION['verplaatsing'], false ) );
			$tellerDone = count( array_keys( $_SESSION['verplaatsing'], true ) );
		}

//Als de array session['taken'] niet leeg is dan is de klasse van de divs show, anders hide			
	if 	($isLeeg == false) 

		{
			$hide = "show";
		}
		
	else

		{
			$hide = "hide";
		}

		

		

?>