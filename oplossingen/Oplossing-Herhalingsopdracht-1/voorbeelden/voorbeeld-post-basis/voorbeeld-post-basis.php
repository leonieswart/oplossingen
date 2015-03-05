<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van $_POST-variabele</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van $_POST-variabele</h1>
		
		<form action="voorbeeld-post-basis.php" method="post">

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
		<p>Inhoud van $_POST['email']: <?php echo $_POST['email'] ?></p>

	</section>

</body>
</html>