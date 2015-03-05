<?php 
	
	//PASSWORD
	$paswoord 			= 	'voetzool';
	$isAuthenticated	=	false;
	$message			=	'';
	
	//LOGOUT
	if (isset($_GET['cookie'])) {
	
		if ($_GET['cookie'] == 'delete') {
		
			setcookie('authenticated','', time() - 3600 );
			
			header('location: voorbeeld-cookie.php');
		}
	}

	//ON PASSWORD SUBMIT
	if (isset( $_POST['password'] ) ) 
	{
		
		if ($_POST['password'] == 'voetzool') 
		{
			
			setcookie( 'authenticated', TRUE, time() + 60 );
			header( 'location: voorbeeld-cookie.php' );
		} 
		else 
		{
		
			$message = 'Paswoord niet correct. Probeer opnieuw.';
		}
	}

	//IF AUTHENTICATED
	if ( isset( $_COOKIE['authenticated'] ) ) 
	{
		$isAuthenticated	=	true;
	}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld cookies</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld cookies</h1>

			<h1>Geef het paswoord in</h1>
			
			<?php if ( $isAuthenticated ):	?>
				<p>U bent ingelogd.</p>
				<p><a href="?cookie=delete">Uitloggen</a></p>
			<?php else: ?>
				<?php if ( $message ): ?>
					<p><?php echo $message ?></p>
				<?php endif ?>
				<form action="voorbeeld-cookie.php" method="post">
					<ul>
						<li><label for="password">Paswoord: </label>
						<input type="password" name="password" id="password"></li>
					</ul>
					<input type="submit">
				</form>
			<?php endif ?>

	</section>
	
</body>
</html>