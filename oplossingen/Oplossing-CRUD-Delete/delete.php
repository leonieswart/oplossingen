<?php

$message	=	"";

$confirm="hide";


var_dump($_POST);

	try {
			//connectie maken met DB bieren
			$connectieDB = new PDO("mysql:host=localhost;dbname=bieren", "root", "");

			//bericht wordt getoond indien connectie gelukt is
			$message	=	"Connectie gelukt";

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


			if ( isset( $_POST["delete1"] ) ) {

				$confirm = "show";

				$nummer = $_POST["delete1"];

				var_dump($_POST);

				if ( isset( $_POST["delete2"])) {
					
				//connectie maken met DB bieren
				$connectieDB = new PDO("mysql:host=localhost;dbname=bieren", "root", "");

				//bericht wordt getoond indien connectie gelukt is
				$message	=	"Connectie gelukt";

				

				//de MySQL code die de correcte gegevens uit de DB selecteert
				$queryStringBrouwer = " DELETE FROM brouwers

								 		WHERE brouwernr =  $nummer	"	;	


				//de string wordt voorgeladen om te gebruiken				    
				$statement = $connectieDB->prepare($queryStringBrouwer);

				//de query wordt uitgevoerd
				$statement->execute();

				header( 'location: ' . $_SERVER[ 'PHP_SELF' ]  ); }

				if ( isset( $_POST["delete3"])) {
					$confirm = "hide";
				}


					
				}	

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
		        
		<h1>Overzicht van brouwers</h1>

		<table>

			<thead>

				<tr>

				<!-- kolomnamen uitloopen -->
					<?php foreach ($recordsArray[0] as $key => $value): ?>

			 	 		<th>	<?php echo $key ?>	</th>
			 
			 		<?php endforeach ?>

			 			<th>	Delete				</th>

				</tr>
			
			</thead>



			<tbody>

			<form method="post" action="delete.php">


			<div class="<?php echo $confirm ?> ">

					<input type="submit" value="ja" name="delete2">
					<input type="submit" value="nee" name="delete3">

			</div>
					



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


							<td> <input class="DEL" type="submit" value="<?php echo $value['brouwernr'] ?>" name="delete1"></td>

					</tr>

				<?php endforeach ?>		



			</tbody>

			</form>

		</table>


    </body>
</html>