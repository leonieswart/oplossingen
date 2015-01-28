<?php
	
	$naam		=	"Augustus";
	$achternaam	=	"Octavius";

	$array	=	array( "Gaius", "Octavius" );
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld var_dump()</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>
<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld var_dump()</h1>
		
		<p><?php var_dump( $naam ) ?></p>

		<pre><?php print_r( $array ) ?></pre>

	</section>

</body>
</html>