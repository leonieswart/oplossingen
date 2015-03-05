<?php

//Als je op de knop verwijderen klikt dan...
	if 	( isset( $_POST['verwijderen'] ) ) 

		{
			//wordt de variabel $sessionkey ingevuld met de value van button verwijderen (nl. key van de array van specifiek item)
			$sessionKey = $_POST['verwijderen'];


			//we controleren voor de zekerheid of deze key bestaat in de array cookieTaken
			$keyBestaat = array_key_exists($sessionKey, $_SESSION['taken']);

			//als de key bestaat in de array cookieTaken dan...
			if 	($keyBestaat == TRUE) 

				{
					//unsetten/verwijderen we dit gehele element (enkel dat element met die specifieke key)
					unset($_SESSION['taken'][$sessionKey]);

					unset($_SESSION['verplaatsing'][$sessionKey]);

				}

			header( 'location: ' . $_SERVER[ 'PHP_SELF' ]  );


		}	

//Als de knop verwijderen niet werd ingedrukt dan tonen we niets.
	else

		{
			echo " ";
		}



?>