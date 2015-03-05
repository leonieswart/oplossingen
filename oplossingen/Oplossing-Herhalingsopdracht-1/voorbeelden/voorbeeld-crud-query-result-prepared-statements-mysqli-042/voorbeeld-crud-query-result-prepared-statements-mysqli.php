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
		$alcoholPercentage	=	2;

		// In dit geval een query klaarmaken
		$statement 	= 	$db->prepare('SELECT bieren.biernr, 
												bieren.naam, 
												bieren.brouwernr, 
												bieren.soortnr, 
												bieren.alcohol 
									FROM bieren
									WHERE bieren.alcohol LIKE ?');

		$statement -> bind_param( 'i', $alcoholPercentage );

		$statement -> execute();

		$statement -> bind_result( $biernr, $naam, $brouwernr, $soortnr, $alcohol );

		$fetchedResult 	=	array(); 
		
		// Om de resultaten van de query te overlopen moeten we gebruik maken van de while-lus waarbij de $row-variabele staat voor de huidige rij.
		// De while-lus overloopt alle rijen die voldoen aan de query.
		// De rijen worden toegevoegd aan de fetchArray array, die daarna onderaan in de HTML te gebruiken is.
		while ( $statement -> fetch() )
		{
			$arrayDump 				= 	array();

			// Numeriek
			$arrayDump[0] 	= 	$biernr;  
			$arrayDump[1] 	= 	$naam;  
			$arrayDump[2] 	= 	$brouwernr;  
			$arrayDump[3] 	= 	$soortnr;
			$arrayDump[4] 	= 	$alcohol;

			// Associatief
			$arrayDump['biernr'] 		= 	$biernr;  
			$arrayDump['naam'] 			= 	$naam;  
			$arrayDump['brouwernr'] 	= 	$brouwernr;  
			$arrayDump['soortnr'] 		= 	$soortnr;
			$arrayDump['alcohol'] 		= 	$alcohol;  

			$fetchedResult[] 		= 	$arrayDump; 
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
			<?php foreach ($fetchedResult as $row): ?>
				<ul>
					<li>Eerste manier: Biernummer: <?php echo $row[0] ?>, Naam: <?php echo $row[1] ?>, Brouwernummer: <?php echo $row[2] ?>, Soortnummer: <?php echo $row[3] ?>', Alcohol: <?php echo $row[4] ?></li>
					<li>Tweede manier: Biernummer: <?php echo $row['biernr'] ?> Naam: <?php echo $row['naam'] ?> Brouwernummer: <?php echo $row['brouwernr'] ?> Soortnummer: <?php echo $row['soortnr'] ?> Alcohol: <?php echo $row['alcohol'] ?></li>
				</ul>
			<?php endforeach ?>
		</ul>

	</section>
		
</body>
</html>