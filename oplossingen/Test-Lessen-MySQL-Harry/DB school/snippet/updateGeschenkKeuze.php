<?php 

				if  ( isset( $_POST['opslaan'] ) ) 
					
					{				

						$queryUpdateGeschenkGebruiker = " 	UPDATE geschenkkeuze
															SET  geschenkID = :geschenkenid
															WHERE gebruikersID = :gebruikersid   "	;		

						//de string wordt voorgeladen om te gebruiken				    
						$statementUpdateKeuze = $connectie->prepare($queryUpdateGeschenkGebruiker);

						//prepared statementUpdateKeuze: placeholders een nieuwe waarde geven
						$statementUpdateKeuze->bindValue(':geschenkenid'			, $_POST['geschenk'] );
						$statementUpdateKeuze->bindValue(':gebruikersid'			, $_POST['id']);
						
						//de query wordt uitgevoerd
						$statementUpdateKeuze->execute();

					}


?>					