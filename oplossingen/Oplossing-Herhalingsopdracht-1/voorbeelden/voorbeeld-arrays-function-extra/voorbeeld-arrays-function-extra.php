<?php
	
	$groenten 	= 	'wortel';
		
	$fruit 		= 	array( 'citroen' , 'banaan' , null );

	$mandje 	= 	array();

	// array_key_exists()
	$arrayKeyExistsTest01 	= 	array_key_exists( 0 , $fruit ); 
	$arrayKeyExistsTest02	=	array_key_exists( 2 , $fruit );

	// isset()
	$issetTest01	=	isset( $fruit[ 0 ] );
	$issetTest02	=	isset( $fruit[ 2 ] );

	// in_array()


	// empty()


	// $variableName

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld arrays function extra</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld arrays function extra</h1>	
		
		<h2>Dump van array $fruit</h2>
		<pre><?php var_dump($fruit) ?></pre>

		<h2>array_key_exists()</h2>
		<p>Value voor <code>array_key_exists( $fruit[ 0 ] )</code>: <?= $arrayKeyExistsTest01 ?></p>
		<p>Value voor <code>array_key_exists( $fruit[ 2 ] )</code>: <?= $arrayKeyExistsTest02 ?></p>	
			
		<h2>isset()</h2>
		<p>Value voor <code>isset( $fruit[0] )</code>: <?= $issetTest01 ?></p> 
		<p>Value voor <code>isset( $fruit[2] )</code>: <?= $issetTest02 ?></p> 

			
		<h2>in_array()</h2>
		<p>Value van <code>in_array( 'banaan', $fruit )</code> : <?= in_array('banaan', $fruit) ?></p> 
		<p>Value van <code>in_array( 'peer', $fruit )</code>: <?= in_array('peer', $fruit) ?></p>
			
		
		<h2>empty()</h2>

		<p>empty() value voor array $fruit: <?= empty( $fruit ) ?></p> 
		<p>empty() value voor array $mandje: <?= empty( $mandje ) ?></p>
			
			
		<h2>$variableName</h2>

		<p><code>$variableName</code> value voor variable <code>$groenten</code>: <?= ( $groenten ? 'true': 'false' ) ?></p>
				
		<p><code>!$variableName</code> value voor variable <code>$noten</code> (normaalgezien foutmelding omdat deze variabele niet bestaat.): <?= ( !$noten ? 'true': 'false' ) ?></p>

		<p><code>$variableName</code> value voor array <code>$mandje</code>: <?= ( $mandje ? 'true': 'false' ) ?></p>
		
		<p><code>!$variableName</code> value voor array <code>$mandje</code>: <?= ( !$mandje ? 'true': 'false' ) ?></p>

	</section>

</body>
</html>