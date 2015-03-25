<?php
$message = "";
$uniekeNaam = "profile-placeholder";

if  ( isset( $_POST[ 'uploaden' ] ) ) 
	
	{
		// Fotovalidatie
        if  ( $_FILES[ 'foto' ][ 'error' ] !== 4 )
	        
	        {
	            // 0 is geldig, meer dan 0 niet geldig
	            $isValid = 0;

	            // File size (2mb)
	            if  ( $_FILES[ 'foto' ][ 'size' ] > 5000000 )
		            
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
		                $message = "Het bestand is niet geldig, probeer een ander bestand" ;
		            }

	            else

	            	{
			
						// variabele $origineleAfbeelding bevat de naam.extensie afbeelding
						$origineleAfbeelding	=	$_FILES[ 'foto' ][ 'name' ];

						// dmv pathinfo achterhalen we de bestandsnaam (zonder extensie) en de extensie
						$afbeeldingOnderdeel	=	pathinfo($origineleAfbeelding);
						$bestandsnaam			=	$afbeeldingOnderdeel['filename'];
						$extension				=	$afbeeldingOnderdeel['extension'];



						// we bepalen de afmetingen van de verkleinde versie
						$thumbAfmetingen['w']	=	100;
						$thumbAfmetingen['h']	=	100;

						// we halen de breedte en hoogte op van de originele afbeelding via getimagesize
						// via list zetten we de width en height in de juiste volgorde
						list($width, $height)	=	getimagesize($origineleAfbeelding); 		

						// we controleren om welke extensie het gaat en voeren de bijpassende imagecreatefrom* uit
						// de imagecreatefrom-functie maakt een afbeelding van de opgegeven string
						switch  ($extension)
								
								{
									case ('jpg'):
									case ('jpeg'): 
										$source 	= 	imagecreatefromjpeg($origineleAfbeelding);
										break;
										
									case ('png'):
										$source 	=	imagecreatefrompng($origineleAfbeelding);
										break;

									case ('gif'):
										$source 	=	imagecreatefromgif($origineleAfbeelding);
										break;
								}

						// variabele $thumb wordt onze nieuwe canvas. We creeeren er een ter grootte van de opgegeven afmetingen (zie bovenaan)
						// de functie imagecreatetruecolor geeft een zwart vlak weer met de opgegeven afmetingen		
						$thumb 	=	imagecreatetruecolor($thumbAfmetingen['w'], $thumbAfmetingen['h']);

						// wa gaan na of de originele afbeelding een landscape of portrait of square is
						if  ( $width > $height)
							
							{
								$soort = "landscape";

								$maxVierkant = $height;

								$startPositieX = $width / 2 - $height / 2;
								$startPositieY = 0;

								$cropArray = array( 'x' => $startPositieX, 
													'y' => $startPositieY, 
													'width' => $maxVierkant, 
													'height'=> $maxVierkant );

								//image croppen naar grootst mog vierkant
								$source = imagecrop($source, $cropArray);
							}

						elseif ( $width < $height) 

							{
								$soort = "portait";
								
								$maxVierkant = $width;

								$startPositieX = 0;
								$startPositieY = $height / 2 - $width / 2;
								
								$cropArray = array( 'x' => $startPositieX, 
													'y' => $startPositieY, 
													'width' => $maxVierkant, 
													'height'=> $maxVierkant );

								//image croppen naar grootst mog vierkant
								$source = imagecrop($source, $cropArray);
							}

						elseif ( $width = $height) 

							{
								$soort = "square";
								$maxVierkant = $width;
							}



						// we kopieren de originele afbeelding naar de thumb en resizen deze ondertussen naar de opgegeven afmetingen

						// imagecopyresized( de destination, de canvas van originele afbeelding, destination x-positie, destination y-positie (waar we het gaan plaatsen in de nieuwe canvas), originele x-positie, originele y-positie (vanaf waar we beginnen met kopiëren vanuit de oude canvas), destination width, destination height, originele width, originele height )
						imagecopyresized($thumb, $source, 0,0,0,0, $thumbAfmetingen['w'],$thumbAfmetingen['h'], $maxVierkant, $maxVierkant);



						// we slaan het nieuwe canvas op.

						// image*( de nieuwe afbeelding resource (die voortkomt uit een imagecreatefrom*), de nieuwe naam waaronder je de img opslaat)
						$achtervoegsel = "-thumb." . "jpeg";

						define( 'ROOT', dirname(__FILE__) );

						$uniekeNaam = mt_rand() . "-" . $bestandsnaam;

						$resized 	= 	imagejpeg($thumb, ROOT . "/img/" . $uniekeNaam . $achtervoegsel , 100);

						$message = "foto gewijzigd";
						
					}
			}
	}		

?>





<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>

    <div> <?php echo $message ?> </div>
        

        <h1> Thumbnail genereren </h1>

        <form method='post' action="index.php" enctype="multipart/form-data">

			<img src="img/<?php echo $uniekeNaam ?>-thumb.jpeg" alt="foto">

	        <label>Foto kiezen</label>

	        <p><input type="file" name="foto"></p>
	        
	        <p><input type="submit" value="Uploaden" name="uploaden"></p>

        </form>
    </body>
</html>