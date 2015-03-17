<?php

session_start();

if ( $_SESSION['secure'] == TRUE) {
	

echo $_SESSION['melding']['bericht'];

}


else {

	$_SESSION['melding']['bericht'] = "Gelieve u aan te melden.";	
	header( 'location: ' . "login.php"  );
}



?>