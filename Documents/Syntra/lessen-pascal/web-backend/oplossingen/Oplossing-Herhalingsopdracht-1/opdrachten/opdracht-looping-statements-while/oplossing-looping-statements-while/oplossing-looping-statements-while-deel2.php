<?php

	$boodschappenlijstje	=	array( "bananen",
										"melk",
										"vanille-ijs",
										"chocola",
										"cacao-poeder" );
?>
	

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Oplossing while: deel2</title>
    </head>
    <body>
		
		<h1>Oplossing while: deel2</h1>

		<h2>Boodschappenlijstje voor Chocolate Banana Milkshake</h2>

		<ul>
			<?php 
				$boodschapCounter 		= 	0;
			?>
			<?php while( isset( $boodschappenlijstje [ $boodschapCounter ] ) ):  ?>
				
				<li><?= $boodschappenlijstje [ $boodschapCounter ] ?></li>
				

				<?php $boodschapCounter++ ?>
			<?php endwhile ?>
		</ul>

    </body>
</html>