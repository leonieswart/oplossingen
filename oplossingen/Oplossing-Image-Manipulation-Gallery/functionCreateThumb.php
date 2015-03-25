<?php


	function createThumb($bestand, $ROOT)

	{

		var_dump($bestand);

		$afbeeldingOnderdeel	=	pathinfo($bestand);
		$bestandsnaam			=	$afbeeldingOnderdeel['filename'];
		$extension				=	$afbeeldingOnderdeel['extension'];

		var_dump($afbeeldingOnderdeel);
		var_dump($bestandsnaam);

		// we bepalen de afmetingen van de verkleinde versie
		$thumbAfmetingen['w']	=	50;
		$thumbAfmetingen['h']	=	50;

		// we halen de breedte en hoogte op van de originele afbeelding via getimagesize
		// via list zetten we de width en height in de juiste volgorde
		list($width, $height)	=	getimagesize(ROOT . "/uploads/img/" . $bestand); 
						
		// we controleren om welke extensie het gaat en voeren de bijpassende imagecreatefrom* uit
		// de imagecreatefrom-functie maakt een afbeelding van de opgegeven string
		switch  ($extension)
								
				{
					case ('jpg'):
					case ('jpeg'):
					$source 	= 	imagecreatefromjpeg(ROOT . "/uploads/img/" . $bestand);
					break;
										
					case ('png'):
					$source 	=	imagecreatefrompng(ROOT . "/uploads/img/" . $bestand);
					break;

					case ('gif'):
					$source 	=	imagecreatefromgif(ROOT . "/uploads/img/" . $bestand);
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

		elseif  ( $width < $height)
							
			{
				$soort = "portrait";

				$maxVierkant = $width;

				$startPositieX = $height / 2 - $width / 2;
				$startPositieY = 0;

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

		$resized 	= 	imagejpeg($thumb, $ROOT . "/uploads/img/thumbs/" . $bestandsnaam . $achtervoegsel , 100);	

	}
