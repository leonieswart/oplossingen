<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van $_GET-variabele</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van $_GET-variabele</h1>
		
		<form action="voorbeeld-get-basis.php" method="get">

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
		
		<p>Inhoud van $_GET: <pre><?php print_r( $_GET ) ?></pre></p>
		<p>Inhoud van $_GET['email']: <?php echo $_GET['email'] ?></p>

	</section>

</body>
</html>