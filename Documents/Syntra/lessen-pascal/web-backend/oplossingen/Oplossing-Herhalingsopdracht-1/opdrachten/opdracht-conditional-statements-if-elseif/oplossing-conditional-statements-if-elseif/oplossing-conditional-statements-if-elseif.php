<?php

	$getal 		=	22;
	$onderGrens	=	0;
	$bovenGrens	=	10;
	$ongeldig	=	false;

	// Boven en ondergrens bepalen
	if ($getal >= 0 && $getal < 10)
	{
		$onderGrens	=	0;
		$bovenGrens	=	10;
	}
	if ($getal >= 10 && $getal < 20)
	{
		$onderGrens	=	10;
		$bovenGrens	=	20;
	}
	elseif ($getal >= 20 && $getal < 30)
	{
		$onderGrens	=	20;
		$bovenGrens	=	30;
	}
	else
	{
		$ongeldig =	true;
	}

	
	// Tekst samenstellen
	if ( !$ongeldig )
	{
		$tekst =	'Het getal ' . $getal . ' ligt tussen '. $bovenGrens . ' en ' . $onderGrens;
	}
	else
	{
		$tekst = 'Het getal ' . $getal . ' ligt niet tussen de opgegeven waarde';	
	}

	/*
			
		Een iets elegantere oplossing:

		$onderGrens =	floor( $getal / 10 );
		$bovenGrens	=	$onderGrens	+ 10;

	*/


	// Draai de tekst om
	$omgekeerdeTekst	=	strrev($tekst);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing if else if</title>
	</head>
	<body>
		
		<h1>Oplossing if else if</h1>

		<?php if ( !$ongeldig ): ?>
			<p><?php echo $onderGrens ?> & <?php echo $bovenGrens ?>.</p>
		<?php else: ?>
			<p>Het getal <?php echo $getal ?> ligt niet tussen de opgegeven waarde</p>
		<?php endif ?>

		<p><?php echo $omgekeerdeTekst ?></p>
	</body>
</html>