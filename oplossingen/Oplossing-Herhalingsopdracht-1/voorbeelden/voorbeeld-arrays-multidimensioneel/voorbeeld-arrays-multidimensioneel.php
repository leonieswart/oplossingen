<?php

	$frisdranken = array(	'Cola' 	=> 	array( 'Regular', 'Zero', 'Light' ), 
							'Fanta' => 	array( 'Regular', 'Lemon') );

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van multidimensional arrays</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van multidimensional arrays</h1>

		<pre><?php var_dump( $frisdranken ) ?></pre>

	</section>

</body>
</html>