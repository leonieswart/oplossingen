<?php

	$fruit		=	'kokosnoot';

	$haystack 	=	$fruit;	
	$needle 	=	's';

	$eersteNeedle	=	strpos( $haystack, $needle );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing string extra functions: deel 1</title>
	</head>
	<body>
		<h1>Oplossing string extra functions: deel 1</h1>

		<p>De needle <?php echo $needle ?> komt in <?php echo $haystack ?> voor de eerste keer op plaats <?php echo $eersteNeedle ?> voor</p>
	</body>
</html>