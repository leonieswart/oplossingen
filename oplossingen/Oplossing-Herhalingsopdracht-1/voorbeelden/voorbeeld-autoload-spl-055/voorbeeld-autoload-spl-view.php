<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van classes: autoload (spl_autoload_register())</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van classes: autoload (spl_autoload_register())</h1>

		<ul>
			<?php foreach ($messages as $message): ?>
				<li><?php echo $message ?></li>
			<?php endforeach ?>
		</ul>

	</section>

</body>
</html>