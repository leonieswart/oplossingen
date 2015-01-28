<?php

	$paswoord = 'azerty';

	$md5 = md5($paswoord);

	$crypt = crypt($paswoord, '$2a$10$salt');

	$hash = hash('sha512', $paswoord);

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van hashing algoritmen</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van hashing algoritmen</h1>

		<p>MD5 van de string <?php echo $paswoord ?>: <?php echo $md5 ?></p>
		<p>crypt() van de string <?php echo $paswoord ?>: <?php echo $crypt ?></p>
		<p>hash() van de string <?php echo $paswoord ?>: <?php echo $hash ?></p>

	</section>

</body>
</html>