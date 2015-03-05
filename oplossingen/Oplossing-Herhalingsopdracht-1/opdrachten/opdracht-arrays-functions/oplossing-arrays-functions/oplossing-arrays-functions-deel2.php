<?php

	

	$dieren	=	array( "kat", "hond", "paard", "quetzal", "dodo", "struisvogel" );

	$gesorteerdeDieren	=	$dieren;

	sort( $gesorteerdeDieren );

	$zoogdieren	=	array( "aap", "paard", "dolfijn" );

	$newDieren	=	array_merge( $dieren, $zoogdieren );

	var_dump( $newDieren );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing arrays</title>
    </head>
    <body>

    	<h1>Oplossing array functies - deel 2</h1>

		<h2>Originele dieren array</h2>
			
		<pre>
			<?php var_dump( $dieren ) ?>
		</pre>
		
		<h2>Gesorteerde dieren array</h2>

		<pre>
			<?php var_dump( $dieren ) ?>
		</pre>

		<h2>Samengevoegde dieren array</h2>

		<pre>
			<?php var_dump( $zoogdieren ) ?>
		</pre>

		<pre>
			<?php var_dump( $newDieren ) ?>
		</pre>


		
    </body>
</html>