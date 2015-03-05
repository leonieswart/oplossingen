<?php 
	
	if ( isset( $_GET[ 'logout' ] ) )
	{

		setcookie( 'authenticated', '', time() - 1000 );
		header('location: phpoefening-022-a.php');
	}

	$fileContent	=	file_get_contents( 'phpoefening-022-a.txt' );
	$userData		=	explode( ',', $fileContent );

	$message			=	false;
	$isAuthenticated	=	false;

	if ( !isset( $_COOKIE['authenticated'] ) )
	{
		if ( isset( $_POST[ 'submit' ] ) )
		{
			if ( $_POST[ 'username' ] == $userData[ 0 ] &&
					$_POST[ 'password' ] == $userData[ 1 ] )
			{
				setcookie( 'authenticated', true, time() + 3600 );
				header( 'location: phpoefening-022-a.php' );
			}
			else
			{
				$message = 'Er ging iets mis. Probeer opnieuw.';
			}
		}
	}
	else
	{
		$message			=	'U bent ingelogd.';
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
		
			<form action="phpoefening-022-a.php" method="post">
				<ul>
					<li>
						<label for="username">Gebruikersnaam: </label>
						<input type="text" name="username" id="username" value="jan">
					</li>
					<li>
						<label for="password">Paswoord: </label>
						<input type="password" name="password" id="password" value="paswoord01">
					</li>
				</ul>
				<input type="submit" name="submit" value="inloggen">
			</form>
		<?php else: ?>

			<a href="phpoefening-022-a.php?logout=true">Uitloggen</a>

		<?php endif ?>
		


	</body>
</html>