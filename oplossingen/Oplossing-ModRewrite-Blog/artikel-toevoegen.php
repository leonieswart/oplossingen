<?php

	$message	=	"";

	try {
		//connectie maken met DB bieren
		$connectieDB = new PDO("mysql:host=localhost;dbname=opdracht-modrewrite-blog", "root", "");

		//bericht wordt getoond indien connectie gelukt is
		$message	=	"Connectie gelukt";


		if  ( isset( $_POST['opslaan'] ) ) 
			
			{
				$queryArtikelToevoegen = "INSERT INTO artikels

												(titel,
												artikel,
												kernwoorden,
												datum)

											VALUES 

												(:titel,
												:artikel,
												:kernwoorden,
												:datum) ";

				$statementToevoegen = $connectieDB->prepare($queryArtikelToevoegen);

				$statementToevoegen->Bindvalue( ':titel', $_POST['titel']);
				$statementToevoegen->Bindvalue( ':artikel', $_POST['artikel']);
				$statementToevoegen->Bindvalue( ':kernwoorden', $_POST['kernwoorden']);
				$statementToevoegen->Bindvalue( ':datum', $_POST['datum']);

				$statementToevoegen->execute();


		}
	}

	catch ( PDOException $e ) {
		//bericht als de connectie mislukt is + $e->getMessage() geeft de specifieke fout weer die zich heeft voorgedaan
		$message	=	'Er ging iets mis: ' . $e->getMessage();
	};


	/*//er wordt een nieuwe array aangemaakt
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
				};*/

	?>


<!DOCTYPE html>
<html>
<head>
	<title>artikels toevoegen</title>
</head>
<body>

<h2> artikel toevoegen </h2>		



<form method="POST" action="artikel-toevoegen.php">

	<label>titel</label>
	<input type="text" name="titel">

	<label>artikel</label>
	<input type="text" name="artikel">

	<label>kernwoorden</label>
	<input type="text" name="kernwoorden">

	<label>datum YYYY-MM-DD </label>
	<input type="text" name="datum">

	<input type="submit" value="toevoegen" name="opslaan">

</form>

</body>
</html>