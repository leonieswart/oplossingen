<?php

// deel 2 array afdrukken

   $testArray = array("ABC", "DEF", "GHI", "JKL", "MNO", "PQR", "STU", "VWX", "YZ");
   $superHelden = array("batman", "superman", "spiderman");

   function drukArrayAf($array)

   {
   		//je maakt een lege en nieuwe array aan
   		$oplijstingArray = array();

   		//deze herhaling voert onderstaande actie uit
   		foreach ($array as $key => $value) 

   			{
   				//In deze nieuwe array wordt op een nieuwe key de volgende zin geplaatst, dit gedurende alle values van de testarray overlopen zijn
   				$oplijstingArray[] = "array [" . $key . "] heeft als waarde " . $value . ".";
   			}

   		return $oplijstingArray;

   }

//hier zeg je dat de bovenstaande functie toegepast moet worden op de array $testArray
   $oplossingTest = drukArrayAf($testArray);
   $oplossingSuperHelden = drukArrayAf($superHelden);

//-------------------------------------------------------------
// deel 2 html tag valideren  

   function validateHtmlTag($html)
   
   {

   		$start = "<html>";
  		$einde = "</html>";

   		$startTag = strpos($html, $start);
   		$eindTag = strpos($html, $einde);

   	if ($startTag !== false  && $eindTag !== false )

   	   {	$validatie = "in orde";   }
   	else
   	   {	$validatie = "niet in orde";	};

   		return $validatie;

   };

$code = "<html> </html>";
$tag = validateHtmlTag($code);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

       <h1>deel 2.1</h1>

       <p> testarray </p>
    
	       <?php foreach ($oplossingTest as $value): ?>

	       <p> <?php echo "$value";?></p>

	       <?php endforeach ?>

	    <p> superhelden </p>

	        <?php foreach ($oplossingSuperHelden as $value): ?>

	       <p> <?php echo "$value";?></p>

	       <?php endforeach ?>

	    <h1>deel 2.2</h1>
	    
	    <p> De html-code werd gevalideerd en is: <?php echo "$tag"; ?>. </p>   


    </body>
</html>