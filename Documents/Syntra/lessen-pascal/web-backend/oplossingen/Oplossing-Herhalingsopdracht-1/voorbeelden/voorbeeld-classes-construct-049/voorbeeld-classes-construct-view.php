<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van classes: __construct()</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van classes: __construct()</h1>

		<img src="http://web-backend.local/img/adventure-time-logo.jpg" class="max-width-200">

		<h2>Personage: <?= $name ?></h2>

		<p>Instantie aangemaakt van Finn, deze instantie is van het type "<?= $finnType ?>"</p>
		
		<img src="http://web-backend.local/img/<?php echo $profilePicture ?>" class="max-width-200">
		
		<p>[<?= $timestamp ?>] <?= $name ?>: "<?= $catchPhrase ?>"</p>

		<script>console.log( "<?= $secretMessage ?>" )</script>

	</section>

</body>
</html>