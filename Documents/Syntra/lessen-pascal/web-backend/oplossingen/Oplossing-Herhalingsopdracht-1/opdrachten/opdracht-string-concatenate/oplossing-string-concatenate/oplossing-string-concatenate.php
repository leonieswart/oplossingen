<?php

	$naam 					=	'Nosenzo';	
	$voornaam 				=	'Pascal';

	$volledigeNaam 			=	$naam . ' ' . $voornaam;
	$volledigeNaamLengte	=	strlen($volledigeNaam);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing string concatenate</title>
	</head>
	<body>
		
		<h1>Oplossing string concatenate</h1>

		<p><?php echo $volledigeNaam ?></p>
		<p>Aantal karakters in string: <?php echo $volledigeNaamLengte ?></p>
	</body>
</html>