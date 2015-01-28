<?php

session_start();

$dump = '';

	if (isset($_COOKIE['login'])) {
	
			$mysql_con = mysql_connect('localhost', 'root', '');
		
			//EXTRA VEILIGHEID: controlleren of de cookie-gegevens kloppen
			//Zo vermijd je dat iemand die een cookie met key 'login' aanmaakt, willekeurig kan inloggen.
			//URL: javascript:document.cookie="login=myCookieValue" -> zal inloggen
			//Nadeel: wordt uitgevoerd elke keer de pagina wordt bezocht.
			
			mysql_select_db('phpoefening036', $mysql_con);
		
			//ophalen van de salt in de cms settings tabel
			$saltQuery = mysql_query('SELECT password_salt FROM cms_settings');
			
			$salt = mysql_fetch_array($saltQuery);
			
			$salt = $salt[0];
			
			$cookieExplode = explode(',', $_COOKIE['login']);
			
			$email = mysql_real_escape_string($cookieExplode[0]); // Moet geëscaped worden omdat deze waarde wordt gebruikt om het user_type uit de database op te halen
			$hashedEmail = $cookieExplode[1];
			
			$userDetailsQuery = mysql_query('SELECT * FROM users WHERE email = "' . $email . '"');
			
			$userDetailResult = mysql_fetch_assoc($userDetailsQuery);
			
			//Controleren of de hash van de email + salt overeenkomen met die uit de cookie
			if (md5($email . $salt) == $hashedEmail) {			
				
				if (isset($_POST['submit'])) {
					
					if (isset($_FILES['profile_image'])) {
					
					define('ROOT', dirname(dirname(__FILE__)));
					
						if ((($_FILES["profile_image"]["type"] == "image/gif")
							|| ($_FILES["profile_image"]["type"] == "image/jpeg")
							|| ($_FILES["profile_image"]["type"] == "image/pjpeg"))
							&& ($_FILES["profile_image"]["size"] < 2000000)) {
							
							if ($_FILES["profile_image"]["error"] > 0) {
								$_SESSION['notification'] = 'Er ging iets mis bij het uploaden van de foto. Probeer opnieuw.';
								header('location: phpoefening036-gebruikers-details-overzicht.php');
							}
							  else
								{
								
								$fileName = time() . $_FILES["profile_image"]["name"];

								if (file_exists(ROOT . '\\phpoefening036\\img\\' . time() . $_FILES["profile_image"]["name"])) {
								
									$_SESSION['notification'] = 'Dit bestand bestaat reeds in onze database';
									header('location: phpoefening036-gebruikers-details-overzicht.php');
								} else {
								
									$fileUploadSucceeded = move_uploaded_file($_FILES["profile_image"]["tmp_name"],
									ROOT . '\\phpoefening036\\img\\' . $fileName);
									
									if ($fileUploadSucceeded) {
									
										$updateQuery = mysql_query('UPDATE users 
										INNER JOIN tracking_details
										ON users.tracking_details = tracking_details.id
										SET tracking_details.changed_by_user_id = ' . $userDetailResult['id'] . ',
											tracking_details.changed_on = NOW(),
											users.email = "' . mysql_real_escape_string($_POST['email']). '",
											users.password = "' . mysql_real_escape_string($_POST['password']). '",
											users.profile_image = "' . $fileName . '"
										WHERE users.id = ' .$userDetailResult['id']);

										if ($updateQuery) {
											$_SESSION['notification'] = 'Gegevens aangepast';
											header('location: phpoefening036-gebruikers-details-overzicht.php');
										}
									} else {
									
										$_SESSION['notification'] = 'Er ging iets mis bij het uploaden van de foto. Probeer opnieuw.';
										header('location: phpoefening036-gebruikers-details-overzicht.php');
									};
								}
								}
							  }
							else{
								$_SESSION['notification'] = 'De foto is niet geldig.';
								header('location: phpoefening036-gebruikers-details-overzicht.php');
							}
					}
				}
				
				
								
				
			} else { // Automatisch uitloggen (cookie deleten), wanneer de cookie niet geldig is
				
				header('location:phpoefening036-logout.php');
			}

		
	} else {
	
		//Wanneer de cookie niet geset is, moet er automatisch doorverwezen worden naar de login-pagina.
		header('location: phpoefening036-login.php');
	}
	
echo $dump;

?>