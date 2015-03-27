<?php           //de MySQL code die de correcte gegevens uit de DB selecteert
				$queryInnerJoin = " SELECT gebruikers.gebruikersnaam, gebruikers.id, gebruikers.soort, geschenken.geschenk, geschenken.geschenkID
									FROM gebruikers
									INNER JOIN geschenkkeuze
									ON gebruikers.id = geschenkkeuze.gebruikersID
									INNER JOIN geschenken
									ON geschenkkeuze.geschenkID = geschenken.geschenkID
									WHERE gebruikers.gebruikersnaam = :gebruikersnaam ";


				//de string wordt voorgeladen om te gebruiken				    
				$statement = $connectie->prepare($queryInnerJoin);

				$statement->bindValue(':gebruikersnaam'	, $_SESSION['gebruikersnaam']);

				
				//de query wordt uitgevoerd
				$statement->execute();	

				$gebruikerSpecificID = array();

				while   ( $row = $statement->fetch(PDO::FETCH_ASSOC) )

						{
							$gebruikerSpecificID[]	=	$row;
						};

?> 