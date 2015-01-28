<?php

	function berekenKapitaal( $startKapitaal, $renteVoet, $aantalJaar )
	{
		static $teller 		= 	1;
		static $arrayDump 	= 	array();

		$winst 	= $startKapitaal * ( $renteVoet / 100);

		$totaal	=	$startKapitaal + $winst;

		$arrayDump[] = 'Na ' . $teller . ' jaar bedraagt het totaal bedrag ' . floor($totaal) . ' en is de winst voor dat jaar ' . floor($winst);

		if ($teller < $aantalJaar)
		{
			++$teller;
			berekenKapitaal( $totaal, $renteVoet, $aantalJaar );
		}
		
		return $arrayDump;
	}

	$startKapitaal 	=	100000;
	$renteVoet		=	8;
	$aantalJaar		=	10;

	$winstHans = berekenKapitaal( $startKapitaal, $renteVoet, $aantalJaar );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing recursive: deel1</title>
	</head>
	<body>
	
		<h1>Oplossing recursive: deel1</h1>

		<ul>
			<?php foreach($winstHans as $value): ?>
				<li><?php echo $value ?></li>
			<?php endforeach ?>
		</ul>
	</body>
</html>