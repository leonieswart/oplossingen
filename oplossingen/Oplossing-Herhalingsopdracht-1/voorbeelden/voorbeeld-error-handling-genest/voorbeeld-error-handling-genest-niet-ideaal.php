<?php

	$naam		=	'';
	$message	=	false;

	try
	{
		if ( isset ( $_POST['submit'] ) )
		{
			if ( $_POST['naam'] == '' )
			{
				throw new Exception ( inception01() );
			}
			else
			{
				$naam	=	$_POST['naam'];
			}
		}
	}
	catch ( Exception $e )
	{
		$message['type']	=	'error';
		$message['text']	=	$e->getMessage();

	}

	function inception01(  )
	{
		return inception02();
	}

	function inception02()
	{
		return 'Iets invullen aub!';
	}

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld error handling genest (niet ideaal)</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld error handling genest (niet ideaal)</h1>

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