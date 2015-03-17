<?php

session_start();

if ( $_SESSION['secure'] == TRUE) {
	

echo $_SESSION['melding']['bericht'];

}


else {

	$_SESSION['melding']['bericht'] = "Gelieve u te registreren.";	
	header( 'location: ' . "registratie-form.php"  );
}



?>