<?php

	$naam		=	'';
	$message	=	false;

	try
	{
		if ( isset ( $_POST['submit'] ) )
		{
			if ( controle01( $_POST['naam'] ) )
			{
				$naam	=	$_POST['naam'];
			}
		}
	}
	catch ( Exception $e )
	{
		$message['type']	=	'error';
		$message['text']	=	$e->getMessage();

		$date	=	'[' . date( 'H:i:s', time() ).']';

		$errorString	=	$date . ' ' . $message['text'] . "\n\r";

		file_put_contents( 'error.log', $errorString, FILE_APPEND );
	}

	function controle01( $name )
	{
		if ( $name == 'Pascal')
		{
			throw new Exception( 'Sorry, maar Pascal mag niet binnen!' );
		}
		else
		{
			return controle02( $name );
		}
		
	}

	function controle02( $name )
	{
		if ( $name == '')
		{
			throw new Exception( 'Iets invullen aub!' );
		}
		else
		{
			return true;
		}
		
	}

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld error handling genest log</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld error handling genest log</h1>

		<?php if ( $message ): ?>
		 	<div class="modal <?= $message[ 'type' ] ?>">
		 		<?= $message[ 'text' ] ?>
		 	</div>
		<?php endif ?>

		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
			
			<ul>
				<li>
					<label for="naam">Hoe heet jij?</label>
					<input type="naam" name="naam" id="naam" placeholder="<?= $naam ?>">
				</li>
			</ul>
			<input type="submit" name="submit">

		</form>
	
	</section>

</body>
</html>