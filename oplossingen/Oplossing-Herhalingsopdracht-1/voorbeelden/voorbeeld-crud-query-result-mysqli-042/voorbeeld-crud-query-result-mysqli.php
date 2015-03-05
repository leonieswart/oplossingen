<?php

	$messageContainer	=	'';

	$db = new mysqli('localhost', 'root', 'root', 'bieren'); // Connectie maken

	// Controleren of er een fout zich heeft voorgedaan
	if ( $db->connect_errno > 0 )
	{
	    $messageContainer	=	'Kan geen connectie maken: ' . $db->connect_error;
	}
	else
	{
		// In dit geval een query uitvoeren
		$result 	= 	$db->query('SELECT * 
									FROM bieren');

		$fetchAssoc 	=	array(); 
		// Om de resultaten van de query te overlopen moeten we gebruik maken van de while-lus waarbij de $row-variabele staat voor de huidige rij.
		// De while-lus overloopt alle rijen die voldoen aan de query.
		// De rijen worden toegevoegd aan de fetchArray array, die daarna onderaan in de HTML te gebruiken is.
		while ( $row = $result->fetch_assoc() )
		{
			$fetchAssoc[] = $row;  
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
    <title>Voorbeeld van database resultaten ophalen en uitprinten (MySQLi)</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van database resultaten ophalen en uitprinten (MySQLi)</h1>	

		<ul>
			<?php foreach ($fetchAssoc as $row): ?>
				<ul>
					<li>Biernummer: <?php echo $row['biernr'] ?> Naam: <?php echo $row['naam'] ?> Brouwernummer: <?php echo $row['brouwernr'] ?> Soortnummer: <?php echo $row['soortnr'] ?> Alcohol: <?php echo $row['alcohol'] ?></li>
				</ul>
			<?php endforeach ?>
		</ul>
		
	</section>

</body>
</html>