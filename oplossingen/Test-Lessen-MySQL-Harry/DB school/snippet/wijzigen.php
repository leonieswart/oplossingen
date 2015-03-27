<?php if  ( isset( $_POST['wijzigen'] ) ) 
					
					{

						$querySelectGeschenken = "  SELECT *
													FROM geschenken ";	

						//de string wordt voorgeladen om te gebruiken				    
						$statement = $connectie->prepare($querySelectGeschenken);
						
						//de query wordt uitgevoerd
						$statement->execute();	

						$geschenken = array();

						while   ( $row = $statement->fetch(PDO::FETCH_ASSOC) )

								{
									$geschenken[]	=	$row;
								};

						$wijzigen = "show";		

				}

?>
