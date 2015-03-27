<?php 
		if  ( !empty( $gebruikerSpecificID ) ) 

			{
			
			if  ($gebruikerSpecificID[0]['soort'] == "admin" )

								{
									//de MySQL code die de correcte gegevens uit de DB selecteert
									$queryInnerJoin = " SELECT gebruikers.gebruikersnaam, gebruikers.id, gebruikers.soort, geschenken.geschenk, geschenken.geschenkID
														FROM gebruikers
														INNER JOIN geschenkkeuze
														ON gebruikers.id = geschenkkeuze.gebruikersID
														INNER JOIN geschenken
														ON geschenkkeuze.geschenkID = geschenken.geschenkID ";


									//de string wordt voorgeladen om te gebruiken				    
									$statement = $connectie->prepare($queryInnerJoin);
									
									//de query wordt uitgevoerd
									$statement->execute();	

									$gebruikerAll = array();

									while   ( $row = $statement->fetch(PDO::FETCH_ASSOC) )

											{
												$gebruikerAll[]	=	$row;
											};

								}	

			}		
?> 