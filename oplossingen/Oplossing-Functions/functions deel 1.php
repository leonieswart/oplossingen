<?php
// deel 1 Som

	function berekenSom($getal1, $getal2)

	{

		$optelling = $getal1 + $getal2;
		return $optelling;

	}; 

	$som = berekenSom(5,5);

// deel 1 Product

	function vermenigvulig($getal1, $getal2)

	{

		$maal = $getal1 * $getal2;
		return $maal;
	};

	$product = vermenigvulig(2,10);

// deel 1 even getal

	function isEven($getal)

	{

		$resultaat = $getal % 2 == false;
		return $resultaat;

	}

	$cijfer = 10;
	$evenGetal = isEven($cijfer);

// deel 1 uitbreiding (lengte en uppercase)

	function PasStringAan ($naam)

	{

		$Array['hoofdletter'] 	= 	strtoupper($naam);
		$Array['lengte']			= 	strlen($naam);
		return $Array;

	};

	$naam = "leonie";
	$aanpassing = PasStringAan($naam);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>deel 1 som</h1>
        <p> De som van 5 en 5 is <?php echo "$som"; ?>. </p>

        <h1>deel 1 product</h1>
        <p> Het product van 2 en 10 is <?php echo "$product"; ?>. </p>

        <h1>deel 1 even getal</h1>
        <p> Het getal <?php echo "$cijfer";?> 
        is even als boolean = true en oneven als boolean = false: <?php var_dump($evenGetal);?> </p>

        <h1>deel 1 uitbreiding: lengte en uppercase weergeven in array</h1>
        <p> <?php 	var_dump($aanpassing); ?></p>



    </body>
</html>