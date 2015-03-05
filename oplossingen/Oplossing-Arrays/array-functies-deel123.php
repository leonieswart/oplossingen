<?php
//deel 1
	$dieren = array("paard", "koe", "eekhoorn", "kikker", "mus");

	$aantalDieren = count($dieren);

	$needle = "baby";

	$gevondenDier = array_search($needle, $dieren);
	// OF $gevondenDier = in_array($needle, $dieren);

	if ($gevondenDier == true) 

		{ $gevondenDier = " " ;} 
	
	else 
	
		{ $gevondenDier = "niet " ;};

//---------------------------------------------	

//deel 2
	$zoogdieren = array("dolfijn", "beer", "koala");
	$ABCzoogdieren = array("dolfijn", "beer", "koala");
	natcasesort($ABCzoogdieren);
	$Samengevoegd = array_merge($dieren, $zoogdieren);


//---------------------------------------------	

//deel 3
	$getallen = array("8", "7", "8", "7", "3", "2", "1", "2", "4");
	$UniekeGetallen = array_unique($getallen);
	$GrootNaarKlein = array("8", "7", "8", "7", "3", "2", "1", "2", "4");
	arsort($GrootNaarKlein);

	$UniekGrootKlein = array_unique($GrootNaarKlein);


?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>

		<h1>deel 1</h1>
		<p> In de array Dieren zitten er <?php echo "$aantalDieren" ?> dieren. </p>       
		<p> In de array Dieren hebben we een <?php echo "$needle "; echo "$gevondenDier";?> gevonden. </p> 

		<h1>deel 2</h1>
		<p> <?php var_dump($zoogdieren) ?> </p>
		<p> Dit zijn de zoogdieren in alfabetische volgorde: <?php var_dump($ABCzoogdieren) ?> </p>
		<p> De arrays zoogdieren en dieren samengevoegd: <?php var_dump($Samengevoegd) ?> </p>

		<h1>deel 3</h1>
		<p> Alle getallen in een array: <?php var_dump($getallen) ?> </p>
		<p> Alle unieke getallen in de array: <?php var_dump($UniekeGetallen) ?> </p>
		<p> Alle getallen van groot naar klein: <?php var_dump($GrootNaarKlein) ?> </p>
		<p> Alle unieke getallen van groot naar klein: <?php var_dump($UniekGrootKlein) ?> </p>


    </body>
</html>
