<?php

	session_start();

	if (isset($_SESSION['notification'])) {
		$message['type'] = $_SESSION['notification']['type'];
		$message['body'] = $_SESSION['notification']['body'];

		unset($_SESSION['notification']);
	}

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=voorbeeld-security-tracking-details', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken

		// Een query klaarmaken. 
		$queryString = 'SELECT *
							FROM artikels
							WHERE is_active = 1';

		$statement = $db->prepare($queryString);

		// Een query uitvoeren
		$statement->execute();

		$fetchAssoc = array();

		while ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
		{
			$fetchAssoc[]	=	$row;
		}

	}
	catch ( PDOException $e )
	{
		$message['type'] = 'error';
		$message['body'] = 'Er ging iets mis met de connectie van de database. ' . $e->getMessage();
	}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van tracking details</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van tracking details</h1>

		<p><a href="voorbeeld-security-tracking-details-artikel-toevoegen-form.php">Voeg een artikel toe</a></p>

		<h2>Overzicht van alle artikels</h2>

		<?php if (isset($message)): ?>
			<div class="modal <?php echo $message['type'] ?>">
				<?php echo $message['body'] ?>
			</div>
		<?php endif ?>

		<ul>
			<?php foreach ( $fetchAssoc as $row): ?>

					<li>
						<ul>
						<?php foreach ( $row as $keyname => $value): ?>
							<li>
								<?php echo $keyname ?>: <?php echo $value ?>								
							</li>
						<?php endforeach ?>
						</ul>
						<a href="voorbeeld-security-tracking-details-artikel-verwijderen.php?artikel=<?= $row['id'] ?>">Verwijder artikel</a>
					</li>
				
			<?php endforeach ?>
		</ul>

	</section>

</body>
</html>