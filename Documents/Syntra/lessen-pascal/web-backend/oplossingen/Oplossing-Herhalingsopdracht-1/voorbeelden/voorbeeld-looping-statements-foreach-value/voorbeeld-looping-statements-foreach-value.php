<?php
	$autos = array( 'Volvo', 'Porsche', 'Honda', 'Pagani', 'Peugot', 'Nissan', 'Volkswagen' );
	
	/*
	foreach ($autos as $value) 
	{
		echo $value . '<br>';
	}
	*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van looping statements: foreach (zonder key)</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van looping statements: foreach (zonder key)</h1>

		<ul>
			<?php foreach ($autos as $value): ?>
				<li><?php echo $value ?></li>
			<?php endforeach ?>
		</ul>

	</section>

</body>
</html>