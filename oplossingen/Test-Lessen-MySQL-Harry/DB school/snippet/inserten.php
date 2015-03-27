<?php 			if  ( empty( $gebruikerSpecificID ) ) 
					
					{
						$notempty = "hide";

						$querySelectGebruiker = " 	SELECT id, gebruikersnaam
													FROM gebruikers
													WHERE gebruikersnaam = :gebruikersnaam ";

						//de string wordt voorgeladen om te gebruiken				    
						$statementSelectGebruiker = $connectie->prepare($querySelectGebruiker);

						$statementSelectGebruiker->bindValue(':gebruikersnaam'	, $_SESSION['gebruikersnaam']);

						//de query wordt uitgevoerd
						$statementSelectGebruiker->execute();	

						$gebruikerInsert = array();

						while   ( $row = $statementSelectGebruiker->fetch(PDO::FETCH_ASSOC) )

								{
									$gebruikerInsert[]	=	$row;
								};


						$querySelectGeschenken = " 	SELECT *
													FROM geschenken " ;

						//de string wordt voorgeladen om te gebruiken				    
						$statementSelectGeschenken = $connectie->prepare($querySelectGeschenken);

						//de query wordt uitgevoerd
						$statementSelectGeschenken->execute();	

						$geschenkenInsert = array();

						while   ( $row = $statementSelectGeschenken->fetch(PDO::FETCH_ASSOC) )

								{
									$geschenkenInsert[]	=	$row;
								};


						$insert = "show";


						if  ( isset( $_POST['opslaan'] ) ) 
					
							{

								//var_dump($_POST);

								$queryInsertGeschenkKeuze = " INSERT INTO geschenkkeuze 
																(gebruikersID, geschenkID)
																VALUES (:gebruikersid, :geschenkenid) ";


								//de string wordt voorgeladen om te gebruiken				    
								$statementInsertGeschenkkeuze = $connectie->prepare($queryInsertGeschenkKeuze);

								//prepared statementInsertGeschenkkeuze: placeholders een nieuwe waarde geven
								$statementInsertGeschenkkeuze->bindValue(':gebruikersid'			, $_POST['id']);
								$statementInsertGeschenkkeuze->bindValue(':geschenkenid'			, $_POST['geschenk'] );
								
								//de query wordt uitgevoerd
								$statementInsertGeschenkkeuze->execute();  

								header('location: ' . 'geschenken.php');	


							}		



							
								



						}	

				else

					{
						
						$notempty = "show";
					
					}			

		?>