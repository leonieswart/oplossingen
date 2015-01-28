<?php

	$getallen		=	array();
	$aantalGetallen	=	100;

	$getal = 0;

	while ( $getal < $aantalGetallen )
	{
		$getallen[]	=	$getal;
		 ++$getal;
	}

	$getallenReeks	=	implode( ', ', $getallen );

	/* Getallenreeks 2 */

	$getal = 0;

	$getallen2	=	array();

	while ( $getal < $aantalGetallen )
	{
		if ( $getal % 3 == 0 && $getal > 40 && $getal < 80 )
		{
			$getallen2[]	=	$getal;
		}

		++$getal;
	}

	$getallenReeks2	=	implode( ', ', $getallen2 );
?>
	

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Oplossing while: deel1</title>

    </head>
    <body>
		
		<h1>Oplossing while: deel1</h1>

		<p>Getallenreeks1: <?= $getallenReeks ?></p>

		<p>Getallenreeks2: <?= $getallenReeks2 ?></p>

    </body>
</html>


