<?php

	$check = '3c2faecdedd02583c366d2e68870f23f'; //MD5 van het paswoord + salt
	
	$salt = '4ytr454';
	$paswoord = 'azerty';

	$message = ( md5( $paswoord . $salt ) == $check ) ? 'het paswoord is correct' : 'Het paswoord is niet correct';
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van salting</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van salting</h1>

		<p><?php echo $message ?></p>

	</section>	

</body>
</html>