<?php

	include_once ( 'classes/Google/Engine.php' );
	include_once ( 'classes/Google/User/User.php' );
	include_once ( 'classes/Google/User/UserValidator.php' );

	/*function __autoload( $class )
	{
		var_dump( $class );
	}*/

	$google	=	new Google\Engine();
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

		<h1>Voorbeeld namespace nesting met alias</h1>

		<p>Is de nieuwe gebruiker valid? <?= ( $google->getUser() ) ? "Jup" : "Nope" ?></p>

	</section>

</body>
</html>