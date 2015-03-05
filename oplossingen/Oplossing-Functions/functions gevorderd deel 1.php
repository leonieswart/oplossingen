<?php

$md5HashKey = "d1fa402db91a7a93c4f414b8278ce073";
$karakter = 'a';


function functie1($karakter)

{
	GLOBAL $md5HashKey;

	$array = str_split($md5HashKey, 1);
	$KeysGevondenItem = array_keys($array, $karakter);
	$Gevonden = count($KeysGevondenItem);

	$itemsInArray = count($array);
	$procentBerekenen = (($Gevonden / $itemsInArray) * 100);

	$resultaat = round($procentBerekenen, 2);

	return $resultaat;

};

$functie1 = functie1($karakter);


function functie2($karakter)

{

	GLOBAL $md5HashKey;
	//lengte van de string
	$lengteString = strlen($md5HashKey);
	//we vervangen het karakter dat we zoeken in de string door lege plekken
	$vervangInString = str_replace($karakter,'', $md5HashKey);
	//we tellen de lengte van de string waarin de lege plekken zijn toegepast
	$lengteVervanging = strlen($vervangInString);
	//we verminderen de lengte van de originele string met de lengte van de string met leegtes. Het verschil is het aantal keer het karakter voorkwam.
	$Gevonden = $lengteString - $lengteVervanging;

	$procentBerekenen = (($Gevonden / $lengteString) *100);

	$resultaat = round($procentBerekenen, 2);

	return $resultaat;

};

$functie2 = functie2($karakter);




function functie3($karakter)

{

	GLOBAL $md5HashKey;

	$itemsInString = strlen($md5HashKey);

	$Gevonden = substr_count($md5HashKey, $karakter);

	$procentBerekenen = (($Gevonden / $itemsInString) * 100);

	$resultaat = round($procentBerekenen, 2);

	return $resultaat;

};

$functie3 = functie3($karakter);


?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

    <h1>functie 1</h1>
    <p> <?php    echo "Het karakter: $karakter is $functie1 %  van de volledige string $md5HashKey"; ?> </p>

    <h1>functie 2</h1>
    <p> <?php    echo "Het karakter: $karakter is $functie2 % van de volledige string $md5HashKey"; ?> </p>







    </body>


    <h1>functie 3</h1>
    <p> <?php    echo "Het karakter: $karakter is $functie3 % van de volledige string $md5HashKey"; ?> </p>







    </body>



</html>



