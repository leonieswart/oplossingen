<?php
		
	$date01		=	date( 'H-i-s-m-d-Y' , 1001195843 );
	$date02		= 	date( 'H:i:s m/d/Y' , 1001195843 );
	$date03 	=	date( 'H:i:s m/d/Y' );
	$date04		=	date( 'l jS \of F Y h:i:s A' );
	
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld date-functies</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld date-functies</h1>
		
		<ul>
		    <li><code>date( 'H-i-s-m-d-Y' , 1001195843 )</code>: <?php echo $date01 ?></li>
		    <li><code>date( 'H:i:s m/d/Y' , 1001195843 )</code>: <?php echo $date02 ?></li>
		    <li><code>date( 'H:i:s m/d/Y' )</code>: <?php echo $date03 ?></li>
		    <li><code>date( 'l jS \of F Y h:i:s A' )</code>: <?php echo $date04 ?></li>
		</ul>
		
	</section>

</body>
</html>