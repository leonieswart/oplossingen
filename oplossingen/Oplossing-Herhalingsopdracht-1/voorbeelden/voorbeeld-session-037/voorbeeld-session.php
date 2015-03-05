<?php 
	
	session_start();

	// Sessie verwijderen
	if (isset($_GET['session']))
	{
		if($_GET['session'] === 'destroy')
		{
			session_destroy();
			header('Location: voorbeeld-session.php'); // staat in voor refresh
		}
	}

	// Variabelen definiëren
	$leegWinkelmandje 	= 	true;
	$producten 			=	array();

	// Als de get-variabele product geset is, voeg de waarde van deze key dan toe aan de session-array
	if ( isset($_GET['product']) ) {
				
		$_SESSION['producten'][] = $_GET['product'];		
						
	}

	// Bevolk de variabele producten met de session producten-array als deze key al bestaat
	if ( isset( $_SESSION['producten'] ) )
	{
		$producten = $_SESSION['producten'];
	}
	
	// Tel of er iets in de productenvariabele zit, zoja, dan is het winkelmandje niet leeg
	if ( count( $producten ) > 0 )
	{
		$leegWinkelmandje = false;
	}


?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld sessions</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<style>
			.winkelrek
			{
				float:left;
				width:48%;
				padding: 0 1%;
			}

			.winkelmandje
			{

				float:right;
				width:48%;
				padding: 0 1%;
				background-color:lightgrey;
				border-radius:3px;
			}

			.winkelmandje h1, h2, h3
			{
				border-bottom:	1px solid whitesmoke;
			}
		</style>

		<h1>Voorbeeld session</h1>
		
			<section class="cf">
				<section class="winkelrek">
					<h2>Winkelrek</h2>
					<p>Klik op een product om het aan het winkelmandje toe te voegen</p>
					<ul>
						<li><a href="?product=tros-bananen">Tros bananen</a></li>
						<li><a href="?product=appelsienen">Appelsienen</a></li>
						<li><a href="?product=koffie">Koffie</a></li>
						<li><a href="?product=melk">Melk</a></li>
					</ul>
				</section>
				
				<section class="winkelmandje">
					
					<h2>Winkelmandje</h2>
				
						<h3>producten</h3>

						<?php if (!$leegWinkelmandje): ?>
							<ul>
								<?php foreach($producten as $product): ?>
									<li><?php echo $product ?></li>
								<?php endforeach ?>
							</ul>
						<?php else: ?>
							<p>Nog geen producten in het mandje!</p>
						<?php endif ?>

				</section>
			</section>
		

			<hr>	
				<a href="voorbeeld-session.php?session=destroy">Verlaat de winkel</a>
			<hr>

		<h2>dump van de $_SESSION-array (voor debugging)</h2>
		<pre><?php var_dump( $_SESSION ) ?></pre>

	</section>

</body>
</html>