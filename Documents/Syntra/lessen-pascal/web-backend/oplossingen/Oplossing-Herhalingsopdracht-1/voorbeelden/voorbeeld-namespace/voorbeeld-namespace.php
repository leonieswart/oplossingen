<?php

	include_once ( 'classes/Browser.php' );
	include_once ( 'classes/bing/Engine.php' );
	include_once ( 'classes/google/Engine.php' );

	browser\about();

	$bing	=	new bing\Engine();
	$google	=	new google\Engine();
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld namespace</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld namespace</h1>

		<h2>Constant uit een andere namespace (browser\)</h2>

		<p><?= Browser\NAME ?></p>

		<p>Even controleren of de constant <code>NAME</code> in de globale namespace zit: "<?= ( defined( "NAME" ) ) ? "Jep, nu wel" : "Nope, zit niet in de globale namespace" ?>"</p>

		<h2>Functie uit een andere namespace (browser\)</h2>

		<p><?= Browser\about() ?></p>

		<p>Even controleren of de functie <code>about()</code> in de globale namespace zit: "<?= ( function_exists( "about" ) ) ? "Jep, nu wel" : "Nope, zit niet in de globale namespace" ?>"</p>

		<h2>Class uit een andere namespace (bing\ en google\)</h2>

		<p>Uitvoeren methode uit de Engine class van Bing: "<?= $bing->startEngine(); ?>"</p>

		<p>Uitvoeren methode uit de Engine class van Google: "<?= $google->startEngine(); ?>"</p>


	</section>

</body>
</html>