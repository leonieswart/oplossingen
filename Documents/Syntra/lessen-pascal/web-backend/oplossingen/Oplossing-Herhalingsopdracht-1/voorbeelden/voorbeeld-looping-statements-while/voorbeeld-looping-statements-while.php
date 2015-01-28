<?php
	$autos = array( 'Volvo', 'Porsche', 'Honda', 'Pagani', 'Peugot', 'Nissan', 'Volkswagen' );
	
	$i=0;
	
	/*
	while( $autos[$i] != 'Peugot') {
		echo $autos[$i] . '<br>';
		++$i;
	}
	*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van looping statements: while</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van looping statements: while</h1>

		<ul>
			<?php while ( $autos[$i] != 'Peugot' ): ?>

				<li><?php echo  $autos[$i] ?></li>

				<?php ++$i ?>

			<?php endwhile ?>
		</ul>

	</section>

</body>
</html>