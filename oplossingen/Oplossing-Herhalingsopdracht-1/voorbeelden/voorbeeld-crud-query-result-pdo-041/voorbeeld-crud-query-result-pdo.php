<?php

	$messageContainer	=	'';

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken

		// Een query klaarmaken. 
		$queryString = 'SELECT * 
						FROM bieren';

		$statement = $db->prepare($queryString);

		// Een query uitvoeren
		$statement->execute();

		$fetchAssoc = array();

		while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
		{
			$fetchAssoc[]	=	$row;
		}

		// Een query uitvoeren
		$statement->execute();

		$fetchRow = array();

		while ( $row = $statement->fetch() )
		{
			$fetchRow[]	=	$row;
		}

		$statement->execute(); // (data_seek werkt niet voor elke db, dus beter statement opnieuw uitvoeren

		$fetchBoth = array();

		while ( $row = $statement->fetch(PDO::FETCH_BOTH) )
		{
			$fetchBoth[]	=	$row;
		}

	}
	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van database resultaten ophalen (PDO)</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van database resultaten ophalen (PDO)</h1>	

		<p><?php echo $messageContainer ?></p>


		<h2>fetch assoc van resultaat</h2>
		<ul>
			<?php foreach ($fetchAssoc as $row): ?>
				<li><?php echo $row['naam'] ?>: <?php echo $row['alcohol'] ?> promille</li>
			<?php endforeach ?>
		</ul>

		<h2>fetch row van resultaat</h2>
		<ul>
			<?php foreach ($fetchRow as $row): ?>
				<li><?php echo $row[1] ?>: <?php echo $row[4] ?> promille</li>
			<?php endforeach ?>
		</ul>

		<h2>fetch both (= fetch_array() ) van resultaat</h2>
		<ul>
			<?php foreach ($fetchBoth as $row): ?>
				<li><?php echo $row['naam'] ?>: <?php echo $row['4'] ?> promille</li>
			<?php endforeach ?>
		</ul>

	</section>
		
</body>
</html>