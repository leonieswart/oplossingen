<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van classes: inheritance: extends</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van classes: inheritance: extends</h1>

		<img src="http://web-backend.local/img/adventure-time-logo.jpg" class="max-width-200">

		<h2>Personage: <?php echo $finn->name ?></h2>
		
		<img src="http://web-backend.local/img/<?php echo $finn->profilePicture ?>" class="max-width-200">
		
		<p><?php echo $finn->getFormattedChatchPhrase() ?></p>
		

		<h2>Personage: <?php echo $jake->name ?></h2>
		
		<img src="http://web-backend.local/img/<?php echo $jake->profilePicture ?>" class="max-width-200">
		
		<p><?php echo $jake->getFormattedChatchPhrase() ?></p>
		

		<h2>Personage: <?php echo $princessBubblegum->name ?></h2>
		
		<img src="http://web-backend.local/img/<?php echo $princessBubblegum->profilePicture ?>" class="max-width-200">
		
		<p><?php echo $princessBubblegum->getFormattedChatchPhrase() ?></p>


		<h2>Personage: <?php echo $iceKing->name ?></h2>
		
		<img src="http://web-backend.local/img/<?php echo $iceKing->profilePicture ?>" class="max-width-200">
		
		<p><?php echo $iceKing->getFormattedChatchPhrase() ?></p>

	</section>

</body>
</html>