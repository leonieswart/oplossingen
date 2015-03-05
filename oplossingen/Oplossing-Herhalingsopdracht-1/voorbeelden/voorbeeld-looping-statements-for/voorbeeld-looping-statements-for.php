<?php
		$autos 			= 	array( 'Volvo', 'Porsche', 'Honda', 'Pagani', 'Peugot', 'Nissan', 'Volkswagen' );
		$aantalAutos 	= 	count( $autos );

		/*
		for($i = 0; $i < $aantal_autos; ++$i ) 
		{
			echo $autos[$i] . '<br>';
		}
		*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van looping statements: for</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van looping statements: for</h1>

		<ul>
			<?php for( $i = 0; $i < $aantalAutos; ++$i ): ?>

				<li><?php echo $autos[$i] ?></li>

			<?php endfor ?>
		</ul>
		
	</section>

</body>
</html>