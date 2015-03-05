<?php
		
	$time 		= 	time();
	$microtime 	= 	microtime();
	$mktime 	= 	mktime( 23 , 57 , 23 , 9 , 22 , 2001 );
	
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld time</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld time</h1>
		
		<ul>
			<li><code>time()</code>: <?php echo $time ?></li>
			<li><code>microtime()</code>: <?php echo $microtime ?></li>
			<li><code>mktime( 23 , 57 , 23 , 9 , 22 , 2001 )</code>: <?php echo $mktime ?></li>
		</ul>	

	</section>

</body>
</html>