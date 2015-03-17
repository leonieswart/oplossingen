<?php

	session_start();

	//try en catch met connectie DB
	$message	=	"";
	$warning 	= "hide";

	try {
		
		if  ( isset( $_POST['submit'] ) ) 

			{
				$gebruikersnaam = $_POST["gebruikersnaam"];
				$wachtwoord = $_POST["wachtwoord"];

				//connectie maken met DB school
				$connectie = new PDO("mysql:host=localhost;dbname=school", "root", "");

				//bericht wordt getoond indien connectie gelukt is
				$message	=	"Database connectie: gelukt. ";

				//de MySQL code die de gegevens moet invoegen in de tabel gebruikers
				$queryString = "SELECT gebruikersnaam, wachtwoord
								FROM   gebruikers 
								WHERE  gebruikersnaam = :gebruikersnaam AND
									   wachtwoord = :wachtwoord";

				//de string wordt voorgeladen om te gebruiken				    
				$statement = $connectie->prepare($queryString);

				$statement->bindValue(':gebruikersnaam'	, $gebruikersnaam);
				$statement->bindValue(':wachtwoord'		, $wachtwoord);

				//de query wordt uitgevoerd
				$statement->execute();

				//er wordt een nieuwe array aangemaakt
				$login = array();

				//checkStatement->fetch() leest 1 record uit de gegevens uit
				//FETCH_ASSOC geeft enkel de namen weer van de gegevens, FETCH_BOTH geeft de namen weer en de key (dit wordt gereturnt als array)

				//Betekenis hieronder: we lezen associatief de records 1 voor 1 uit, deze worden telkens op een andere key in onze array gezet
				while   ( $row = $statement->fetch(PDO::FETCH_ASSOC) )

						{
							$login[]	=	$row;
						};

				if  ( empty($login) ) 

					{
						$warning = "show";
					}

				else
				
					{
						$_SESSION['gebruikersnaam'] = $gebruikersnaam;
						$_SESSION['loggedin'] = TRUE;
						header( 'location: ' . "loggedin.php"  ); 
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
        <link rel="stylesheet" href="css/style.css">
                <style> .show{display:block;} .hide{display:none;}</style>

        <link rel="author" href="humans.txt">
    </head>
    <body>


    <h1> aanmelden </h1>
	<h5 class=" <?php echo $warning ?> "> De gebruikersnaam en het wachtwoord komen niet overeen. Probeer het opnieuw. </h5>

        



  	  <form method="post" action= "login.php">

			<label for="gebruikersnaam"> 	gebruikersnaam	</label>
			<input type="text" name="gebruikersnaam">

			<label for="wachtwoord"> 	wachtwoord 	</label>
			<input type="text" name="wachtwoord">

			<input class="submit" type="submit" value="aanmelden" name="submit">

		</form>
        



        <script src="js/main.js"></script>
    </body>
</html>