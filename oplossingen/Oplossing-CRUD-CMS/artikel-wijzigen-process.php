<?php 

include("checkLoginOk.php");


	$connectie = new PDO("mysql:host=localhost;dbname=opdracht-crud-cms", "root", "");    

	if  ( isset($_POST['opslaan'] ) ) 
		
		{

			include_once("classes/connectieClass.php");

			$dbConnectie = new Database($connectie);    

			$queryUpdateArtikel = "  UPDATE artikels
									SET titel = :titel,
									artikel = :artikel,
									kernwoorden = :kernwoorden,
									datum = :datum 
									WHERE id = :id ";

			$placeholders = array(':titel' => $_POST['titel'], ':artikel' => $_POST['artikel'], ':kernwoorden' => $_POST['kernwoorden'], ':datum' => $_POST['datum'], ':id' => $_POST['id'] );								

			$dbConnectie->queryInsert( $queryUpdateArtikel, $placeholders );	
			
			header( 'location: ' . "artikels-overzicht.php"  );

	}

else {			header( 'location: ' . "artikels-overzicht.php"  );
}	


?>	