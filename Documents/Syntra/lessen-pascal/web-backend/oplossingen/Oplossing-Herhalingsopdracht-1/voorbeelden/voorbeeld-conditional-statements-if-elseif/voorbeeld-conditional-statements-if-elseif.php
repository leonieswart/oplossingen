<?php
	$drank = "fanta";
	
	if ( $drank == "cola" ) 
	{
		$antwoord = "Lekker! Ik drink graag cola.";
	} 
	elseif ( $drank == "fanta" ) 
	{
		$antwoord = "Ook al drink ik liever cola, fanta lust ik ook nog wel.";
	} 
	else 
	{
		$antwoord = "Geen cola én geen fanta? Schandalig!";
	}
	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van conditional statements: if ... elseif ... else ...</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van conditional statements: if ... elseif ... else ...</h1>

		<p>Vandaag op het menu: <?php echo $drank ?></p>
		<p>- <?php echo $antwoord ?></p>

	</section>

</body>
</html>