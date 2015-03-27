<?php
	session_start();

	if ($_SESSION["loggedin"] == TRUE) {
	
		//try en catch met connectie DB
		$message	=	"";
		$warning 	= "hide";

		if  ( isset( $_POST["afmelden"] ) ) 
			
			{
				session_destroy();
				header( 'location: ' . "login.php"  ); 
			}

		if  ( isset( $_POST["geschenk"] ) ) 
			
			{
				//session_destroy();
				header( 'location: ' . "geschenken.php"  ); 
			}	

		try {

				//connectie maken met DB school
				$connectie = new PDO("mysql:host=localhost;dbname=school", "root", "");

				//bericht wordt getoond indien connectie gelukt is
				$message	=	"Database connectie: gelukt. ";


				//de MySQL code die de gegevens moet invoegen in de tabel gebruikers
				$queryString = "SELECT id, voornaam, achternaam, gebruikersnaam, wachtwoord, soort
								FROM   gebruikers 
								WHERE  gebruikersnaam = :gebruikersnaam ";

				//de string wordt voorgeladen om te gebruiken				    
				$statement = $connectie->prepare($queryString);

				$statement->bindValue(':gebruikersnaam'	, $_SESSION['gebruikersnaam']);

				//de query wordt uitgevoerd
				$statement->execute();

				//er wordt een nieuwe array aangemaakt
				$gebruiker = array();

				//checkStatement->fetch() leest 1 record uit de gegevens uit
				//FETCH_ASSOC geeft enkel de namen weer van de gegevens, FETCH_BOTH geeft de namen weer en de key (dit wordt gereturnt als array)

				//Betekenis hieronder: we lezen associatief de records 1 voor 1 uit, deze worden telkens op een andere key in onze array gezet
				while   ( $row = $statement->fetch(PDO::FETCH_ASSOC) )

						{
							$gebruiker[]	=	$row;
						};


				if  ($gebruiker[0]['soort'] == "admin") 

					{
				
						//de MySQL code die de gegevens moet invoegen in de tabel gebruikers
						$queryAdmin = " SELECT *
										FROM   gebruikers ";

						//de string wordt voorgeladen om te gebruiken				    
						$adminStatement = $connectie->prepare($queryAdmin);

						//de query wordt uitgevoerd
						$adminStatement->execute();

						//er wordt een nieuwe array aangemaakt
						$gebruikerAll = array();

						//checkadminStatement->fetch() leest 1 record uit de gegevens uit
						//FETCH_ASSOC geeft enkel de namen weer van de gegevens, FETCH_BOTH geeft de namen weer en de key (dit wordt gereturnt als array)

						//Betekenis hieronder: we lezen associatief de records 1 voor 1 uit, deze worden telkens op een andere key in onze array gezet
						while   ( $row = $adminStatement->fetch(PDO::FETCH_ASSOC) )

								{
									$gebruikerAll[]	=	$row;
								};


						if ( isset( $_POST["delete"] ) ) {

							$id = $_POST["delete"];
								
							//connectie maken met DB bieren
							$connectie = new PDO("mysql:host=localhost;dbname=school", "root", "");

							//bericht wordt getoond indien connectie gelukt is
							$message	=	"Connectie gelukt";


							//de MySQL code die de correcte gegevens uit de DB selecteert
							$queryDelete = " DELETE FROM gebruikers

											 		WHERE id =  $id	"	;	


							//de string wordt voorgeladen om te gebruiken				    
							$deleteStatement = $connectie->prepare($queryDelete);

							//de query wordt uitgevoerd
							$deleteStatement->execute();

							header( 'location: ' . $_SERVER[ 'PHP_SELF' ]  ); 
						}
						
						if  ( isset($_POST["opslaan"])) 
							
							{
								$id = $_POST["opslaan"];
									
								//connectie maken met DB bieren
								$connectie = new PDO("mysql:host=localhost;dbname=school", "root", "");

								//bericht wordt getoond indien connectie gelukt is
								$message	=	"Connectie gelukt";

								//de MySQL code die de correcte gegevens uit de DB selecteert
								$queryUpdate = " UPDATE gebruikers 
								 				 SET id=:id,
								 	 			  voornaam=:voornaam,
								 	 			  achternaam=:achternaam,
								 	 			  gebruikersnaam=:gebruikersnaam,
								 	 			  wachtwoord=:wachtwoord,
								 	 			  soort=:soort 
												  WHERE id = :id  "		;	


								//de string wordt voorgeladen om te gebruiken				    
								$updateStatement = $connectie->prepare($queryUpdate);

								//waarde toekennen aan vervangers van placeholders in bindvalue
								$voornaam 			= 	$_POST['voornaam'];
								$achternaam 		= 	$_POST['achternaam'];
								$gebruikersnaam 	= 	$_POST['gebruikersnaam'];
								$wachtwoord 		= 	$_POST['wachtwoord'];
								$soort 				= 	$_POST['soort'];

								//prepared statement: placeholders een nieuwe waarde geven
								$updateStatement->bindValue(':voornaam'		, $voornaam);
								$updateStatement->bindValue(':achternaam'		, $achternaam);
								$updateStatement->bindValue(':gebruikersnaam'		, $gebruikersnaam);
								$updateStatement->bindValue(':wachtwoord'		, $wachtwoord);
								$updateStatement->bindValue(':soort'		, $soort);

								//de query wordt uitgevoerd
								$updateStatement->execute();

								//header( 'location: ' . $_SERVER[ 'PHP_SELF' ]  ); 
							}							
					}
			}

		catch ( PDOException $e )

		{
			//bericht als de connectie mislukt is + $e->getMessage() geeft de specifieke fout weer die zich heeft voorgedaan
			$message	=	'Er ging iets mis: ' . $e->getMessage();
			$nieuwRecord = 'Er ging iets mis met het toevoegen. Probeer het opnieuw.';
		};

	}

