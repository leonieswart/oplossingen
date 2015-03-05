<?php

//variabelen configureren
$voorbeelden = "/Users/leonieswart/Documents/Syntra/lessen-pascal/web-backend/cursus/public/cursus/voorbeelden";
$opdrachten = "/Users/leonieswart/Documents/Syntra/lessen-pascal/web-backend/cursus/public/cursus/opdrachten";
$map = "";
$arrayVoorbeelden = showList($voorbeelden);
$arrayOpdrachten = showList($opdrachten);






//functie om mappen in array te zetten
	function showList($directory)

	{
		$lijst = scandir($directory);
		return $lijst;
	};


?>



<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Herhalingsopdracht 1</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>



<body>

<h1>Indexpagina</h1>

<!-- navigatie menu -->
    <ul>

           <li> 	<a href="index.php?link=cursus">			cursus 			</a>      </li>
           <li>		<a href="index.php?link=voorbeelden">		voorbeelden		</a>	  </li>
           <li>		<a href="index.php?link=opdrachten">		opdrachten		</a>	  </li>
           
	</ul>

<!-- zoekformulier -->
	<form action="index.php" method="POST">

	       <label>Zoek naar: </label>
	       <input type="text" placeholder="geef een zoekterm in" name="zoekterm">
	       <input type="submit" name="submit" value="Zoek">

	</form>



		<!-- titel: zegt inhoud OF de zoekterm -->
<h1>
		<?php
				if (isset( $_POST[ "submit" ] ) ) 

					{ echo "Zoekresultaat voor: ";  echo $_POST["zoekterm"]; }

				else

					{ echo "Inhoud"; };

		?>
</h1>
	
<?php	
 	switch ($_GET["link"]) 

		 //case 1

			{	case 'cursus': ?>

		 		<iframe src="web-backend-cursus.pdf" height="750px" width="1000px"> </iframe>
				
<?php				
				break;

		 //case 2		
				case 'voorbeelden':
				
				$map = "voorbeelden"; ?>

					<ul>	

<?php
						foreach ($arrayVoorbeelden as $key) 

								{
									 
									$pad = "$map" . "/" . "$key" . "/" . "$key" . ".php"; ?>
								 		
								<li>

									<a href=" <?php echo "$pad" ?> " > 

											  <?php echo $key ?>
									</a>

								</li> 		
									
<?php 
								}; ?>


					</ul>

<?php

				break;





		//case 3
				case 'opdrachten':

				$map = "opdrachten"; ?>

				<ul>

<?php
						foreach ($arrayOpdrachten as $key) 

								{
					
									
									$pad = "$map" . "/" . "$key" . "/" . "$key" . ".html"; ?>
								 		
								<li>

									<a href=" <?php echo "$pad" ?> " > 

											  <?php echo $key ?>
									</a>

								</li> 		
									
<?php 

								}; ?>


				</ul>

<?php
				break;

			//case Default
			
				default:
		
				break;
		};








	//ZOEKOPTIE

		//als er op de knop SUBMIT gedrukt wordt dan...
		if ( isset( $_POST[ "submit" ] ) ) 

		{

			//lege array aanmaken om zoekresultaten in op te vangen.
			$resultaten = array();

			//zoekterm linken aan ingegeven zoekwoord in tekstvak
			$zoekterm = $_POST[ "zoekterm" ];


		//VOORBEELDEN

			//de volledige lijst van voorbeelden
			foreach ( $arrayVoorbeelden as $bestand )
				{
					//een variabele die true/false is naargelang de zoekterm is gevonden in de array
					$zoekStringGevonden = strpos( $bestand , $zoekterm );

					//als de zoekstringgevonden TRUE is dan....
					if ($zoekStringGevonden !== false) 

						{
							
							//wordt op de eerst volgende key van de array resultaten die bepaalde string geplaatst
							$resultatenVoorbeelden[]	=	$bestand;
							$pad = "voorbeelden" . "/" . "$bestand" . "/" . "$bestand" . ".php"; ?>
								 		
								<li>

									<a href=" <?php echo "$pad" ?> " > 

											  <?php echo $bestand ?>
									</a>

								</li> 



					<?php	};


				};

			//checken of de arrayVoorbeelden geset is
			$issetVoorbeeld = isset($resultatenVoorbeelden);

			// als de array unset of null is dan zeggen we dat het een lege array is
			if ($issetVoorbeeld !== true) 

				{
				
				$resultatenVoorbeelden = array(); 

				};				




		//OPDRACHTEN		

			//de volledige lijst van opdrachten
			foreach ( $arrayOpdrachten as $bestand )
				{
					//een variabele die true/false is naargelang de zoekterm is gevonden in de array
					$zoekStringGevonden = strpos( $bestand , $zoekterm );

					//als de zoekstringgevonden TRUE is dan....
					if ($zoekStringGevonden !== false) 

						{
							
							//wordt op de eerst volgende key van de array resultaten die bepaalde string geplaatst
							$resultatenOpdrachten[]	=	$bestand;
							$pad = "opdrachten" . "/" . "$bestand" . "/" . "$bestand" . ".html"; ?>
								 		
								<li>

									<a href=" <?php echo "$pad" ?> " > 

											  <?php echo $bestand ?>
									</a>

								</li> 


					<?php	};


				};


			//checken of de arrayVoorbeelden geset is
			$issetOpdracht = isset($resultatenOpdrachten);

			// als de array unset of null is dan zeggen we dat het een lege array is
			if ($issetOpdracht !== true) 

				{
				
				$resultatenOpdrachten = array(); 

				};				




		//SAMENVOEGEN

			//de twee arrays met resultaten samenvoegen	
			$resultaten = array_merge($resultatenVoorbeelden, $resultatenOpdrachten);
			

			//resultaten uitlezen of een error boodschap weergeven		
			$search = empty($resultaten);
			
			if ($search == true)

			   { 

			   	echo "Er werden geen zoekresultaten gevonden. Probeer opnieuw."; 

			   };	 
		};

	//einde zoekoptie

?>





    </body>
</html>