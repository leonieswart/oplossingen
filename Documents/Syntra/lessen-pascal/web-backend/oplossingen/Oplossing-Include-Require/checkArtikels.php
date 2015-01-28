	<?php


	$artikelBestaat = false;
  	$artikelBestaatNiet = false;

	//is de id geset in array GET?
	if ( isset ( $_GET['id'] ) )

	   { 

			//id = id in de GET array
			$id = $_GET['id'];

			// bestaat de id in array artikels?
			if ( array_key_exists( $id, $artikels ) ) 

				{
				    // JA dan is $artikelBestaat TRUE
				    $artikels = array($artikels[$id]);
				    $artikelBestaat = true;
				} 
				    
			else 

				{
				    // NEE dan is $artikelBestaatNiet TRUE
				    $artikelBestaatNiet = true;
				}
	      
	 	};


	 	?>