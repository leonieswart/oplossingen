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



	</body>
</html>