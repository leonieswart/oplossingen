<?php
	
	function __autoload( $className )
	{
		require_once( $className . '-class.php' );
	}

	// ANIMAL CLASS
	$kikker	=	new Animal('Kermit', 'male', 100);
	$kat	=	new Animal('Dikkie', 'male', 100);
	
	$kat->changeHealth(-10);

	$dolfijn	=	new Animal('Flipper', 'female', 80);

	// LION CLASS (extends ANIMAL)
	$simba 	= 	new Lion('Simba', 'male', 100, 'Congo lion');
	$scar 	= 	new Lion('Scar', 'female', 100, 'Kenia lion');

	// ZEBRA CLASS (extends ANIMAL)
	$zeke = new Zebra('Zeke', 'male', 120, 'Quagga');
	$zana = new Zebra('Zana', 'female', 100, 'Selous');

	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Oplossing PHPoefening 040</title>
</head>
	<body>
	

		<h1>Oplossing PHPoefening 040</h1>
		
		
		<p><?php echo $kikker->getName() ?> is van het geslacht <?php echo $kikker->getSex() ?> en heeft momenteel <?php echo $kikker->getHealth() ?> levenspunten</p>

		<p><?php echo $kat->getName() ?> is van het geslacht <?php echo $kat->getSex() ?> en heeft momenteel <?php echo $kat->getHealth() ?> levenspunten</p>

		<p><?php echo $dolfijn->getName() ?> is van het geslacht <?php echo $dolfijn->getSex() ?> en heeft momenteel <?php echo $dolfijn->getHealth() ?> levenspunten</p>


	<h1>Specifieke dierenklassen die gebaseerd zijn op de Animal klasse</h1>

	<h2>Leeuwen</h2>

		<p>Simba's (soort: <?php echo $simba->getSpecies() ?>) special move: <?php echo $simba->doSpecialMove() ?></p>
		<p>Scar's (soort: <?php echo $scar->getSpecies()  ?>) special move: <?php echo $scar->doSpecialMove() ?></p>


	<h2>Zebras</h2>

		<p>Zekes's (soort: <?php echo $zeke->getSpecies() ?>) special move: <?php echo $zeke->doSpecialMove() ?></p>
		<p>Zekes's (soort: <?php echo $zana->getSpecies()  ?>) special move: <?php echo $zana->doSpecialMove() ?></p>


	</body>
</html>