<?php 
	
	var_dump( $_POST );

	if ( isset( $_GET[ 'logout' ] ) )
	{

		setcookie( 'authenticatedUserId', '', time() - 1000 );
		header('location: phpoefening-022-b.php');
	}

	$fileContent	=	file_get_contents( 'phpoefening-022-b.txt' );
	$userData		=	JSON_decode( $fileContent, true );


	$message			=	false;
	$isAuthenticated	=	false;
	
	if ( isset( $_POST[ 'submit' ] ) )
	{

		foreach ( $userData as $id => $user )
		{
			if ( $_POST[ 'username' ] == $user['username'] &&
					$_POST[ 'password' ] == $user['password'] )
			{

				$cookieTime	=	( isset( $_POST[ 'rememberMe' ] ) ? ( time() + 60*60*24*30 ) : time() + 3600 );

				setcookie( 'authenticatedUserId', $id, $cookieTime );
				header( 'location: phpoefening-022-b.php' );
				break;
			}
		}

		$message = 'Er ging iets mis. Probeer opnieuw.';		
	}

	if ( isset( $_COOKIE[ 'authenticatedUserId' ] ) )
	{
		$userId				=	$_COOKIE[ 'authenticatedUserId' ];
		$message			=	'Welkom ' . $userData[$userId]['username'] . '. U bent ingelogd.';
		$isAuthenticated	=	true;
	}

?>

<!DOCTYPE html>
<html>
<head></head>
	<body>
	

		<h1>Inloggen</h1>
		
		<?php if ($message): ?>
			<?=	$message ?>
		<?php endif ?>

		<?php if ( !$isAuthenticated ): ?>
		
			<form action="phpoefening-022-b.php" method="post">
				<ul>
					<li>
						<label for="username">Gebruikersnaam: </label>
						<input type="text" name="username" id="username" value="jan">
					</li>
					<li>
						<label for="password">Paswoord: </label>
						<input type="password" name="password" id="password" value="paswoord01">
					</li>
					<li>
						<label for="rememberMe">Mij onthouden: </label>
						<input type="checkbox" name="rememberMe" id="rememberMe">
					</li>
				</ul>
				<input type="submit" name="submit" value="inloggen">
			</form>
		<?php else: ?>

			<a href="phpoefening-022-b.php?logout=true">Uitloggen</a>

		<?php endif ?>
		


	</body>
</html>