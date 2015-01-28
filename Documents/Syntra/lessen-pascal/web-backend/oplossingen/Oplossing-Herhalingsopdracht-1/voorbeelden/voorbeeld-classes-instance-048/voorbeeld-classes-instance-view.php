<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van classes: instance</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van classes: instance</h1>

		<img src="http://web-backend.local/img/adventure-time-logo.jpg" class="max-width">

		<h2>Personage: <?php echo $name ?></h2>

		<p>Instantie aangemaakt van Finn, deze instantie is van het type "<?php echo $finnType ?>"</p>
		
		<img src="http://web-backend.local/img/<?php echo $profilePicture ?>" class="max-width">
		
		<p>[<?php echo $timestamp ?>] <?php echo $name ?>: "<?php echo $catchPhrase ?>"</p>

	</section>

</body>
</html>