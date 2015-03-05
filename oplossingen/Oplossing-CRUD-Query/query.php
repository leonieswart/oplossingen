<?php

$message	=	"";

	try {
		//connectie maken met DB bieren
		$connectieDB = new PDO("mysql:host=localhost;dbname=bieren", "root", "");

		//bericht wordt getoond indien connectie gelukt is
		$message	=	"Connectie gelukt";
	}

	catch ( PDOException $e )
	{
		//bericht als de connectie mislukt is + $e->getMessage() geeft de specifieke fout weer die zich heeft voorgedaan
		$message	=	'Er ging iets mis: ' . $e->getMessage();
	};

	//de MySQL code die de correcte gegevens uit de DB selecteert
	$queryString = "SELECT *

						FROM bieren
    
    						INNER JOIN brouwers
    
	  						ON bieren.brouwernr = brouwers.brouwernr
        
					    WHERE bieren.naam LIKE 'du%'
					    
					    AND brouwers.brnaam LIKE '%a%'";

	//de string wordt voorgeladen om te gebruiken				    
	$statement = $connectieDB->prepare($queryString);

	//de query wordt uitgevoerd
	$statement->execute();

	//er wordt een nieuwe array aangemaakt
	$recordsArray = array();

	//statement->fetch() leest 1 record uit de gegevens uit
	//FETCH_ASSOC geeft enkel de namen weer van de gegevens, FETCH_BOTH geeft de namen weer en de key (dit wordt gereturnt als array)

	//Betekenis hieronder: we lezen associatief de records 1 voor 1 uit, deze worden telkens op een andere key in onze array gezet
	while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
		{
			$recordsArray[]	=	$row;
		};

	//check of de gegevens in array zijn geplaatst
	//var_dump($recordsArray);

			$klasseNaam = "";
			$connectie = "";

			if ($message == "Connectie gelukt") 

				{
					$connectie = "gelukt";
				}
			else
				{
					$connectie = "mislukt";
				};

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

<h1>Overzicht van bieren</h1>

<table border="Solid">

	<thead>

		<tr>

			<th> # </th>

			<?php foreach ($recordsArray[0] as $key => $value): ?>

	 	 		<th>	<?php echo $key ?>	</th>
	 
	 		<?php endforeach ?>

		</tr>
	
	</thead>



	<tbody>
		
		<?php foreach ($recordsArray as $key => $value): ?> 
			
			<tr>

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

				<td class="<?php echo $klasseNaam ?>"> <?php echo $key;?> </td>



				<?php foreach ($value as $waarde => $record): ?>
								
					<td class="<?php echo $klasseNaam ?>"> <?php echo $record ?> </td>

				<?php endforeach ?>

			</tr>

		<?php endforeach ?>		



	</tbody>


	<tfoot></tfoot>

</table>



	

			
</body>
</html>