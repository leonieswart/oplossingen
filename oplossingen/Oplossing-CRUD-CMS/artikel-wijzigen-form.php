<?php

include("checkLoginOk.php");
$show = "hide";


	if  ( isset( $_GET['verwijderen'] ) ) 
		
		{	
	
			include_once("classes/connectieClass.php");

			$connectie = new PDO("mysql:host=localhost;dbname=opdracht-crud-cms", "root", "");    

			$dbConnectie = new Database($connectie);    

			$queryUpdateArchived = "  UPDATE `artikels` 
											SET `is_archived`= '1'
											WHERE `id` = :id ";

			$placeholders = array( ':id' => $_GET['verwijderen'] );								

			$dbConnectie->queryInsert( $queryUpdateArchived, $placeholders );

			header( 'location: ' . "artikels-overzicht.php"  );
		}

	if  ( isset( $_GET['activeren'] ) ) 
		
		{	
	
			include_once("classes/connectieClass.php");

			$connectie = new PDO("mysql:host=localhost;dbname=opdracht-crud-cms", "root", "");    

			$dbConnectie = new Database($connectie);    

			//de MySQL code die alle gebruikersnamen selecteer uit de tabel gebruikers
			$queryActiveArtikel = " SELECT id, is_active 
									FROM artikels 
									WHERE id = :id ";

			$placeholders = array( ':id' => $_GET['activeren'] );								

			$artikel = $dbConnectie->query( $queryActiveArtikel, $placeholders );

			if  ( $artikel[0]['is_active'] == 1 ) 
				
				{
					$queryUpdateActive = "  UPDATE `artikels` 
											SET `is_active`= '0'
											WHERE `id` = :id ";

					$placeholders = array( ':id' => $_GET['activeren'] );								

					$dbConnectie->queryInsert( $queryUpdateActive, $placeholders );		 					  			     
		 		}

			else

				{
					$queryUpdateActive = "  UPDATE `artikels` 
											SET `is_active`= '1'
											WHERE `id` = :id ";

					$placeholders = array( ':id' => $_GET['activeren'] );								

					$dbConnectie->queryInsert( $queryUpdateActive, $placeholders );	
				}

			header( 'location: ' . "artikels-overzicht.php"  );
		}


		if  ( isset( $_GET['artikel'] ) ) 
		
		{	
	
			include_once("classes/connectieClass.php");

			$connectie = new PDO("mysql:host=localhost;dbname=opdracht-crud-cms", "root", "");    

			$dbConnectie = new Database($connectie);    

			//de MySQL code die alle gebruikersnamen selecteer uit de tabel gebruikers
			$queryActiveArtikel = " SELECT id, titel, artikel, kernwoorden, datum 
									FROM artikels 
									WHERE id = :id ";

			$placeholders = array( ':id' => $_GET['artikel'] );								

			$artikel = $dbConnectie->query( $queryActiveArtikel, $placeholders );

			$show = "show";

		}	
?>		



<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">

        <style> .show{display:block;} .hide{display:none;}</style>
    </head>
    <body>

    <div class="<?php echo $show ?>">

    <h1> artikel wijzigen </h1>

    <form action="artikel-wijzigen-process.php" method="post">

    <label> titel </label> <input type="text" name="titel" value="<?php echo $artikel[0]['titel'] ?>" >
    <label> artikel </label> <input type="textarea" name="artikel" value="<?php echo $artikel[0]['artikel'] ?>">
    <label> kernwoorden </label> <input type="textarea" name="kernwoorden" value="<?php echo $artikel[0]['kernwoorden'] ?>">
    <label> datum </label> <input type="date" name="datum" value="<?php echo $artikel[0]['datum'] ?>">

    <input type="hidden" name="id" value="<?php echo $artikel[0]['id'] ?>">

    <input type="submit" value="artikel opslaan" name="opslaan">

    </form>

    </div>





        
    </body>
</html>