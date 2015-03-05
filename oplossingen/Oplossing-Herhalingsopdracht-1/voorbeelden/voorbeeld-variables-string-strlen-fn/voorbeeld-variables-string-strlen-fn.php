<?php
	
	$tekst 			= 	'Computer, hoeveel karakters bevat ik?';
	$tekstLengte	=	strlen( $tekst );

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van PHP string-functies: strlen()</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body  class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van PHP string-functies: strlen()</h1>
		
		<style>
			.computer
			{
				font-style:italic;
				font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
			}
		
		</style>

		<p><?= $tekst ?></p> 
		<p class="computer">-Bzz, bzz, aantal karakters, bzz: <?= $tekstLengte ?>!</p>

	</section>

</body>
</html>