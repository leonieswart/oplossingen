<?php
	$frisdranken = array(	'Cola' 	=> 'Light', 
							'Fanta' => 'Lemon', 
							'Spa' 	=> 'Bruis');
	
	/*
	foreach ($frisdrank as $merk => $soort) 
	{
		echo 'Ik zou graag een ' . $merk . ' ' . $soort . ' willen bestellen aub.' . '<br>';
	}
	*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van looping statements: foreach (met key)</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">
	
	<section class="body">

		<h1>Voorbeeld van looping statements: foreach (met key)</h1>

		<ul>
			<?php foreach ($frisdranken as $merk => $soort): ?>

				<li>Ik zou graag een <?php echo $merk ?> <?php echo $soort ?> willen bestellen aub.</li>
				
			<?php endforeach ?>
		</ul>

	</section>

</body>
</html>