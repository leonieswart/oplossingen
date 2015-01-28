<?php

	$fruit		=	'ananas';

	$haystack 	=	$fruit;	
	$needle 	=	'a';

	$laatsteNeedle	=	strrpos( $haystack, $needle );

	$fruitCapitalized	=	strtoupper( $fruit );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing string extra functions: deel 2</title>
	</head>
	<body>
		
		<h1>Oplossing string extra functions: deel 2</h1>

		<p>De needle <?php echo $needle ?> komt in <?php echo $haystack ?> voor de laatste keer op plaats <?php echo $laatsteNeedle ?> voor</p>
		<p>Het fruit in hoofdletters: <?php echo $fruitCapitalized ?></p>
	</body>
</html>