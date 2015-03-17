<?php 

include("checkLoginOk.php");


	if  ( isset( $_POST['toevoegenDef'] ) ) 
		
		{

			include_once("classes/connectieClass.php");
			$connectie = new PDO("mysql:host=localhost;dbname=opdracht-crud-cms", "root", "");  

			$dbConnectie = new Database($connectie);

			 //query om gegevens in de DB te steken
             $queryInsertArtikel = " INSERT INTO artikels
                                     	(titel, 
                                      	artikel,   
                                      	kernwoorden,
                                      	datum ) 
                             
                                    VALUES 
                                    	(:titel,
                                     	 :artikel, 
                                     	 :kernwoorden,
                                     	 :datum )";

            //waarde toekennen aan vervangers van placeholders in bindvalue
            $titel         	=   $_POST['titel'];
            $artikel        =   $_POST['artikel'];
            $kernwoorden    =   $_POST['kernwoorden'];
            $datum         	=   $_POST['datum']; 

			//placeholders in array steken voor Class    
			$placeholders = array( ':titel' => $titel, ':artikel' => $artikel, ':kernwoorden' => $kernwoorden, ':datum' => $datum);

			$statement = $dbConnectie->queryInsert( $queryInsertArtikel, $placeholders );

			header( 'location: ' . "artikels-overzicht.php"  );

					

		}






?>