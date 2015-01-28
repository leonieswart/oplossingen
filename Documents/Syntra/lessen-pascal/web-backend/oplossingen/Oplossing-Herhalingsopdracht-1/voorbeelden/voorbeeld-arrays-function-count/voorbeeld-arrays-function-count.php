<?php

	$autos 			= 	array( 'Volvo', 'Porsche', 'Honda' );

	$autos[105]		=	'Ford';

	$aantalAutos 	= 	count( $autos );
	
	if ( $aantalAutos > 0 ) 
	{
		$resultaat = $aantalAutos . ' auto\'s in de lijst!';
	}
	else 
	{
		$resultaat = 'Er zijn geen waarden teruggevonden in de lijst van auto\'s!';
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van array functions</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van array functions</h1>

		<pre><?php var_dump( $autos ) ?></pre>

		<p><?= $resultaat ?></p>
		<p><?= $aantalAutos ?></p>

	</section>

</body>
</html>