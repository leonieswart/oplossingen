<?php

	$messageContainer	=	'';

	try
	{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root'); // Connectie maken
		$messageContainer	=	'Connectie dmv PDO geslaagd.';
	}
	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van database connectie - PDO</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van database connectie - PDO</h1>	

		<p><?php echo $messageContainer ?></p>

	</section>
			
</body>
</html>