<?php

	$voornaam	= "leonie";
	$achternaam	=	"swart";

	$volledigeNaam = $voornaam . " " . $achternaam;

	$tekstLengte	=	strlen($volledigeNaam);

?> 



<!doctype html>

<html>

    <head>

        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">

    </head>


    <body>
        
       <p> aparte strings: <?php echo $voornaam ?> <?php echo $achternaam ?> </p>

       <p> volledige naam: <?php echo $volledigeNaam ?> </p>

       <?php

       		echo ($tekstLengte)

       	?>

    </body>

</html>