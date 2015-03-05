<?php
	
	//var_dump($_GET);

	// Configuratie-variabelen
	$referenceGuide = 	false;
	$voorbeelden 	=	false;
	$oplossingen 	=	false;
	$search 		=	false;

	if ( isset ( $_GET['link'] ) ) 
	{

		switch ( $_GET['link'] )
		{
			case 'reference-guide':
				$referenceGuide 	= 	true;
				break;

			case 'voorbeelden':

				$voorbeelden 	= 	true;
				$map			=	'voorbeelden';
				$bestandenArray 	= 	getBestanden( $map );

				break;

			case 'oplossingen':
			
				$oplossingen 	=	true;
				$map			=	'oplossingen';
				$bestandenArray 	= 	getBestanden( $map );

				break;
		}
	}

	if ( isset ( $_GET['search-query'] ) ) 
	{
		// Zet de configuratie-variabele op true zodat we deze in de HTML kunnen opvangen
		$search = true;

		$voorbeeldenBestanden = getBestanden( 'voorbeelden' );
		$oplossingenBestanden = getBestanden( 'oplossingen' );

		$alleBestanden	=	array_merge( $voorbeeldenBestanden, $oplossingenBestanden );

		$resultaten	=	array();
		$zoekString =	$_GET['search-query'];

		foreach ( $alleBestanden as $bestand )
		{
			$zoekStringGevonden = strpos( $bestand['bestandsNaam'], $zoekString );

			if ( $zoekStringGevonden !== false )
			{
				$resultaten[]	=	$bestand;
			}
		}

		//var_dump( $resultaten );

		$bestandenArray = $resultaten;
	}

	function getBestanden( $map )
	{
		
		// Haal de bestanden op uit de opgegeven map
		$bestandenArray = scandir ('../' . $map . '/');

		$multiDimensioneleBestandenArray	=	array();

		// eerste twee keys verwijderen (bevatten '.' en '..')
		array_shift( $bestandenArray );
		array_shift( $bestandenArray );

		foreach ( $bestandenArray as $key => $bestand )
		{
			$tempArray = array();

			$tempArray['map']			=	$map;
			$tempArray['bestandsNaam']	=	$bestand;
			$tempArray['bestandsNaamEnFolder']	=	'../' . $map . '/' . $bestand;
			
			$multiDimensioneleBestandenArray[$key] = $tempArray;
		}

		return $multiDimensioneleBestandenArray;
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP oefening 019 - oplossing</title>
		<style>
			iframe
			{
				width:1000px;
				height:750px;
			}
		</style>
	</head>
	<body>
		<ul>
			<li><a href="oplossing-herhalingsopdracht-01-deel1-uitbreidingen.php?link=reference-guide">Reference guide</a></li>
			<li><a href="oplossing-herhalingsopdracht-01-deel1-uitbreidingen.php?link=voorbeelden">Voorbeelden</a></li>
			<li><a href="oplossing-herhalingsopdracht-01-deel1-uitbreidingen.php?link=oplossingen">Oplossingen</a></li>
		</ul>
		<form action="oplossing-herhalingsopdracht-01-deel1-uitbreidingen.php" method="GET">

			<label id="search-query">Zoek naar:</label>
			<input type="text" name="search-query" id="search-query">

			<input type="submit">

		</form>

		<?php if ( $referenceGuide ): ?>
			<iframe src="../web-backend-inleiding.pdf"></iframe>
		<?php endif ?>

		<?php if ( $voorbeelden || $oplossingen || $search ): ?>
			<ul>
				<?php foreach ( $bestandenArray as $bestand ): ?>
					<li><a href="<?php echo $bestand['bestandsNaamEnFolder'] ?>"><?php echo $bestand['bestandsNaam'] ?></a></li>
				<?php endforeach ?>
			</ul>
		<?php endif ?>

	</body>
</html>