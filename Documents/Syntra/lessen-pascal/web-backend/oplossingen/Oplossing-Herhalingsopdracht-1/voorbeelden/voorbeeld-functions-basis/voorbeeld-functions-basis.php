<?php

	function sayHello() 
	{

		$string1 	=	'Hallo!';
		$string2	=	'vanuit een string in een functie zonder return-waarde';

		echo $string1 . ' ' . $string2;

	}

	function sayGoodbye() 
	{

		$string1 	=	'Tot de volgende!';
		$string2	=	'vanuit een string in een functie met return-waarde';

		return $string1 . ' ' . $string2;
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van functie</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van functie</h1>

		<p><?php sayHello() ?></p>

		<p><?php echo sayGoodbye() ?></p>

	</section>

</body>
</html>