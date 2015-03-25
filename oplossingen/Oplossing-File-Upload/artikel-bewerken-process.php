<?php

include("checkLoginOk.php");


	if  ( isset( $_POST['verwijderen'] ) ) 
		
		{	
	
			include_once("classes/connectieClass.php");

			$connectie = new PDO("mysql:host=localhost;dbname=opdracht-file-upload", "root", "");    

			$dbConnectie = new Database($connectie);    

			$queryUpdateArchived = "  UPDATE `artikels` 
											SET `is_archived`= '1'
											WHERE `id` = :id ";

			$placeholders = array( ':id' => $_POST['verwijderen'] );								

			$dbConnectie->queryInsert( $queryUpdateArchived, $placeholders );

			header( 'location: ' . "artikels-overzicht.php"  );
		}



	if  ( isset( $_POST['activeren'] ) ) 
		
		{	
	
			include_once("classes/connectieClass.php");

			$connectie = new PDO("mysql:host=localhost;dbname=opdracht-file-upload", "root", "");    

			$dbConnectie = new Database($connectie);    

			//de MySQL code die alle gebruikersnamen selecteer uit de tabel gebruikers
			$queryActiveArtikel = " SELECT id, is_active 
									FROM artikels 
									WHERE id = :id ";

			$placeholders = array( ':id' => $_POST['activeren'] );								

			$artikel = $dbConnectie->query( $queryActiveArtikel, $placeholders );

			if  ( $artikel[0]['is_active'] == 1 ) 
				
				{
					$queryUpdateActive = "  UPDATE `artikels` 
											SET `is_active`= '0'
											WHERE `id` = :id ";

					$placeholders = array( ':id' => $_POST['activeren'] );								

					$dbConnectie->queryInsert( $queryUpdateActive, $placeholders );		 					  			     
		 		}

			else

				{
					$queryUpdateActive = "  UPDATE `artikels` 
											SET `is_active`= '1'
											WHERE `id` = :id ";

					$placeholders = array( ':id' => $_POST['activeren'] );								

					$dbConnectie->queryInsert( $queryUpdateActive, $placeholders );	
				}

			header( 'location: ' . "artikels-overzicht.php"  );
		}

?>