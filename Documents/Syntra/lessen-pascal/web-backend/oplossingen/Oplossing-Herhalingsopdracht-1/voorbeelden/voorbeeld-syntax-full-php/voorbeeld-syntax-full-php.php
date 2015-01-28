<?php

/* Deze manier vermijden! */

$varString	=	"Hello World - de manier waarop het niet moet";

echo '  <!DOCTYPE html>
		<html>
			<head>
		        <meta charset="utf-8">
		        <meta name="viewport" content="width=device-width, initial-scale=1">
		        <title>Voorbeeld van Full php</title>
				<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
				<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
				<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
			</head>
			
			<body class="web-backend-inleiding">
			
			<h1>Voorbeeld van Full php</h1>';

echo '<p>' . $varString . '</p>';

echo '		</body>
		</html>';
?>