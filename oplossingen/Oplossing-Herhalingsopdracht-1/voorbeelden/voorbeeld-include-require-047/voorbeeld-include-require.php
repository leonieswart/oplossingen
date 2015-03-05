<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van include/require</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van include/require</h1>

		<h2>Voorbeeld van include</h2>

		<p><?php include 'include.txt' ?></p>

		<h2>Voorbeeld van require</h2>

		<p><?php require 'require.txt' ?></p>

		<h2>Voorbeeld van include/require php-code</h2>

		<p><?php include 'php-code.php' ?></p>

		<h2>Voorbeeld van foutieve include</h2>

		<p><?php include 'bestaat-niet.txt' ?></p>
		<p><?= 'Dit wordt nog uitgevoerd' ?></p>

		<h2>Voorbeeld van foutieve require</h2>

		<p><?php require 'bestaat-niet.php' ?></p>
		<p><?= 'Dit niet meer' ?></p>

	</section>

</body>
</html>
