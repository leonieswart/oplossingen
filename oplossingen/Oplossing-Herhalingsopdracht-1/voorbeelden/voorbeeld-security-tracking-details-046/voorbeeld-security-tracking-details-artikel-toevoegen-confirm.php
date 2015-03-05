<?php

session_start();

if ( isset( $_POST[ 'submit' ] ) ) 
{

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=voorbeeld-security-tracking-details', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken


		$queryString = 'INSERT INTO artikels ( titel, artikel, kernwoorden, datum ) 
						VALUES ( :titel, :artikel, :kernwoorden, :datum )';

		echo $queryString;

		// Een query klaarmaken.
		$statement = $db->prepare($queryString);

		// Placeholders een waarde toekennen
		$statement->bindValue( ':titel', $_POST[ 'titel' ] );
		$statement->bindValue( ':artikel', $_POST[ 'artikel' ] );
		$statement->bindValue( ':kernwoorden', $_POST[ 'kernwoorden' ] );
		$statement->bindValue( ':datum', $_POST['jaar']  . '-' . $_POST['maand'] . '-' . $_POST['dag'] );

		// Een query uitvoeren
		$querySucceeded = $statement->execute();

		if ( $querySucceeded ) 
		{
			$_SESSION['notification']['type'] = 'success';
			$_SESSION['notification']['body'] = 'Het artikel werd succesvol toegevoegd.';
			header('location: voorbeeld-security-tracking-details.php');
		} 
		else 
		{
			$_SESSION['notification']['type'] = 'error';
			$_SESSION['notification']['body'] = 'Het artikel kon niet toegevoegd worden. Probeer opnieuw.';
			header('location: voorbeeld-security-tracking-details-artikel-toevoegen-form.php');
		}

	}
	catch ( PDOException $e )
	{
		$_SESSION['notification']['type'] = 'error';
		$_SESSION['notification']['body'] = 'Er ging iets mis met de connectie van de database. ' . $e->getMessage();
		header('location: voorbeeld-security-tracking-details.php');
	}
}
?>