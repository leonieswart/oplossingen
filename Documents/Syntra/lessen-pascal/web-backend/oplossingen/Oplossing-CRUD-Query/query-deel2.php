<?php

$message	=	"";

	try {
		//connectie maken met DB bieren
		$connectieDB = new PDO("mysql:host=localhost;dbname=bieren", "root", "");

		//bericht wordt getoond indien connectie gelukt is
		$message	=	"Connectie gelukt";

		//de MySQL code die de correcte gegevens uit de DB selecteert
		$queryString = "SELECT brouwers.brouwernr, brouwers.brnaam

						FROM brouwers";

		//de string wordt voorgeladen om te gebruiken				    
		$statement = $connectieDB->prepare($queryString);

		//de query wordt uitgevoerd
		$statement->execute();

		//er wordt een nieuwe array aangemaakt
		$brouwersArray = array();

		//statement->fetch() leest 1 record uit de gegevens uit
		//FETCH_ASSOC geeft enkel de namen weer van de gegevens, FETCH_BOTH geeft de namen weer en de key (dit wordt gereturnt als array)

		//Betekenis hieronder: we lezen associatief de records 1 voor 1 uit, deze worden telkens op een andere key in onze array gezet
		while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
			{
				$brouwersArray[]	=	$row;
			};

		//check of de gegevens in array zijn geplaatst
		//var_dump($brouwersArray);

		//opmaak voor connectie
		$connectie = "";

		if ($message == "Connectie gelukt") 

			{
				$connectie = "gelukt";
			}

		else
			
			{
				$connectie = "mislukt";
			};
	}

	catch ( PDOException $e )
	{
		//bericht als de connectie mislukt is + $e->getMessage() geeft de specifieke fout weer die zich heeft voorgedaan
		$message	=	'Er ging iets mis: ' . $e->getMessage();
	};



if ( isset( $_GET['submit'] ) ) 

	{
		//var_dump($_GET);

	 	try {
			//connectie maken met DB bieren
			$connectieDB = new PDO("mysql:host=localhost;dbname=bieren", "root", "");

			//bericht wordt getoond indien connectie gelukt is
			$message	=	"Connectie gelukt";

			//de MySQL code die de correcte gegevens uit de DB selecteert
			$queryString = "SELECT bieren.naam, bieren.brouwernr

								FROM bieren
	    
							    	INNER JOIN brouwers
							        ON bieren.brouwernr = brouwers.brouwernr

							    WHERE bieren.brouwernr = :brouwerNummer ";

			//de string wordt voorgeladen om te gebruiken				    
			$statement = $connectieDB->prepare($queryString);

			$brouwerNummer = $_GET['brouwer'];

			//var_dump($_GET['brouwer']);	

			//prepared statement
			$statement->bindValue(':brouwerNummer', $brouwerNummer);

			//de query wordt uitgevoerd
			$statement->execute();

			//er wordt een nieuwe array aangemaakt
			$bierenArray = array();

			while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
			{
				$bierenArray[]	=	$row;
			};

		}

		catch ( PDOException $e ){
		
			//bericht als de connectie mislukt is + $e->getMessage() geeft de specifieke fout weer die zich heeft voorgedaan
			$message	=	'Er ging iets mis: ' . $e->getMessage();

		};

	} 




	

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=stylesheet href="css/query.css">
    <title>CRUD-Query</title>
    
</head>

<body>

<p class="<?php echo $connectie ?>"> Database connectie : <?php echo $message ?> </p>

<h1>Overzicht: brouwers en bieren</h1>


<form method="GET" action="query-deel2.php">

	<label>Selecteer een brouwerij: </label> 

	<select name="brouwer">

		<?php foreach ($brouwersArray as $brouwer => $brouwerij): ?>

			<option <? if ($brouwerij['brouwernr'] === $brouwerNummer) {echo "selected"; } else echo ''; ?> name="brouwerij" value="<?php echo $brouwerij['brouwernr']?>"> <?php echo $brouwerij['brnaam']; ?> </option>

		<?php endforeach ?>

	</select>

	<input type="submit" value="Toon de bieren van deze brouwerij." name="submit">

</form>

<table>
	<thead>
		
		<tr>

			<th class="nummer"> # </th>

			<th class="naam"> Naam</th>

		</tr>
	
	</thead>

	<tbody>

		<?php foreach ($bierenArray as $key => $value): ?>

			<?php 
			//even en oneven rijen een klasse meegeven
					if ( ( $key % 2 ) === 0 ) 

						{
							$klasseNaam = "even";
							//var_dump($klasseNaam);
						}

					else
						{

						$klasseNaam = "oneven";
						//var_dump($klasseNaam);
						
						} 
			?>

			<tr>
				<td class="<?php echo $klasseNaam?> nummer"> <?php echo $key ?> </td>
				
				<td class="<?php echo $klasseNaam?> naam"> <?php echo $value['naam'] ?> </td>
			</tr>

		<?php endforeach ?>

	</tbody>
	



</table>



	

			
</body>
</html>