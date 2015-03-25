<?php 

var_dump($_POST);

session_start();

	if  ( isset($_POST['gegevensOpslaan'] ) ) 
		
		{
						// check of  bestandstype van bestand is toegelaten en of bestand niet groter is dan 2mb
			if  (		$_FILES["profile_picture"]["type"] == "image/gif" 
					||  $_FILES["profile_picture"]["type"] == "image/jpeg" 
					||  $_FILES["profile_picture"]["type"] == "image/jpg" 
					||  $_FILES["profile_picture"]["type"] == "image/png" 
					&&  $_FILES["profile_picture"]["size"] < 2000000 		)
				

				{	

					if  ( $_FILES["profile_picture"]["error"] > 0)
						
						{
							$_SESSION['melding']['bericht'] = "FOUT!";
							header( 'location: ' . "gegevens-wijzigen-form.php" ); 
						}

							$nieuweNaam = mt_rand() . "-" . date("HisdmY") . "-" . $_FILES["profile_picture"]["name"];

					var_dump($nieuweNaam);

					define( 'ROOT', dirname(__FILE__) );

					if  ( file_exists( ROOT . "/img/" . $nieuweNaam ) )
						
						{
							$nieuweNaam = mt_rand() . "-" . date("HisdmY") . "-" . $_FILES["profile_picture"]["name"];
							$_FILES["profile_picture"]["name"] = $nieuweNaam;
							
						}

					else
						
						{	
							$_FILES["profile_picture"]["name"] = $nieuweNaam;						
							move_uploaded_file($_FILES["profile_picture"]["tmp_name"], ROOT . "/img/" . $_FILES["profile_picture"]["name"]);
							$_SESSION['melding']['bericht'] = "foto geupload!";

							$connectie = new PDO("mysql:host=localhost;dbname=opdracht-file-upload", "root", "");    
							include_once("classes/connectieClass.php");

							$dbConnectie = new Database($connectie);    

							$queryUpdateArtikel = " UPDATE users
													SET email = :email,
													profile_picture = :picture,
													WHERE id = :id ";

							$_SESSION['foto'] = ROOT . "/img/" . $_FILES["profile_picture"]["name"];						

							$placeholders = array(':email' => $_POST['email'], ':picture' => ROOT . "/img/" . $_FILES["profile_picture"]["name"], ':id' => $_SESSION['id'] );								

							$dbConnectie->queryInsert( $queryUpdateArtikel, $placeholders );	
			
	

							//header( 'location: ' . "gegevens-wijzigen-form.php"  ); 
						}	






						

	


				}

			else 

				{ 

					$_SESSION['melding']['bericht'] = "FOUT!";
					header( 'location: ' . "gegevens-wijzigen-form.php"  ); 

				}	


			

		}

?>