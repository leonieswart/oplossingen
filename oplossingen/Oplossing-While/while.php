<?php
//deel 1.1
	$getal1 = 0;
	$maxGetal = 100;

	while ($getal1 <=$maxGetal) 

		  { 
			$getallenArray1 [] = $getal1;

			++$getal1;
		  };

		  $Reeks100 = implode(", ", $getallenArray1);

//deel 1.2
	$getal2 = 0;

	while ($getal2 <= 100) 

		  {  ++$getal2;

			if 
				( $getal2 % 3 == 0     &&      $getal2 > 40      &&     $getal2 < 80 ) 

				{ $getallenArray2 [] = $getal2; };			
		  };

		  $ReeksVoorwaarden = implode(", ", $getallenArray2);


//deel 2

	//Je wilt de tafel van 10
	$tafelMax = 10;
	//Je maakt een lege array
	$ArrayTafels = array();
	//Je zet de teller op 0
	$tafelTeller = 0;


	//Je zegt: terwijl de teller kleiner is dan in dit geval 10 mag je alles uitvoeren
	while ($tafelTeller < $tafelMax)

		  { 
		  	//Je maakt een nieuwe array aan en deze maak je leeg
		  	$tafelContainer = array();

		  	//Zet het product hier terug op 0 zodat de komende while nog eens kan doorlopen worden, anders doet de while het maar 1 keer omdat het product al 10 is
			$product = 0;

			//Je zegt: terwijl het product kleiner is dan 10 mag je dit uitvoeren
		  	while ($product < 10) 

		  		  {

		  		  	//De lege array container vul je met de resultaten van vb 0 * 0, 0 * 1, ... Dit blijft wordt herhaald tot product 10 heeft behaald	
		  		  	$tafelContainer [] = $tafelTeller * $product;

		  		  	//Het product wordt vermeerd met 1, dit blijft doorgaan tot het product 10 heeft behaald
		  		  	++$product;

		  		  }

		  //Nadat de tafel van 0 afgerond is omdat het product 10 heeft behaald, zeg je dat de container met de resultaten ingeladen moeten worden in de array $ArrayTafels
		  // Dit moet gebeuren op de keyvalue van $tafelteller. Dus als $tafelteller = 3, dan worden de resultaten op die key opgeslagen in de array $ArrayTafels		  
		  $ArrayTafels [$tafelTeller] = $tafelContainer;

		  	// Je vermeerd de tafelTeller met 1 zodat heel de while opnieuw kan beginnen, dit gaat door tot de teller 10 heeft behaald.
			++$tafelTeller;

		  };

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <style> 

        #groen{
        	background-color: green;
        	  } 

        #rood{
        	background-color: red;
        	 }	

        </style>
    </head>

    <body>

	<h1> deel 1.1 </h1>

		<p> Reeks 0 tot 100: <?php echo "$Reeks100"; ?> </p>

	<h1> deel 1.2 </h1>

		<p> Reeks getallen deelbaar door 3, groter dan 40 en kleiner dan 80: <?php echo "$ReeksVoorwaarden" ?> </p>

	<h1> deel 2 </h1>

		<table> 

		<?php foreach ($ArrayTafels as $tafel): ?>

		 <tr> 

		 	<?php foreach ($tafel as $tafelproduct): ?>

		 		<td class = " <?php echo ( ( $tafelproduct % 2 == 0 ) ? 'groen' : 'rood' ); ?> " > 

		 			<?php echo "$tafelproduct"?> 

		 		</td>

		 	<?php endforeach ?>	

		 </tr>

		<?php endforeach ?>
		

		</table>
	






    </body>
</html>