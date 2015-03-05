<?php

	session_start();

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$connection 	=	 new PDO( 'mysql:host=localhost;dbname=phpoefening036', 'root', '' );

	if ( isset( $_POST['submit'] ) )
	{
		$image 	=	new Image( $_FILES['image']['name'], 
								$_FILES['image']['type'], 
								$_FILES['image']['tmp_name'], 
								$_FILES['image']['error'],
								$_FILES['image']['size'] );

		$isType = 	$image->validateType( array( "image/jpeg", 
										"image/png", 
										"image/gif" ) );

		$isSize	=	$image->validateSize( 2000000 );

		$hasError	=	$image->validateError( );

		if ( $isType && $isSize && !$hasError )
		{
			$isUploaded = $image->upload( 'uploads/img/' );

			if ( $isUploaded )
			{
				$hasThumbnail	=	$image->createThumbnail( 50, 50 );
			}

			$db = new Database( $connection );

			$galleryQuery	=	'INSERT INTO gallery
									( file_name, 
										title, 
										caption)
									VALUES ( :file_name, 
												:title, 
												:caption )';

			$galleryTokens	=	array( ':file_name' => $image->getCompleteNewFilename(),
										':title' => $_POST['title'],
										':caption' => $_POST['caption']);


			echo 'INSERT INTO gallery
									( file_name, 
										title, 
										caption)
									VALUES ( '.$image->getCompleteNewFilename().', 
												' .$_POST['title']. ', 
												' .$_POST['caption']. ' )';

			$gallery	=	 $db->query( $galleryQuery, $galleryTokens );

			if ( $gallery )
			{
				$message	=	new Message( 'success', 'De foto is succesvol aan de database toegevoegd.'  );
				header( 'location: phpoefening-036-a-galerij.php' );
			}
		}
		else
		{
			$message	=	new Message( 'error', 'Dit is geen geldig bestand. Probeer opnieuw.'  );
			header( 'location: phpoefening-036-a-uploaden-form.php' );
		}
	}
	var_dump( $_POST );
	var_dump( $_FILES );

?>