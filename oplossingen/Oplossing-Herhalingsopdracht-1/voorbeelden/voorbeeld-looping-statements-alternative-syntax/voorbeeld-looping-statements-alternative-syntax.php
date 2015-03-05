<?php
	
	$autos 			= 	array( 'Volvo', 'Porsche', 'Honda', 'Pagani', 'Peugot', 'Nissan', 'Volkswagen' );	

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld looping statements: alternative syntax</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>
<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld looping statements: alternative syntax</h1>

		<h2>De minst overzichtelijke manier (met accolades)</h2>
		<ul>

			<?php foreach( $autos as $auto) { ?>
				<li><?= $autos[$i] ?></li>
			<?php } ?>
		</ul>

		<h2>De beste manier (met : en endforeach)</h2>
		<ul>

			<?php foreach( $autos as $auto): ?>
				<li><?= $autos[$i] ?></li>
			<?php endforeach ?>
		</ul>
		
	</section>

</body>
</html>