<?php

	$getal = "5";
	$boodschap = "Geen getal";


	if ($getal >= 1 && $getal <= 10) 
	{
		$boodschap = "Het getal $getal ligt tussen 1 en 10";
	}

	elseif ($getal >= 11 && $getal <= 20)  
	{
		$boodschap = "Het getal $getal ligt tussen 10 en 20";
	}

	elseif ($getal >= 21 && $getal <= 30)  
	{
		$boodschap = "Het getal $getal ligt tussen 20 en 30";
	}

	elseif ($getal >= 31 && $getal <= 40)  
	{
		$boodschap = "Het getal $getal ligt tussen 30 en 40";
	}
	
	elseif ($getal >= 41 && $getal <= 50)  
	{
		$boodschap = "Het getal $getal ligt tussen 41 en 50";
	}

?>




<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>if else if</title>
    </head>
    <body>
        

        <h1>opdracht if else if</h1>
        <p> <?php echo ($boodschap) ?> </p>
        <p> <?php echo strrev($boodschap) ?> </p>



    </body>
</html>