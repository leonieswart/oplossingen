<?php 
	
	session_start();

	$loggedIn			=	false;
	$error				=	false;
	$messageContainer 	= 	false;
	$queryString 		= 	false;
	
	//ON PASSWORD SUBMIT
	if ( isset( $_POST['submit'] ) ) {
		
		try
		{
			$db = new PDO('mysql:host=localhost;dbname=voorbeeld-security-user-type', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken

			$queryString = 'SELECT * FROM users 
								WHERE username = :username 
								AND password = :password';

			// Een query klaarmaken. 
			$statement = $db->prepare($queryString);

			$statement->bindParam(':username', $_POST['username']);
			$statement->bindParam(':password', $_POST['password']);

		
			// Een query uitvoeren
			$statement->execute();

			$fetchAssoc = array();

			$result = $statement->fetch(PDO::FETCH_ASSOC);
			
			// Controleren of er een gebruiker in de db werd teruggevonden met de ingevoerde gebruikersnaam & paswoord
			if ( $result )
			{
				$_SESSION['username'] 		= 	$result['username'];
				$_SESSION['user_type'] 		= 	$result['user_type'];
				$_SESSION['queryString'] 	= 	$queryString; // Voor demo-doeleinden
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

			$admin		=	false;

			$queryString 	= 	$_SESSION['queryString'];
			$username 		= 	$_SESSION['username'];

			// Maximum twee gebruikers in dit voorbeeld: admin (0), gewone gebruiker (1)
			if ( $_SESSION['user_type'] != 1 )
			{
				$admin	=	true;
			}

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
    <title>Voorbeeld security: user type</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld security: user type</h1>

		<?php if ($loggedIn): ?>
		
			<p>Welkom <?php echo $username ?>. U bent succesvol ingelogd!</p>
			
			<?php if ( $admin ): ?>
				<p>Dit is een verborgen tekst, speciaal voor de admin</p>
				<nav>
					<a href="voorbeeld-security-user-type-geheim.php">Supergeheime pagina</a>
				</nav>
			<?php endif ?>

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