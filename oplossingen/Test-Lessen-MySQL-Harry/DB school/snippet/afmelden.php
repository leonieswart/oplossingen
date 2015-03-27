<?php if  ( isset( $_POST["afmelden"] ) ) 
			
			{
				session_destroy();
				header( 'location: ' . "login.php"  ); 
			}

?> 