else 

	{ 
		header( 'location: ' . "login.php"  );  
	}

?>

<!doctype html>
	<html>
	    <head>
	        <meta charset="utf-8">
	        <meta name="description" content="">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	        <title>Untitled</title>
	        <link rel="author" href="humans.txt">
	    </head>
	    <body>
	        

	        <h1>Welkom</h1>

	        <?php if ( $gebruiker[0]['soort'] == "user"): ?>

		        <form method="post" action= "loggedin.php">

					<label for="voornaam"> 	voornaam	</label>
					<input type="text" name="voornaam" value="<?php echo $gebruiker[0]['voornaam'] ?>">

					<label for="achternaam"> 	achternaam 	</label>
					<input type="text" name="achternaam" value="<?php echo $gebruiker[0]['achternaam'] ?>">

					<label for="gebruikersnaam"> 	gebruikersnaam </label>
					<input type="text" name="gebruikersnaam" value="<?php echo $gebruiker[0]['gebruikersnaam'] ?>">

					<label for="wachtwoord"> 	wachtwoord	</label>
					<input type="text" name="wachtwoord" value="<?php echo $gebruiker[0]['wachtwoord'] ?>">

					<input type="hidden" name="soort" value="<?php echo $gebruiker[0]['soort'] ?>">

					<button class="edit" type="submit" value="<?php echo $gebruiker[0]['id'] ?>" name="opslaan"> opslaan </button>
					<input type="submit" name="afmelden" value="afmelden"> 


					<button class="edit" type="submit" value="<?php echo $gebruiker[0]['id'] ?>" name="geschenk"> geschenk kiezen </button>

				</form>

			<?php else: ?>

					<table border="1">
						<thead>
							<tr>
								<!-- kolomnamen uitloopen -->
								<?php foreach ($gebruikerAll[0] as $key => $value): ?>
							 	 	
							 	 	<th>	<?php echo $key ?>	</th>
							 
							 	<?php endforeach ?>

								<th>	Bewerk	</th>
								<th>	Delete	</th>
							</tr>	
						</thead>

						<tbody>

							<form method="post" action="loggedin.php">

								<?php foreach ($gebruikerAll as $key => $value): ?> 
										
									<tr>

										<?php foreach ($value as $waarde => $gebruiker): ?>
																																																			
											<td> <input type="text" name="<?php echo $waarde ?>" value="<?php echo $gebruiker ?>"> </td>

										<?php endforeach ?>

										<td> <input class="opslaan" type="submit" name="opslaan" value="<?php echo $value['id'] ?>"> </td>
										<td> <input class="delete" type="submit" name="delete" value="<?php echo $value['id'] ?>"> </td>		
										
									</tr>		

								<?php endforeach ?>	

								<input type="submit" name="afmelden" value="afmelden"> 

								<a href="geschenken.php"> geschenk kiezen</a>

							</form>
						</tbody>
	
					</table>


			
			<?php endif ?>




	 



	    </body>
	</html>	