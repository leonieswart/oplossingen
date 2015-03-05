<?php

	$baseName = '/' . basename(__FILE__) . '/';

	$root = preg_replace($baseName, '', __FILE__);

	$htaccess = file_get_contents($root .'/.htaccess');

	// Server root url
	$url	=	$_SERVER['HTTP_HOST'] . preg_replace('/artikels.*$/', '', $_SERVER['REQUEST_URI']);

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld mod_rewrite get</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">
			
		<h1>Voorbeeld mod_rewrite get</h1>
		
		<h2>Inhoud van .htaccess bestand</h2>
	
		<pre class="htaccess"><?php echo $htaccess ?></pre>
	
		<h2>Redirect in actie</h2>
		<p>Surf naar <a href="http://<?php echo $url ?>artikels/1985/">http://<?php echo $url ?>artikels/1985/</a></p>
		<?php echo ( isset($_GET['jaar'] ) ? ('<p>Pas het jaartal in de url aan. Wat zie je in de dump van de GET-variabele?</p>' ):'') ?>
		<p>Dump van GET-variabele:</p> 

		<pre><?php print_r($_GET) ?></pre>

	</section>

</body>
</html>