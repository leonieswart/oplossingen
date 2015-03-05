<?php
	$autos = array( 'Volvo', 'Porche', 'Honda', 'Pagani', 'Peugot', 'Nissan', 'Volkswagen' );
	
	$i 	= 	0;
	$j 	= 	0;

	/*
	while( $i < 0 ) {
		echo $autos[$i] . '<br>';
		++$i;
	}
	*/
	
	/*
	do {
		echo $autos[$j] . '<br>';
		++$j;
	} while( $j < 0 )
	*/
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

		<h1>Voorbeeld van looping statements: do ... while</h1>

		<h2>while loop:</h2>
		<ul>
			<?php while ( $i < 0 ): ?>

				<li><?php echo  $autos[$i] ?></li>

				<?php ++$i ?>

			<?php endwhile ?>
		</ul>

		<h2>do ... while loop:</h2>
		<ul>
			<?php 
				/* OPM: Heeft geen alternative syntax*/
				do {
					echo '<li>' . $autos[$j] . '</li>';
					++$j;
				} while ( $j < 0 )

			?>
		</ul>
		
	</section>

</body>
</html>