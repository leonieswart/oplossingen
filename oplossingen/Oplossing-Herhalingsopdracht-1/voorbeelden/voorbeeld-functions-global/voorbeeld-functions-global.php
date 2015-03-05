<?php		
		
	$klasgenootjes = array('Frederik', 'Sarah', 'Mathieu', 'Cederic');

	// Geslaagd verjaardagsfeestje
	/*
	function maakUitnodigingslijst() 
	{
		global $klasgenootjes;
		return join(', ', $klasgenootjes ); // Join lijmt alle waardes van een array aan elkaar met een opgegeven "delimiter" = een string die woorden van elkaar scheidt
	}
	*/

	// Geslaagd verjaardagsfeestje
	// Beste optie, omdat globale variabelen best te vermijden zijn
	function maakUitnodigingslijst($klasgenootjes) 
	{
		return join(', ', $klasgenootjes ); // Join lijmt alle waardes van een array aan elkaar met een opgegeven "delimiter" = een string die woorden van elkaar scheidt
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van scope van een function met globals</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van scope van een function met globals</h1>

		<p>De jarige nodigt uit: <?php echo maakUitnodigingslijst($klasgenootjes) ?></p>
		
	</section>
</body>
</html>