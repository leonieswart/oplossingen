<?php


	$lettertje	=	"e";
	$cijfertje	=	"3";
	$langsteWoord	=	"zandzeepsodemineralenwatersteenstralen";


	$omzetten	=	str_replace($lettertje, $cijfertje, $langsteWoord)


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
        
       <p> <?php echo "$langsteWoord"; ?> </p>

       <p> <?php echo "$omzetten";?> </p>



    </body>
</html>