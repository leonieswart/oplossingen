<?php

	$seconden = "221108521";


	$aantalminuten = $seconden / 60;
	$aantaluren = $aantalminuten / 60;
	$aantaldagen = $aantaluren / 24;
	$aantalweken = $aantaldagen / 7;
	$aantalmaanden = $aantaldagen / 31;
	$aantaljaren = $aantalmaanden / 12;


	
?>


<!doctype html>
	<html>
	    <head>
	        <meta charset="utf-8">
	        <meta name="description" content="">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	        <title>if else deel 2</title>
	    </head>
	    <body>

	    	<h1> if else opdracht deel 2 </h1>	
	    	<p> <?php   echo "seconden: "; 	echo round($seconden); ?> </p>
			<p> <?php   echo "minuten: "; 	echo round($aantalminuten); ?> </p>
			<p> <?php 	echo "uren: "; 		echo round($aantaluren); ?> </p>
			<p> <?php	echo "dagen: "; 	echo round($aantaldagen); ?> </p>
			<p> <?php 	echo "weken: ";		echo round($aantalweken); ?> </p>
			<p> <?php	echo "maanden: ";	echo round($aantalmaanden); ?> </p>
			<p> <?php	echo "jaren: ";		echo round($aantaljaren); ?> </p> 


	        
	    </body>
	</html>	