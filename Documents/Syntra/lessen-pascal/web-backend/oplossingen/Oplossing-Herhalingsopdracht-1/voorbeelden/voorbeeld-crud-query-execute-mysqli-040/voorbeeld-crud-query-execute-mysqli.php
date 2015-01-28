<?php

	$messageContainer	=	'';

	$db = new mysqli('localhost', 'root', 'root'); // Connectie maken

	// Controleren of er een fout zich heeft voorgedaan
	if($db->connect_errno > 0)
	{
	    $messageContainer	=	'Kan geen connectie maken: ' . $db->connect_error;
	}
	else
	{
		// Bewerkingen uitvoeren als de connectie geslaagd is.

		// In dit geval een query uitvoeren. 
		// Dit kan perfect in de if-statement conditie
		// hoeft niet per se in een aparte variabele te staan om uitvoerbaar te zijn 
		// (maar kan soms wel duidelijker zijn)
		if( $db->query('CREATE DATABASE eigen_db') ) 
		{
			$messageContainer 	= 	'Tabel succesvol gecreëerd';
		} 
		else 
		{
			$messageContainer 	= 	'Er ging iets mis bij de creatie van de tabel.';
		}
	}

	// De connectie afsluiten (optioneel -> gebeurt normaal automatisch na het beëindigen van het script)
	$db->close();

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van database query (MySQLi)</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van database query (MySQLi)</h1>	

		<p><?php echo $messageContainer ?></p>

	</section>
		
</body>
</html>