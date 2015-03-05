<?php 
	/*
		//SQL QUERY OM DATABASE OP TE BOUWEN
		
		CREATE DATABASE `user_db_test` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
		USE `user_db_test`;

		CREATE TABLE IF NOT EXISTS `users` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
		  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


		INSERT INTO `users` (`id`, `username`, `password`) VALUES
		(1, 'gebruiker01', 'paswoord01'),
		(2, 'gebruiker02', 'paswoord02');
		
	*/
	
	// u: gebruiker01, p: paswoord01
	// u: gebruiker02, p: paswoord02

	// INJECTION: " OR "a" = "a

	session_start();

	$loggedIn			=	false;
	$error				=	false;
	$messageContainer 	= 	false;
	$queryString 		= 	false;
	
	//ON PASSWORD SUBMIT
	if ( isset( $_POST['submit'] ) ) {
		
		try
		{
			$db = new PDO('mysql:host=localhost;dbname=user_db_test', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken

			// Zo mag het niet! (maar gebeurt het soms wel...)
			$queryString = 'SELECT * FROM users 
								WHERE username = "' . $_POST['username'] . '" 
								AND password = "' . $_POST['password'] . '"';

			// Een query klaarmaken. 
			$statement = $db->prepare($queryString);
		
			// Een query uitvoeren
			$statement->execute();

			$fetchAssoc = array();

			$result = $statement->fetch(PDO::FETCH_ASSOC);
			
			// Controleren of er een gebruiker in de db werd teruggevonden met de ingevoerde gebruikersnaam & paswoord
			if ( $result )
			{
				$_SESSION['username'] 		= $result['username'];
				$_SESSION['queryString'] 	= $queryString; // Voor demo-doeleinden
				setcookie('authenticated', TRUE, time() + 360 );
				header('location: '. $_SERVER['PHP_SELF']);	
			}	
			else
			{
				$error = true;
			}

		}
		catch ( PDOException $e )
		{
			$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
		}
	}

	//IF AUTHENTICATED
	if (isset($_COOKIE['authenticated'])) 
	{
	
		if ($_COOKIE['authenticated']) {

			$queryString = $_SESSION['queryString'];
			$username = $_SESSION['username'];
			$loggedIn = true;
		}
		
		//LOGOUT
		if (isset($_GET['cookie'])) {
		
			if ($_GET['cookie'] == 'delete') {
				session_destroy();
				setcookie('authenticated','', time() - 3600 );
				
				header('location: '. $_SERVER['PHP_SELF']);
			}
		}
	}

	
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld SQL-injection</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld SQL-injection</h1>

		<?php if($queryString): ?>
			<p>SQL-query gebruikt om in te loggen: <?php echo $queryString ?></p>
		<?php endif ?>

		<?php if ($loggedIn): ?>
		
			<p>Welkom <?php echo $username ?>. U bent succesvol ingelogd!</p>
			<a href="<?php echo $_SERVER['PHP_SELF'] ?>?cookie=delete">uitloggen</a>
		
		<?php else: ?>

			<h1>Inloggen</h1>

			<?php if ($messageContainer): ?>
				<p><?php echo $messageContainer ?></p>
			<?php endif ?>
			
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			
					<?php if ($error): ?>
						<p>Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.</p>
					<?php endif ?>
					
					<ul>
						<li>
							<label for="username">Gebruikersnaam: </label>
							<input type="text" name="username" id="username" value="gebruiker01">
						</li>
						<li>
							<label for="password">Paswoord: </label><input type="text" name="password" id="password" value="paswoord01">
						</li>
					</ul>
					<input type="submit" name="submit" value="inloggen">
			</form>
		
		<?php endif ?>

	</section>

</body>
</html>