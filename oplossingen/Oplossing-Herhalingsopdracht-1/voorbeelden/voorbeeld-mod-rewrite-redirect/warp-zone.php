<?php

	$baseName = '/' . basename(__FILE__) . '/';

	$root = preg_replace($baseName, '', __FILE__);

	$htaccess = file_get_contents($root .'/.htaccess');
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld mod_rewrite redirect</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld mod_rewrite redirect</h1>
		
		<h2>Inhoud van .htaccess bestand</h2>
					
		<pre><?php echo $htaccess ?></pre>
					
		<h2>Warp zone.</h2>

		<img src="warp-zone.png" alt="Mario Bros 1 - Warp zone" title="Mario Bros 1 - Warp zone">
	
	</section>

</body>
</html>