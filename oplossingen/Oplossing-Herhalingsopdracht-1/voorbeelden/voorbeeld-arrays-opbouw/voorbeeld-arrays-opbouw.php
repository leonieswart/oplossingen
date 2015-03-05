<?php

		$autosNumeriek 		= 	array( 'Volvo', 'Porche', 'Honda' );

		$autosAssociatief 	= 	array( 'Volvo' 	=> 	'145pk', 
										'Honda' => 	'160pk');
		
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van arrays</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van arrays</h1>

		<p>dump van numerieke array: <pre><?php var_dump( $autosNumeriek ) ?></pre></p>
		<p>dump van associatieve array: <pre><?php var_dump( $autosAssociatief ) ?></pre></p>

		<p>Value uit numerieke array met key 1: <?php echo $autosNumeriek[1] ?></p>
		<p>Value uit associatieve array met key 1: <?php echo $autosAssociatief[1] ?> ("Undefined offset" omdat key niet bestaat)</p>
		<p>Value uit associatieve array met key 'Honda': <?php echo $autosAssociatief['Honda'] ?></p>

	</section>

</body>
</html>