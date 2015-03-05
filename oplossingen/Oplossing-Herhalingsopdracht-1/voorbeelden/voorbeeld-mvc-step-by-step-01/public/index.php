<?php 

	# Niet belangrijk voor de applicatie, enkel om makkelijker voorbeeld aan te tonen
	$path = 'http://' . dirname ( dirname( $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] ) );
	$rawHookArrayPlaceholder	=	false;

	# Verwerken van de hook
	if ( isset ($_GET['hook'] ) )
	{
		# Soms wordt er een trailing / geschreven, soms niet
		# Zorg ervoor dat er nooit een trailing / staat
		# Dit zorgt ervoor dat er geen extra array-key met een lege value wordt aangemaakt -> zie explode
		$rawHookString 	=	trim( $_GET['hook'], '/' );
		
		# Maak een array op basis van de mappenstructuur van de url met "/" als delimiter
		$rawHookArray	=	explode( '/', $rawHookString );

		$rawHookArrayPlaceholder 	=	$rawHookArray;

		# Eerste deel is altijd de controller (conventie)
		$controller = $rawHookArray[ 0 ];

		# Deze controller wordt geunset uit de array nadat het is opgevangen in een variabele
		array_shift( $rawHookArray );

		# De rest van de rawHook wordt meegegeven als argument in de instantie van de controller (zie stap 2)
	}

		
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van MVC: step 01</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van MVC: step 01</h1>

		<p>Surf naar de volgende urls en bekijk de output:</p> 

		<ul>
			<li><a href="<?= $path ?>/artikels/"><?= $path ?>/artikels</a></li>
			<li><a href="<?= $path ?>/artikels/binnenland/"><?= $path ?>/artikels/binnenland/</a></li>
			<li><a href="<?= $path ?>/artikels/binnenland/helft-belgie-valt-zonder-stroom/"><?= $path ?>/artikels/binnenland/helft-belgie-valt-zonder-stroom/</a></li>
			<li><a href="<?= $path ?>/gebruiker/pascal"><?= $path ?>/gebruiker/pascal</a></li>
		</ul>

		<h2>var_dump van $_GET-variabele</h2>

		<?php var_dump( $_GET ) ?>

		<h2>var_dump van Hook-array</h2>

		<?php if ( $rawHookArrayPlaceholder ): ?>

			<p>Controller: <?= $controller ?></p>

			<h3>Voor unset</h3>
			<?php var_dump( $rawHookArrayPlaceholder ) ?>

			<h3>Na unset</h3>
			<?php var_dump( $rawHookArray ) ?>

		<?php else: ?>

			<p>Hook array nog niet geset (surf naar bovenstaande urls)</p>

		<?php endif ?>

		<h2>Toegankelijkheid van PHP-bestand</h2>

		<p>Probeer naar <a href="<?= $path ?>/system/test.php"><?= $path ?>/system/test.php</a> te surfen. Krijg je de output van het bestand te zien?</p>
	
	</section>

</body>
</html>