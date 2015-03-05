<?php


	# URL is de link naar de server (meestal de domeinnaam)
	define('URL', 'http://' . dirname ( dirname( $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] ) ) );

	# ROOT is het path op de server
	define('APPLICATION_ROOT', dirname ( dirname ( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR);
	

	# Deze functie kan veel korter mbv recursieve functie, maar voor het leesbaar te houden is het zo genoteerd
	# Zoekt in de system-folder naar de juiste bestanden en laadt deze in
	function __autoload( $className )
	{

		if ( file_exists( APPLICATION_ROOT . 'library/' . $className . '-class.php' ) )
		{
			include( APPLICATION_ROOT . 'library/' . $className . '-class.php' );
		}
		elseif ( file_exists( APPLICATION_ROOT . 'application/models/' . $className . '-class.php' ) )
		{
			include( APPLICATION_ROOT . 'application/models/' . $className . '-class.php' );
		}
		elseif ( file_exists( APPLICATION_ROOT . 'application/views/' . $className . '-class.php' ) )
		{
			include( APPLICATION_ROOT . 'application/views/' . $className . '-class.php' );
		}
		elseif ( file_exists( APPLICATION_ROOT . 'application/controllers/' . $className . '-class.php' ) )
		{
			include( APPLICATION_ROOT . 'application/controllers/' . $className . '-class.php' );
		}
	}

	var_dump( $_GET );

	if ( isset ( $_GET['hook'] ) )
	{
		$rawHookString 	=	trim( $_GET['hook'], '/' );
		$rawHookArray	=	explode('/', $rawHookString);

		var_dump($rawHookArray);

		$controller = $rawHookArray[ 0 ];
		array_shift( $rawHookArray );

		$controllerInstance = new $controller( $rawHookArray );
	}
	else
	{
		// wanneer de get-variabele hook niet geset is, laad dan standaard de pages-controller in
		$controllerInstance = new Pages( array( 'home' ) );
	}

		
?>