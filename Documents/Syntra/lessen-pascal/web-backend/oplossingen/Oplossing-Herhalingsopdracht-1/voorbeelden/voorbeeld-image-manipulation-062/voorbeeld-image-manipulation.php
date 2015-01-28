<?php

	$imageFile	=	'schattig-katje.jpg';

	// Haal de bestandsnaam en de extensie uit het bestand
	$fileParts	=	pathinfo($imageFile);
	$fileName	=	$fileParts['filename'];
	$ext		=	$fileParts['extension'];

	// Bepaal de dimensies van de verkleining
	$thumbDimensions['w']	=	100;
	$thumbDimensions['h']	=	100;

	// Haal de breedte en de hoogte op uit het originele bestand
	list($width, $height)	=	getimagesize($imageFile); // kent automatisch de value uit getimagesize (retunt array(width, height)) toe aan de variabele in de list in de overeenstemmende volgorde

	// Controleer om welke extensie het gaat en voer de overeenstemmende methode uit
	switch ($ext)
	{
		case ('jpg'):
		case ('jpeg'):
			$source 	= 	imagecreatefromjpeg($imageFile);
			break;
			
		case ('png'):
			$source 	=	imagecreatefrompng($imageFile);
			break;

		case ('gif'):
			$source 	=	imagecreatefromgif($imageFile);
			break;
	}

	// Creëer een leeg canvas met de dimensies van de nieuwe afbeelding
	$thumb 	=	imagecreatetruecolor($thumbDimensions['w'], $thumbDimensions['h']);

	// Resize het origineel naar de gewenste dimensies en plaats het de verkleinde versie in het nieuwe canvas.
	// nieuwe canvas = destination, oude canvas = source, destination x, destination y, source x, source y, destination width, destination height, source width, source height
	imagecopyresized($thumb, $source, 0,0,0,0, $thumbDimensions['w'],$thumbDimensions['h'], $width, $height);

	// Slaag het nieuwe canvas op (canvas, (folder).fileName, kwaliteit)
	switch ($ext)
	{
		case ('jpg'):
		case ('jpeg'):
			$resized 	= 	imagejpeg($thumb, ($fileName. '_thumb.' . $ext), 100);
			break;
			
		case ('png'):
			$resized 	=	imagepng($thumb, ($fileName. '_thumb.' . $ext), 100);
			break;

		case ('gif'):
			$resized 	=	imagegif($thumb, ($fileName. '_thumb.' . $ext));
			break;
	}
	

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van image manipulation: resizing</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van image manipulation: resizing</h1>

		<h2>Een fantastisch verkleind katje</h2>

		<img src="<?php echo $fileName ?>_thumb.jpg" alt="klein klein katje">

	</section>

</body>
</html>