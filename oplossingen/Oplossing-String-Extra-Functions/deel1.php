<?php

	$fruit	=	"kokosnoot";
    $needle =   "o";

	$tekstLengte	=	strlen($fruit);

	$positie	=	strpos($fruit, $needle);

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
        

       <p> tekstlengte: <?php echo "$tekstLengte" ?> </p>
		
		<p> positie eerste <?= $needle ?>: <?php echo "$positie" ?> </p>      




    </body>
</html>
