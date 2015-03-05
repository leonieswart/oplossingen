<?php

session_start();

if ( isset( $_GET[ 'artikel' ] ) ) 
{

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=voorbeeld-security-tracking-details', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken


		$queryString = 'UPDATE artikels 
							SET is_active = 1 - is_active 
							WHERE id = :artikelId';

		echo $queryString;

		// Een query klaarmaken.
		$statement = $db->prepare($queryString);

		// Placeholders een waarde toekennen
		$statement->bindValue( ':artikelId', $_GET[ 'artikel' ] );

		// Een query uitvoeren
		$querySucceeded = $statement->execute();

		if ( $querySucceeded ) 
		{
			$_SESSION['notification']['type'] = 'success';
			$_SESSION['notification']['body'] = 'Het artikel werd succesvol gewijzigd.';
			header('location: voorbeeld-security-tracking-details.php');
		} 
		else 
		{
			$_SESSION['notification']['type'] = 'error';
			$_SESSION['notification']['body'] = 'Het artikel kon niet gewijzigd worden. Probeer opnieuw.';
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