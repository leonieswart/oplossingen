<?php

	$email = ( isset( $_POST['email'] ) ? strtoupper( $_POST['email'] ) : "nog niet geset" );

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van controle op $_GET of $_POST</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van controle op $_GET of $_POST</h1>
		
		<form action="voorbeeld-get-post-key-controle.php" method="post">

			<ul>
				<li>
					<label for="email">Email:</label>
					<input type="text" name="email" id="email">
				</li>
				<li>
					<label for="password">Paswoord:</label>
					<input type="password" name="password" id="password">
				</li>
			</ul>

			<input type="submit" value="Verzend">
		</form>
		
		<p>Inhoud van $_POST: <pre><?php print_r( $_POST ) ?></pre></p>
		<p>Het e-mailadres in hoofdletters: <?php echo $email ?></p>

	</section>

</body>
</html>