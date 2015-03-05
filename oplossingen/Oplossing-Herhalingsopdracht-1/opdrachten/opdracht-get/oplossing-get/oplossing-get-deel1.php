<?php

	$artikels = array(

						array ('titel' => 'Acht internetreuzen eisen beperkingen NSA-spionage',
								'datum' => '9 december 2013',
								'inhoud' => 'Acht belangrijke technologiebedrijven, zoals Google, Apple en Facebook, hebben in een open brief aan de Amerikaanse president Barack Obama veranderingen geëist in de manier waarop de overheid aan spionage doet. Ze willen het vertrouwen van het publiek in het internet herstellen.
De internetbedrijven coördineren voor het eerst een grote, gezamenlijke reactie op de onthullingen van klokkenluider Edward Snowden over de praktijken van de Amerikaanse geheime dienst NSA. Het gaat om Apple, Google, Microsoft, Facebook, Twitter, AOL, LinkedIn en Yahoo.

De brief is gepubliceerd op de website www.reformgovernmentsurveillance.com, maar die is momenteel niet beschikbaar. De bedrijven klagen aan dat de balans overgeheveld is in het voordeel van de overheid, ten koste van de vrijheid van het individu. ‘Een recht dat in de Grondwet staat. Het is tijd voor verandering.’

Volgens de internetreuzen bedreigt de NSA hun bedrijven, die lijden onder het dalende vertrouwen van het publiek in het internet. ‘Mensen gebruiken geen technologie die ze niet vertrouwen’, zei Brad Smith van Microsoft aan de krant The Guardian. ‘De regeringen hebben dat vertrouwen in gevaar gebracht en de regeringen moeten nu helpen om het te herstellen.’

‘Rapporten over overheidsspionage hebben aangetoond dat er nood is aan een meer onthullingen en nieuwe limieten aan de informatieverzameling van de overheid’, volgens Mark Zuckerberg, topman van Facebook. ‘De Amerikaanse overheid moet deze kans grijpen om hervormingen aan te vatten en zaken recht te zetten.’‘Big data’

Belangrijk is dat de bedrijven de hervormingsplannen van enkele politici in Washington nu steunen. Ze zijn het erover eens dat de NSA geen grote hoeveelheden data meer mag verzamelen zonder dat er een reden is om iemand te verdenken van terrorisme. Spionage mag enkel nog toegepast worden voor ‘specifieke, gekende gebruikers, en voor wettige doeleinden’.',
								'afbeelding' => 'artikel01.jpg',
								'afbeeldingBeschrijving' => 'Mark Zuckerberg naast het Facebook logo',
								),

						array ('titel' => 'Wilde weldoener stopt geld in brievenbussen',
								'datum' => '9 december 2013',
								'inhoud' => 'Bewoners van twee appartements­blokken in Koksijde-Bad hebben al drie dagen op rij geld in hun brievenbus aangetroffen. De politie van de zone Westkust is een onderzoek gestart. Volgens de politie gaat het niet om een promostunt van een plaatselijk immokantoor.
In residenties Adonis en Isaura aan de Kursaallaan in Koksijde-Bad staan de bewoners voor een raadsel. Al drie dagen lang vinden ze elke dag een biljet van 20 euro in hun brievenbus. In totaal is er zo ondertussen al meer dan 1.500 euro in de brievenbussen beland.

De onbekende man is alvast geen moderne Robin Hood: in de dure flats wonen doorgaans welgestelde burgers. De bewoners zelf vrezend dat het gaat om misdaadgeld; sommigen leggen zelfs een link met het geld uit de kluis in Zedelgem. ‘Mogelijk gaat het om iemand die ook geld opraapte en intussen weet dat de nummers van de bankbiljetten zijn genoteerd.’

Promostunt?

Het gerucht gaat de ronde dat het om een promostunt van immokantoor La Terrasse gaat. Al wil niemand dat daar echt bevestigen. \'Het klopt dat we jaarlijks een grote schattenjacht houden, waarbij we ongeveer 1.000 euro verstoppen in Koksijde en Oostduinkerke\', luidt het daar.

\'En het klopt ook dat we die schattenjacht dit jaar meer luister willen geven en een soort van hype willen creëren onder de lokale bevolking. Maar of die briefjes van 20 euro van ons zijn, kunnen we nog niet bevestigen.\'

Volgens de politie van de zone Westkust gaat het niet om een promostunt. \'Het immokantoor heeft er gewoon op ingespeeld\', zegt de woordvoerster. \'Wij hebben nu een onderzoek gestart om te achterhalen wat er precies gebeurd is. We willen ook nagaan of de biljetten niet vals of gestolen zijn. We roepen de betrokkenen op om de bewuste biljetten bij te houden en ons te verwittigen.',
								'afbeelding' => 'artikel02.jpg',
								'afbeeldingBeschrijving' => 'De residentie in Koksijde waar de weldoener aan het werk was.',
								),

						array ('titel' => 'Originele stukken Hergé geveild voor honderdduizenden euro’s',
								'datum' => '9 december 2013',
								'inhoud' => 'Twee originele stukken van Hergé zijn zondag voor honderdduizenden euro’s verkocht op een veiling die simultaan werd georganiseerd in Brussel en Parijs.
Een originele stripplaat in Chinese inkt, die Hergé maakte voor het album ‘De scepter van Ottokar’, ging onder de hamer voor 243.492 euro. Dat is volgens veilinghuis Millon een wereldrecord voor een plaat van Hergé. Een ander stuk, een reeks van zes prenten in Chinese inkt uit het album ‘De zonnetempel’, verwisselde van eigenaar voor 114.948 euro.

De stukken van Hergé maakten deel uit van een speciale verkoop gewijd aan originele platen. Vijfenveertig van de vijftig stukken vonden een nieuwe eigenaar, voor een totaalbedrag van 1,125 miljoen euro. Naast werk van de auteur van Kuifje werden ook stukken van onder meer Franquin, Vandersteen en Francois Schuiten geveild.',
								'afbeelding' => 'artikel03.jpg',
								'afbeeldingBeschrijving' => 'Kuifje en Bobby',
								),
					);

	//var_dump( $_GET );

	// Configuratie-variabelen
	$individueelArtikel		=	false;
	$nietBestaandArtikel	=	false;

	// Controleren of de get-variabele ID geset is om een individueel artikel op te halen
	if ( isset ( $_GET['id'] ) )
	{
		$id = $_GET['id'];

		// Controleren of de opgevraagde key (=id) bestaat in de array $artikels
		if ( array_key_exists( $id , $artikels ) )
		{
			$artikels 			= 	array( $artikels[$id] );
			$individueelArtikel	=	true;
		}
		else
		{
			$nietBestaandArtikel	=	true;
		}		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php if ( !$individueelArtikel ): ?>
		<title>Oplossing get: deel1</title>
	<?php elseif ( $nietBestaandArtikel ): ?>
		<title>Oplossing get: deel1 - Het artikel met id <?php echo $id ?> bestaat niet</title>
	<?php else: ?>
		<title>Oplossing get: deel1. Artikel: <?php echo $artikels[0]['titel'] ?></title>
	<?php endif ?>
		
	<style>
		body
		{
			font-family:"Segoe UI";
			color:#423f37;
		}

		.container
		{
			width:	1024px;
			margin:	0 auto;
		}

		img
		{
			max-width: 100%;
		}

		.multiple
		{
			float:left;
			width:288px;
			margin:16px;
			padding:16px;
			box-sizing:border-box;
			background-color:#EEEEEE;
		}

		.multiple:nth-child(3n+1)
		{
			margin-left:0px;
		}

		.multiple:nth-child(3n)
		{
			margin-right:0px;
		}

		.single img
		{
			float:right;
			margin-left: 16px;
		}


	</style>
</head>
<body>

	<h1>Oplossing get: deel1</h1>

	<pre>
		<?php //echo var_dump($artikels) ?>
	</pre>

	<?php if ( !$nietBestaandArtikel ): ?>
		<div class="container">
			<?php foreach ( $artikels as $id => $artikel ): ?>
				<article class="<?php echo ( !$individueelArtikel ) ? 'multiple': 'single' ; ?>">
					<h1><?php echo $artikel['titel'] ?></h1>
					<p><?php echo $artikel['datum'] ?></p>
					<img src="img/<?php echo $artikel['afbeelding'] ?>" alt="<?php echo $artikel['afbeeldingBeschrijving'] ?>">
					<p><?php echo ( !$individueelArtikel ) ? str_replace ( "\r\n", "</p><p>", substr( $artikel['inhoud'], 0, 50 ) ) . '...': str_replace ( "\r\n", "</p><p>",$artikel['inhoud'] ) ; ?></p>
					<?php if ( !$individueelArtikel ): ?>
						<a href="oplossing-get-deel1.php?id=<?php echo $id ?>">Lees meer</a>
					<?php endif ?>
				</article>
			<?php endforeach ?>
		</div>
	<?php else: ?>
		<p>Het artikel met id <?php echo $id ?> bestaat niet. Probeer een ander artikel.</p>
	<?php endif ?>

</body>
</html>