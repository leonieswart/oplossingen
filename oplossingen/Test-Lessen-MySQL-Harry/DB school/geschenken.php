<?php

	//sessie starten
	session_start();

	// als loggedin = true dan wordt de rest van de code uitgevoerd
	if ($_SESSION["loggedin"] == TRUE) {
	
		//variabelen ivm connectie
		$message	=	"";
		$warning 	= "hide";
		//variabelen ivm css
		$insert 	= "hide";
		$wijzigen 	= "hide";
		$notempty 	= "";


		// code om uit te loggen includen (wordt uitegevoerd als afmelden ge-isset is)
		include('snippet/afmelden.php');


		//begin try-blok
		try 

			{
					// include connectie voor DB
					include('snippet/connectie.php');

					// include code om cadeau te wijzigen (selecteert alle geschenken uit de DB en maakt formulier zichtbaar)
					include('snippet/wijzigen.php');

					// include code om geschenkkeuze te updaten (set het geschenkID in de tabel geschenkkeuze waar het gebruikersid matcht)
					include('snippet/updateGeschenkKeuze.php');

					// include code met query om de koppeltabel geschenkkeuze op te vragen specifiek voor de ingelogde gebruiker
					include('snippet/querySpecificUser.php');

					// include code die checkt of ingelogde gebruiker de admin is, zo ja: query uitvoeren die alle gebruikers met geschenk ophaalt
					// (erg gelijkaardige query als stap hierboven maar zonder de voowaarde van het gebruikersID)
					include('snippet/checkAdmin.php');

					// include code om te inserten (wordt uitgevoerd als de array van querySpecificUser leeg is)
					// toont formulier om te inserten en voert insert query uit in de tabel geschenkkeuze
					include('snippet/inserten.php');

			}
		
		// begin catch blok indien er een fout is met de connectie	
		catch 	( PDOException $e )

				{
					//bericht als de connectie mislukt is + $e->getMessage() geeft de specifieke fout weer die zich heeft voorgedaan
					$message	=	'Er ging iets mis: ' . $e->getMessage();
					$nieuwRecord = 'Er ging iets mis met het toevoegen. Probeer het opnieuw.';
				}

	}			

?>

<!DOCTYPE html>

<html>

	<head>
		<title> Geschenken </title>

		<style> 
			.hide { display: none } 
			.show { display: block } 
		</style>

	</head>


	<body>

		<h1> Geschenken 

		<form method="POST" action="geschenken.php"> 

			<!-- afmeldknop -->	
			<input type="submit" name="afmelden" value="afmelden"> 
		
		</form>

		</h1>

		<!-- als de ingelogde gebruiker een admin is dan tonen we een tabel met alle gebruikers en geschenken -->	
		<?php if ( isset( $gebruikerSpecificID[0] ) ): ?>
			
			<?php if ($gebruikerSpecificID[0]['soort'] == "admin"): ?>
			
				<table border="1">
					
					<thead>

						<tr>
							<th>gebruikersnaam </th>
							<th>geschenk </th>						 
						</tr>	

					</thead>



					<tbody>

						<?php foreach ($gebruikerAll as $key => $value): ?> 
													
							<tr>
								<td><?php echo $value['gebruikersnaam'] ?></td>
								<td><?php echo $value['geschenk'] ?></td>
							</tr>
						
						<?php endforeach ?>

					</tbody>	

				</table>
				
			<?php endif ?> 

		<?php endif ?>

		<!-- formulier wordt weergegeven bij gewone user en admin: hier passen ze hun eigen geschenkkeuze in aan -->
		<form method="POST" action="geschenken.php">

			<!-- geeft het reeds gekozen geschenk weer -->
			<?php foreach ($gebruikerSpecificID as $key => $value): ?>

				<p>	<label>	Gebruiker: 			<?php echo $value['gebruikersnaam'] ?> 	</label>	</p>
				<p>	<label>	Gekozen geschenk: 	<?php echo $value['geschenk'] ?>		</label>	</p>
				
			<?php endforeach	?>

			<div class="<?php echo $notempty ?>">

				<!-- als deze knop wordt ingedrukt komt het formulier te voorschijn om hun eigen keuze aan te passen -->
				<input type="submit" value="wijzigen" name="wijzigen">

				<!-- keuze wijzigen -->
				<div class="<?php echo $wijzigen ?>">

					<label>	Geschenk kiezen: </label>

					<!-- verschillende soorten geschenken worden uitgeloopt in een selectiemenu -->
					<select name="geschenk">

						<?php foreach ($geschenken as $key => $value): ?>
							
							<option value="<?php echo $value['geschenkID'] ?>"> <?php echo $value['geschenk'] ?></option>
						
						<?php endforeach ?>

					</select>

					<!-- dit hidden inputfield geeft het gebruikersid mee wanneer er op opslaan geklikt wordt -->
					<input type="hidden" name="id" value="<?php echo $gebruikerSpecificID[0]['id'] ?>">

					<!-- opslaan knop die de updatequery voor de tabel geschenkkeuze in gang zet -->
					<input type="submit" value="opslaan" name="opslaan">
				
				</div>
				<!-- einde div keuze wijzigen -->

			</div>			

		</form>

		<!-- deze form wordt zichtbaar als de gebruiker nog geen geschenk gekozen heeft -->
		<form class="<?php echo $insert ?>" method="POST" action="geschenken.php">

			<!-- de gebruikersnaam wordt weergegeven en de mogelijke geschenken worden uitgeloopt --> 
			<?php foreach ($gebruikerInsert as $key => $value): ?>

				<!-- hidden input met value het gebruikersid om er voor te zorgen dat het onder de juiste gebruiker wordt toegevoegd -->
				<input type="hidden" name="id" value="<?php echo $value['id'] ?>">

				<p>	<label>	Gebruiker:	</label>
				 	<label> <?php echo $value['gebruikersnaam'] ?> 	</label>	</p>

				<p>	<label>	Geschenk: 	</label>

					<select name="geschenk">

						<?php foreach ($geschenkenInsert as $key => $value): ?>
								
							<option value="<?php echo $value['geschenkID'] ?>"> <?php echo $value['geschenk'] ?></option>
						
						<?php endforeach ?>

					</select>	</p>

			<?php endforeach ?>

			<!-- opslaanknop die de query insert into geschenkkeuze in gang zet -->
			<input type="submit" value="opslaan" name="opslaan">

		</form>

	</body>

</html>		
