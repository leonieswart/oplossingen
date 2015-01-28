<?php

	$text	=	file_get_contents( 'text-file.txt' );

	// Manueel karakters in een array steken
	/*$textLength =	strlen( $text );

	$characterArray	=	array();

	for ($teller = 0; $teller < $textLength; ++$teller )
	{
		$characterArray[]	=	substr( $text, $teller, 1 );
	}*/

	$characterArray	=	str_split( $text );

	// Sorteer van Z naar A
	// resort is een directe manipulatie van de oorspronkelijke array en moet dus niet opgevangen worden in een aparte variabe
	// rsort returnt true or false, naargelang het sorteren gelukt is
	// http://li1.php.net/manual/en/function.rsort.php
	rsort( $characterArray );

	// Opgelet, array_reverse returnt niet true of false, maar een nieuwe array met de omgekeerde volgorde van de originele
	$characterSortedReversed = array_reverse( $characterArray );

	$tellerArray = array();

	foreach($characterSortedReversed as $value)
	{
		if ( isset ( $tellerArray[ $value ] ) )
		{
			++$tellerArray[ $value ];
		}
		else
		{
			$tellerArray[ $value ] = 1;
		}
		
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP oefening 015 - oplossing</title>
	</head>
	<body>

		<h1>Array van Z naar A</h1>
		<pre><?php //var_dump ( $characterArray ) ?></pre>

		<h1>Array reversed</h1>
		<pre><?php //var_dump ( $characterSortedReversed ) ?></pre>

		<h1>Array reversed</h1>
		<pre><?php var_dump ( $tellerArray ) ?></pre>
		
	</body>
</html>