<?php

//1)
	$getallen = ["1", "2", "3", "4", "5"];

	var_dump($getallen);

//2)
//maakt het product van alle getallen in de array
	$productGetallen = array_product($getallen);

	echo "HET PRODUCT IS: $productGetallen ";

//3)
//drukt de oneven getallen af
    for ( $counter = 0 ; $counter < count( $getallen ); ++$counter)
    {

        $getal = $getallen [$counter];

        if ($getal % 2 != 0) 
           { $onevenGetallen []  = $getal ; } 

    };

    var_dump($onevenGetallen);






//4)
// geeft de array achterstevoren weer
	$reverseArray = array_reverse($getallen);

	var_dump($reverseArray);

//5)
//telt de cijfers van zelfde index met elkaar op

    $somArray = array();

    foreach ($getallen as $key => $getal) 

        {
        
            $getal1 =   $getal;
            $getal2 =   $reverseArray [$key];

            $somArray[] = $getal1 + $getal2;

        }

var_dump($somArray);














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
        
        <script src="js/main.js"></script>
    </body>
</html>