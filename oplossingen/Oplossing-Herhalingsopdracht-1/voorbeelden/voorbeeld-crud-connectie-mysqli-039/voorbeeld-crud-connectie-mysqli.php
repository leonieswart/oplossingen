<?php

	$messageContainer	=	'';

	$db = new mysqli('localhost', 'root', 'root'); // Connectie maken

	// Controleren of er een fout zich heeft voorgedaan
	if($db->connect_errno > 0)
	{
	    $messageContainer	=	'Kan geen connectie maken: ' . $db->connect_error . ' Kijk deze oefening na en controleer of de username en het paswoord overeenstemmen met die van je lokale PhpMyAdmin.';
	}
	else
	{
		// Bewerkingen uitvoeren als de connectie geslaagd is.
		$messageContainer	= 'Connectie geslaagd.';
	}

	// De connectie afsluiten (optioneel -> gebeurt normaal automatisch na het beëindigen van het script)
	$db->close();

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van database connectie - MySQLi</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van database connectie - MySQLi</h1>	

		<p><?php echo $messageContainer ?></p>

	</section>
		
</body>
</html>