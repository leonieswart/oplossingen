<?php

	$jaartal = "2012";
	$schrikkeljaar ="nee";




	if ( 	( ( $jaartal%4 ) == 0 ) ||
			( ( $jaartal%400 ) == 0 ) &&
			( ( $jaartal%100 ) != 0 ) )

		{ 
			$schrikkeljaar="ja";
		}

		else 

		{
			$schrikkeljaar="nee";
		}
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>if else deel 1</title>
    </head>
    <body>
       

    <h1> if else deel 1 </h1>

    <p> <?php echo "Is $jaartal een schrikkeljaar? "; echo "$schrikkeljaar"; ?>


    </body>
</html>