<?php

	session_start();

	//try en catch met connectie DB
	$message	=	"";
	$warning 	= "hide";
	$login 		= "hide"; 

	try {
		
		if  ( isset( $_POST['submit'] ) ) 

			{

				//connectie maken met DB school
				$connectie = new PDO("mysql:host=localhost;dbname=school", "root", "");

				//bericht wordt getoond indien connectie gelukt is
				$message	=	"Database connectie: gelukt. ";

				//de MySQL code die de gegevens moet invoegen in de tabel gebruikers
				$queryString = "INSERT INTO gebruikers

									(voornaam,
						             achternaam, 
						             gebruikersnaam,
						             wachtwoord, 
						             soort) 
     
						     	VALUES (:voornaam,
						             	:achternaam, 
						             	:gebruikersnaam,
						             	:wachtwoord, 
						             	:soort) ";

				//de string wordt voorgeladen om te gebruiken				    
				$statement = $connectie->prepare($queryString);

				//waarde toekennen aan vervangers van placeholders in bindvalue
				$voornaam 		= 	$_POST['voornaam'];
				$achternaam 	= 	$_POST['achternaam'];
				$gebruikersnaam = 	$_POST['gebruikersnaam'];
				$wachtwoord 	= 	$_POST['wachtwoord'];
				$soort 			= 	$_POST['soort'];


//kijk of de gebruikersnaam al bestaat

				//de MySQL code die alle gebruikersnamen selecteer uit de tabel gebruikers
				$queryCheck = "SELECT gebruikersnaam 
								FROM gebruikers ";

				//de string wordt voorgeladen om te gebruiken				    
				$checkStatement = $connectie->prepare($queryCheck);

				//de query wordt uitgevoerd
				$checkStatement->execute();

				//er wordt een nieuwe array aangemaakt
				$gebruikersnamen = array();

				//checkStatement->fetch() leest 1 record uit de gegevens uit
				//FETCH_ASSOC geeft enkel de namen weer van de gegevens, FETCH_BOTH geeft de namen weer en de key (dit wordt gereturnt als array)

				//Betekenis hieronder: we lezen associatief de records 1 voor 1 uit, deze worden telkens op een andere key in onze array gezet
				while   ( $row = $checkStatement->fetch(PDO::FETCH_ASSOC) )
						{
							$gebruikersnamen[]	=	$row;
						};

				//check of gebruikersnaam al bestaat		
				//arrey met gebruikersnamen uitloopen en voor elke waarde checken of de naam reeds bestaat
				//alle true's en false's opvangen in de array $check  
				foreach  ($gebruikersnamen as $key => $value) {
				       		
				       	 $bestaatReeds = in_array($gebruikersnaam, $value);
				};
				
				//als deze waarde bestaat dan tonen we de waarschuwing en anders wordt de insertquery uitgevoerd
				if ($bestaatReeds == true) {
					
						$warning = "show";

					 }

				else {

						//prepared statement: placeholders een nieuwe waarde geven
						$statement->bindValue(':voornaam'		, $voornaam);
						$statement->bindValue(':achternaam'		, $achternaam);
						$statement->bindValue(':gebruikersnaam'	, $gebruikersnaam);
						$statement->bindValue(':wachtwoord'		, $wachtwoord);
						$statement->bindValue(':soort'			, $soort);

						//de query wordt uitgevoerd
						$statement->execute();

						$last_id = $connectie->lastInsertId();

				    	$nieuwRecord = "Je registratie als  " . $gebruikersnaam . " is gelukt.";

				    	$login = "show";

				    }	
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

        <style> .show{display:block;} .hide{display:none;}</style>
        <link rel="author" href="humans.txt">
    </head>
    <body>

		<h1> Registreren </h1>
		<h5> <?php echo $message ?>	<?php if ( isset($nieuwRecord) ) { echo $nieuwRecord; } ?>	</h5>
		<h5 class=" <?php echo $warning ?> "> Deze gebruikersnaam bestaat reeds. Kies een andere. </h5>


		<form method="post" action= "registratie.php">

			<label for="voornaam"> 	voornaam	</label>
			<input type="text" name="voornaam">

			<label for="achternaam"> 	achternaam 	</label>
			<input type="text" name="achternaam">

			<label for="gebruikersnaam"> 	gebruikersnaam </label>
			<input type="text" name="gebruikersnaam">

			<label for="wachtwoord"> 	wachtwoord	</label>
			<input type="text" name="wachtwoord">

			<input type="hidden" name="soort" value="user">

			<input class="submit" type="submit" value="registreer!" name="submit">

		</form>

		<div class=" <?php echo $login ?> "> <button> <a href="login.php">Login</a></button></div>


        
    </body>
</html>