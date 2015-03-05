<?php
	$autos 				= 	array( 'Volvo', 'Porsche', 'Honda' );
	$opTeZoekenAuto 	= 	'Ford';
	
	
	if( in_array( $opTeZoekenAuto, $autos ) ) 
	{
		$resultaat = $opTeZoekenAuto . ' is gevonden in de lijst van auto\'s!';
	}
	else 
	{
		$resultaat = $opTeZoekenAuto . ' kon niet teruggevonden worden in de lijst van auto\'s!';
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

		<p><?php echo $resultaat ?></p>

	</section>

</body>
</html>