<?php

$message	=	"";

	try {
			//connectie maken met DB bieren
			$connectieDB = new PDO("mysql:host=localhost;dbname=bieren", "root", "");

			//bericht wordt getoond indien connectie gelukt is
			$message	=	"Connectie gelukt";

			if ( isset( $_POST["delete"] ) ) {


				$nummer = $_POST["delete"];
					
				//de MySQL code die de correcte gegevens uit de DB selecteert
				$queryDelete = " DELETE FROM brouwers

								 		WHERE brouwernr =  $nummer	"	;	


				//de string wordt voorgeladen om te gebruiken				    
				$deleteStatement = $connectieDB->prepare($queryDelete);

				//de query wordt uitgevoerd
				$deleteStatement->execute();

				$message = "Item werd succesvol verwijderd.";

			}

			if ( isset( $_POST["edit"] ) ) {

				$nummer = $_POST["edit"];

				//de MySQL code die de correcte gegevens uit de DB selecteert
				$queryEdit = " SELECT *
								 FROM brouwers
								 WHERE brouwernr =  $nummer	"	;	


				//de string wordt voorgeladen om te gebruiken				    
				$editStatement = $connectieDB->prepare($queryEdit);

				//de query wordt uitgevoerd
				$editStatement->execute();

				//er wordt een nieuwe array aangemaakt
				$editArray = array();

				//statement->fetch() leest 1 record uit de gegevens uit
				//FETCH_ASSOC geeft enkel de namen weer van de gegevens, FETCH_BOTH geeft de namen weer en de key (dit wordt gereturnt als array)

				//Betekenis hieronder: we lezen associatief de records 1 voor 1 uit, deze worden telkens op een andere key in onze array gezet
				while ( $row = $editStatement->fetch(PDO::FETCH_ASSOC) )
					{
						$editArray[]	=	$row;
					};

			}


			if  ( isset( $_POST['opslaan'] ) ) {				

				//de MySQL code die de gegevens moet invoegen in de tabel brouwers
				$queryUpdate =	" UPDATE `brouwers`
								  SET 	 `brnaam`= :brnaam,
										 `adres`= :adres,
										 `postcode`= :postcode,
										 `gemeente`= :gemeente,
										 `omzet`= :omzet
					  			  WHERE  `brouwernr`= :brouwernr";

				$statementUpdate = $connectieDB->prepare($queryUpdate);

				$statementUpdate->bindValue(':brouwernr', $_POST['brouwernr'] );
				$statementUpdate->bindValue(':brnaam', $_POST['brnaam']);
				$statementUpdate->bindValue(':adres', $_POST['adres']);
				$statementUpdate->bindValue(':postcode', $_POST['postcode']);
				$statementUpdate->bindValue(':gemeente', $_POST['gemeente']);
				$statementUpdate->bindValue(':omzet', $_POST['omzet']);

				$statementUpdate->execute();

				$message  	=	"Aanpassing succesvol doorgevoerd."; 

			}
		    	

			//de MySQL code die de correcte gegevens uit de DB selecteert
			$queryString = " SELECT *

							FROM brouwers " ;


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

				//var_dump($recordsArray);

	

		}

	catch ( PDOException $e )
		{
			//bericht als de connectie mislukt is + $e->getMessage() geeft de specifieke fout weer die zich heeft voorgedaan
			$message	=	'Er ging iets mis: ' . $e->getMessage();
		};




	?>



<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel=stylesheet href="css/style.css">
        <title>Untitled</title>

        <link rel="author" href="humans.txt">
    </head>

    <body>

    <div> <?php echo $message ?> </div>
		        
		<h1>Overzicht van brouwers</h1>

		<?php if (isset( $_POST["edit"])): ?>

			<div>

					<form method="post" action= "update.php">

						<?php foreach ($editArray as $key => $value): ?>
							
							<label for="brnaam"> 	Brouwernaam		</label>
								<input type="text" name="brnaam" value="<?php echo $value['brnaam'] ?>">

							<label for="adres"> 	Adres 				</label>
								<input type="text" name="adres" value="<?php echo $value['adres'] ?>">

							<label for="postcode"> 	Postcode			</label>
								<input type="text" name="postcode" value="<?php echo $value['postcode'] ?>">

							<label for="gemeente"> 	Gemeente			</label>
								<input type="text" name="gemeente" value="<?php echo $value['gemeente'] ?>">

							<label for="omzet"> 	Omzet				</label>
								<input type="text" name="omzet" value="<?php echo $value['omzet'] ?>">

							<input type="hidden" name="brouwernr" id="brouwernr" value="<?= $value['brouwernr'] ?>">	

							<input class="submit" type="submit" value="opslaan" name="opslaan">

						<?php endforeach ?>		

					</form>
		

			</div>

		<?php endif ?>
		

		<table>

			<thead>

				<tr>

				<!-- kolomnamen uitloopen -->
					<?php foreach ($recordsArray[0] as $key => $value): ?>

			 	 		<th>	<?php echo $key ?>	</th>
			 
			 		<?php endforeach ?>

			 			<th>	<img src="images/icon-delete.png" alt="delete">				</th>
			 			<th>	<img src="images/icon-edit.png" alt="delete">				</th>

				</tr>
			
			</thead>



			<tbody>

			<form method="post" action="update.php">

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

						<?php foreach ($value as $waarde => $record): ?>
										
							<td class="<?php echo $klasseNaam ?>"> <?php echo $record ?> </td>

						<?php endforeach ?>


							<td> <button class="delete" type="submit" value="<?php echo $value['brouwernr'] ?>" name="delete"> <img src="images/icon-delete.png" alt="delete"></button> </td>

							<td> <button class="edit" type="submit" value="<?php echo $value['brouwernr'] ?>" name="edit"> <img src="images/icon-edit.png" alt="edit"></button> </td>
					</tr>

				<?php endforeach ?>		



			</tbody>

			</form>

		</table>


    </body>
</html>