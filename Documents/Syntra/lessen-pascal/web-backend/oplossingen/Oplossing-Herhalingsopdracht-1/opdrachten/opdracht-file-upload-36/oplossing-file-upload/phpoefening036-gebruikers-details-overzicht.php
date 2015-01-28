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
			
			$userDetailsQuery = mysql_query('SELECT * FROM users WHERE users.email = "' . $email . '"');
			
			//Controleren of de hash van de email + salt overeenkomen met die uit de cookie
			if (md5($email . $salt) == $hashedEmail) {			
			
				$dump .= '<html>
								<head>
									<title>test</title>
									<style>
										img {
											max-width:200px;
										}
									</style>
								</head>
								<body>';
				
				//TOP NAVIGATIE
				$dump .= 'Ingelogd als ' . $email . ' | <a href="phpoefening036-logout.php">uitloggen</a><br />';
				$dump .= '<a href="phpoefening036-dashboard.php">Terug naar overzicht</a><br />';

				$dump .= '<h1>Gebruikersgegevens wijzigen</h1>';
				
				if (isset($_SESSION['notification'])) {
							$dump .= $_SESSION['notification'];
							unset($_SESSION['notification']);
						}
				
				$dump .= '<form action="phpoefening036-gebruikers-details-wijzigen.php" method="post" enctype="multipart/form-data">
							<ul>';
							
				
				
						while($row = mysql_fetch_assoc($userDetailsQuery)) {
						
							if ($row['profile_image'] != '' || $row['profile_image'] == 0 || $row['profile_image'] == NULL) {
								$dump .= '<li><img src="img/' . $row['profile_image'] . '" /></li>';
							}
							
										
										
							
							foreach($row as $key => $value) {
							
								
									
								if ($key == 'email' || $key == 'password'){
								
									$dump .= '<li>
										<label for="' . $key . '">' . $key . '</label>
									<input type="text" name="' . $key . '" id="' . $key . '" value="' . $value . '" /></li>';
								} elseif ($key == 'profile_image') {
									$dump .= '<li><label for="' . $key . '">' . str_replace('_', ' ', $key) . '</label>
									<input type="file" name="' . $key . '" id="' . $key . '" /><br /></li>';
								}
							
							}
						}

				$dump .= '</ul>
						<input type="submit" name="submit" value="Wijzig gegevens" />	
					</form>
				</body>
				</html>';
								
				
			} else { // Automatisch uitloggen (cookie deleten), wanneer de cookie niet geldig is
				
				header('location:phpoefening036-logout.php');
			}

		
	} else {
	
		//Wanneer de cookie niet geset is, moet er automatisch doorverwezen worden naar de login-pagina.
		header('location: phpoefening036-login.php');
	}
	
echo $dump;

?>