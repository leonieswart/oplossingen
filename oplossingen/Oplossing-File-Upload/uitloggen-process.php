<?php if ( isset( $_POST['uitloggen'] ) ) 

	             	{
	              		setcookie('login', "", time()- 30000000);
	              		unset($_SESSION['email']);
	              		$_SESSION['melding']['bericht'] = "U bent nu uitgelogd";
	              		header( 'location: ' . "login.php"  );


	              	} 	

	              	?>