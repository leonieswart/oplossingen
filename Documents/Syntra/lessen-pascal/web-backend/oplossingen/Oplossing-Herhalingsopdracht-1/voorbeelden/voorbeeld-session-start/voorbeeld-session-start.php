<?php
	
	session_start();

	$hasVisited	=	isset( $_SESSION[ 'hasVisited' ] );

	if ( !isset( $_SESSION[ 'hasVisited' ] ) )
	{
		$_SESSION[ 'hasVisited' ]	=	true;
	}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld session (session_start())</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld session (session_start())</h1>

		<?php if ( $hasVisited == false ): ?>
			<h2>Welkom op uw eerste bezoek aan deze fantastische website met sessies!</h2>
		<?php else: ?>
			<h2>U bent hier al geweest</h2>
		<?php endif ?>

		<h1>var_dump() van $GLOBALS</h1>

		<?php var_dump( $GLOBALS ); ?>

	</section>

</body>
</html>