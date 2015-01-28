<?php

	$getal = "1";

	if ($getal == "1") {

    		$dag = "maandag";}

    if ($getal == "2") {

    		$dag = "dinsdag";}

    if ($getal == "3") {

    		$dag = "woensdag";}

    if ($getal == "4") {

    		$dag = "donderdag";}
    
    if ($getal == "5") {

    		$dag = "vrijdag";}

    if ($getal == "6") {

    		$dag = "zaterdag";}

    if ($getal == "7") {

    		$dag = "zondag";};

//zet variabele DAG in hoofdletters
    $dag = strtoupper($dag);        
/* deze functie zet alle A's om in kleine a's
$dag = str_replace("A", "a", $dag);
  */

   $laatsteA = strrpos($dag, "A");

    $dag = substr_replace($dag, "a", $laatsteA, 1);

echo "$dag"
    											 
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