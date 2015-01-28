<?php

	session_start();

	//try en catch met connectie DB
	$message	=	"";

	try {
		
		//originele waarde vervangers placeholders
		$naam 		= 	"standaardNaam";
		$adres 		= 	"standaardStraat";
		$postcode 	= 	"1234";
		$gemeente 	= 	"standaardGemeente";
		$omzet 		= 	"1234";

		if  ( isset( $_POST['submit'] ) ) 

			{

				//connectie maken met DB bieren
				$connectieDB = new PDO("mysql:host=localhost;dbname=bieren", "root", "");

				//bericht wordt getoond indien connectie gelukt is
				$message	=	"Database connectie: gelukt. ";

				//de MySQL code die de gegevens moet invoegen in de tabel brouwers
				$queryString = "INSERT INTO brouwers

									(brnaam,
						             adres, 
						             postcode,
						             gemeente, 
						             omzet) 
     
						     VALUES (:brnaam,
						             :adres, 
						             :postcode,
						             :gemeente, 
						             :omzet)";

				//de string wordt voorgeladen om te gebruiken				    
				$statement = $connectieDB->prepare($queryString);

				//waarde toekennen aan vervangers van placeholders in bindvalue
				$naam 		= 	$_POST['brnaam'];
				$adres 		= 	$_POST['adres'];
				$postcode 	= 	$_POST['postcode'];
				$gemeente 	= 	$_POST['gemeente'];
				$omzet 		= 	$_POST['omzet'];

				//prepared statement: placeholders een nieuwe waarde geven
				$statement->bindValue(':brnaam'		, $naam);
				$statement->bindValue(':adres'		, $adres);
				$statement->bindValue(':postcode'	, $postcode);
				$statement->bindValue(':gemeente'	, $gemeente);
				$statement->bindValue(':omzet'		, $omzet);

				//de query wordt uitgevoerd
				$statement->execute();

				$last_id = $connectieDB->lastInsertId();

		    	$nieuwRecord = "Brouwerij " . $naam . " werd succesvol toegevoegd. Het unieke ID van deze brouwerij is " . $last_id . ".";

		    	

		    	session_destroy();
			}

		
	}

	catch ( PDOException $e )

	{
		//bericht als de connectie mislukt is + $e->getMessage() geeft de specifieke fout weer die zich heeft voorgedaan
		$message	=	'Er ging iets mis: ' . $e->getMessage();
		$nieuwRecord = 'Er ging iets mis met het toevoegen. Probeer het opnieuw.';
	};

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/insert.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>

	<h1> Voeg een brouwer toe. </h1>
	<h5> <?php echo $message ?>	<?php if ( isset($nieuwRecord) ) { echo $nieuwRecord; } ?>	</h5>



	<form method="post" action= "insert.php">

		<label for="brnaam"> 	Brouwernaam		</label>
			<input type="text" name="brnaam">

		<label for="adres"> 	Adres 				</label>
			<input type="text" name="adres">

		<label for="postcode"> 	Postcode			</label>
			<input type="text" name="postcode">

		<label for="gemeente"> 	Gemeente			</label>
			<input type="text" name="gemeente">

		<label for="omzet"> 	Omzet				</label>
			<input type="text" name="omzet">

		<input class="submit" type="submit" value="Toevoegen" name="submit">

	</form>



	



        
    </body>
</html>