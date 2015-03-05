<?php

	$origineelGetal1 = 5;
	$origineelGetal2 = 10;
	$origineelGetal3 = 2;

	/*  Reset getallen naar originele waarden */
	$getal1 = $origineelGetal1;
	$getal2 = $origineelGetal2;
	$getal3 = $origineelGetal3;
	
	$add 		= 	$getal1 + $getal2;
	
	$subtract 	= 	$getal1 - $getal2;
	
	$multiply 	= 	$getal1 * $getal2;
	
	$divide 	= 	$getal1 / $getal2;

	$modulo		=	$getal2 % $getal3;

	/*  Reset getallen naar originele waarden */
	$getal1 = $origineelGetal1;
	$getal2 = $origineelGetal2;
	$getal3 = $origineelGetal3;

	/*
		Verschil tussen post & pre
		bv. $i = 5
			$a = ++$i
			-> telt één op bij $i en returnt $i + 1
			(is de snelste optie in PHP)	

		bv. $i = 5
			$a = $i++
			-> returnt $i en telt daarna één op bij $i
	*/

	$preIncrement 	= 	++$getal3;

	$getal3 		= 	$origineelGetal3;	// reset getal om increments aan te tonen
	$postIncrement 	= 	$getal3++;

	$getal3 		= 	$origineelGetal3;	// reset getal om increments aan te tonen
	$preDecrement 	= 	--$getal3;
	
	$getal3 		= 	$origineelGetal3;	// reset getal om increments aan te tonen
	$postDecrement 	= 	$getal3--;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van arithmetic operators</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van arithmetic operators</h1>
			
		<section class="unit">
			<p>getal 1: <?php echo $origineelGetal1 ?></p>
			<p>getal 2: <?php echo $origineelGetal2 ?></p>
			<p>getal 3: <?php echo $origineelGetal3 ?></p>
		</section>

		<p>optellen (g1 + g2): <?php echo $add ?></p>
		<p>aftrekken (g1 - g2): <?php echo $subtract ?></p>
		<p>vermenigvuldigen (g1 * g2): <?php echo $multiply ?></p> 
		<p>delen (g1 / g2): <?php echo $divide ?></p>
		<p>modulo (g2 % g3): <?php echo $modulo ?></p>

		<p>pre increment van getal 1 (g3): <?php echo $preIncrement ?></p>
		<p>post increment van getal 1 (g3): <?php echo $postIncrement ?></p>

		<p>pre decrement van getal 1 (g3): <?php echo $preDecrement ?></p>
		<p>post decrement van getal 1 (g3): <?php echo $postDecrement ?></p>

	</section>

</body>
</html>