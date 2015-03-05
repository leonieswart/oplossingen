<?php
	function say( $type, $name, $custom ) 
	{
		switch ($type) 
		{
			case 'hello':
				return 'Hello ' . $name;
				break;
			case 'goodbye':
				return 'Goodbye ' . $name;
				break;
			case 'warning':
				return 'LOOK OUT ' . strtoupper($name) . '!!!';
				break;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van functie met meerdere parameters</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van functie met meerdere parameters</h1>

		<p><?php echo say('hello', 'Tim') ?></p>
		<p><?php echo say('goodbye', 'Hans') ?></p>
		<p><?php echo say('warning', 'Sam') ?></p>

	</section>

</body>
</html>