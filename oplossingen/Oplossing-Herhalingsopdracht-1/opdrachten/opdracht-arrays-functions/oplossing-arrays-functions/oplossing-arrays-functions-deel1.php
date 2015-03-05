<?php

	$dieren	=	array( "kat", "hond", "paard", "quetzal", "dodo", "struisvogel" );

	$aantalDieren	=	count( $dieren );

	$teZoekenDier	=	"kat";

	$dierGevonden	=	array_search( $teZoekenDier, $dieren );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing arrays</title>
    </head>
    <body>

    	<h1>Oplossing array functies - deel 1</h1>

		<pre>
			<?php var_dump( $dieren ) ?>
		</pre>
	
		<p>Aantal dieren: <?= $aantalDieren ?></p>

		<?php if ( $dierGevonden ): ?>
			
			<p>Het dier "<?= $teZoekenDier ?>" komt voor in de array $dieren</p>

		<?php else: ?>
			
			<p>Helaas, het dier "<?= $teZoekenDier ?>" komt niet in de array $dieren voor</p>

		<?php endif ?>
		
    </body>
</html>