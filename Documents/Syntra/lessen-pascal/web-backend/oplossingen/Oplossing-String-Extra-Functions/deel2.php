<?php

	$fruit	=	"ananas";

	$laatsteA	=	strrpos($fruit, "a");

	$hoofdletter	=	strtoupper($fruit)
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

    	<h1>Deel 2</h1>
        
        <p> positie laatste a: <?php echo "$laatsteA" ?> </p>


        <p> hoofdletters: <?php echo "$hoofdletter" ?> </p>





    </body>
</html>