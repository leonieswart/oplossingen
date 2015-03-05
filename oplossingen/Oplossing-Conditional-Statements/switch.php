<?php
	
	$getal = "5";

	switch ($getal) {

		case '1':
			$antwoord = "maandag";
			break;

		case '2':
			$antwoord = "dinsdag";
			break;

		case '3':
			$antwoord = "woensdag";
			break;

		case '4':
			$antwoord = "donderdag";
			break;

		case '5':
			$antwoord = "vrijdag";
			break;

		case '6':
			$antwoord = "zaterdag";
			break;		

			case '7':
			$antwoord = "zondag";
			break;
		
		default:
			$antwoord = "Dit getal is kleiner dan 1 of groter dan 7.";
			break;
	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
    </head>
    <body>
        <h1>switch</h1>
        <p>Het is vandaag <?php echo "$antwoord"; ?>.</p>
    </body>
</html>