<?php
		
		session_start();

		var_dump($_FILES);
		var_dump($_POST);

		include("functionCreateThumb.php");

		if  ( isset( $_POST[ 'uploaden' ] ) ) 
	
			{
				// Fotovalidatie
		        if  ( $_FILES[ 'foto' ][ 'error' ] !== 4 )
			        
			        {
			            // 0 is geldig, meer dan 0 niet geldig
			            $isValid = 0;

			            // File size (2mb)
			            if  ( $_FILES[ 'foto' ][ 'size' ] > 2000000 )
				            
				            {
				                ++$isValid;
				            }


			            // Extensie (gif, png, jpeg)
			            if  ( $_FILES[ 'foto' ][ 'type' ] !== 'image/jpeg' &&
			                  $_FILES[ 'foto' ][ 'type' ] !== 'image/png'  &&
			                  $_FILES[ 'foto' ][ 'type' ] !== 'image/gif'      )

				            {
				                ++$isValid;
				            }

			            if  ( $isValid > 0 )
				            
				            {
				                $_SESSION['melding'] = "FOUT";
				            }

			            else

			            	{
			            		$uniekeNaam = mt_rand() . "-" . $_FILES["foto"]["name"];

			            		define( 'ROOT', dirname(__FILE__) );

								if  ( file_exists( ROOT . "/uploads/img/" . $uniekeNaam ) )
									
									{
										$uniekeNaam = mt_rand() . "-" . $_FILES["foto"]["name"];
										$_FILES["foto"]["name"] = $uniekeNaam;
										
									}
	
								$_FILES["foto"]["name"] = $uniekeNaam;

								move_uploaded_file($_FILES["foto"]["tmp_name"], ROOT . "/uploads/img/" . $_FILES["foto"]["name"]);

								$_SESSION['melding'] = "SUCCES";

								createThumb($_FILES["foto"]["name"], ROOT);

								$connectie = new PDO("mysql:host=localhost;dbname=opdracht-image-manipulation-gallery", "root", "");    

								include_once("classes/connectieClass.php");

								$dbConnectie = new Database($connectie);    

								$queryVoegFotoToe = " INSERT INTO gallery
														(	filename, 
						                                  	title,   
						                           	      	caption ) 
                             
					                                   VALUES 
					                                    ( 	:filename,
					                                     	:title, 
					                                      	:caption )";


								$placeholders = array(  ':filename' => ROOT . "/uploads/img/" . $_FILES["foto"]["name"], 
														':title' => $_POST['titel'], 
														':caption' => $_POST['caption']  );								

								$dbConnectie->queryInsert( $queryVoegFotoToe, $placeholders ); 


								header( 'location: ' . "photo-upload-form.php"  );


									
							}
					}

			}
										

?>