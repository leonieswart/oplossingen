<?php

	$haystack 		= 	'Zoeken naar een naald in een hooiberg.';
	$needle 		= 	'Z';
	
	$needlePosition	= 	strpos( $haystack, $needle );
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">
	
	<section class="body">

		<h1>Voorbeeld van PHP string-functies: strpos()</h1>

		<ul>
		    <li>haystack: <?php echo $haystack ?></li>
		    <li>needle: <?php echo $needle ?></li>
		    <li>needle position: <?php echo $needlePosition ?></li>
		</ul>

	</section>

</body>
</html>