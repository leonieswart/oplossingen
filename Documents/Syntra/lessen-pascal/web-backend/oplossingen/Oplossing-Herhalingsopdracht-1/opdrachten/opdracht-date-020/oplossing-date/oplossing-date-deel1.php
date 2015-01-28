<?php

	$timestamp	=	mktime( 22, 35, 25, 01, 21, 1904 );

	//setlocale( LC_ALL, 'nld_nld' );
	$date	=	strftime( '%d %B %Y, %H:%M:%S %p', $timestamp );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Oplossing date: deel1</title>

    </head>
    <body>
		
		<h1>Oplossing date: deel1</h1>

		<p>De timestamp van 22u 35m 25sec 21 januari 1904 is <?= $timestamp ?></p>

		<p>De timestamp omgezet naar een datum: <?= $date ?></p>
    </body>
</html>