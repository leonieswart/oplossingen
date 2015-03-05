<?php

	$lettertje		=	'e';
	$cijfertje		=	'3';
	$langsteWoord	=	'zandzeepsodemineralenwatersteenstralen';

	$woordVervangen	=	str_replace( $lettertje , $cijfertje, $langsteWoord );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing string extra functions: deel 3</title>
	</head>
	<body>
	
		<h1>Oplossing string extra functions: deel 3</h1>

		<p>Het woord <?php echo $langsteWoord ?> waarin alle  <?php echo $lettertje ?>'s vervangen zijn door  <?php echo $cijfertje ?>'s heeft als resultaat:  <?php echo $woordVervangen ?> </p>
	</body>
</html>