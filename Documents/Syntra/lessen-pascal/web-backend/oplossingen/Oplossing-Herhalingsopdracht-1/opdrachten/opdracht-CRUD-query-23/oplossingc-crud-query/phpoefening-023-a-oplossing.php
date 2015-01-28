<?php


	$message	=	false;

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' ); // Connectie maken

		$queryString	=	'SELECT *
								FROM bieren 
								INNER JOIN brouwers
								ON bieren.brouwernr = brouwers.brouwernr
								WHERE bieren.naam LIKE "Du%"
								AND brouwers.brnaam LIKE "%a%"';

		$statement = $db->prepare( $queryString );

		$statement->execute( );
		

		/*for ( $i = 0; $i < $statement->columnCount(); $i++ )
		{
			var_dump( $statement->getColumnMeta( $i )['name'] );
		}*/


		$bieren	=	array();

		while ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
		{
			$bieren[] 	=	$row;
		}

		$columnNames	=	array();
		$columnNames[]	=	'Biernummer';

		foreach( $bieren[0] as $key => $bier )
		{
			$columnNames[  ]	=	$key;
		}

	}
	catch ( PDOException $e )
	{
		$message['type']	=	'error';
		$message['text']	=	'De connectie is niet gelukt.';
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing oefening 023 - a</title>
		<style>
			.modal
			{
				padding			:	6px;
				border-radius	:	3px;
			}

			.success
			{
				background-color:lightgreen;
			}

			.error
			{
				background-color:red;
			}

			.even
			{
				background-color:lightgrey;
			}
		</style>
	</head>
<body>


	<?php if ( $message ): ?>
		<div class="modal <?= $message[ "type" ] ?>">
			<?= $message['text'] ?>
		</div>
	<?php endif ?>

	<table>
		
		<thead>
			<tr>
				<?php foreach ($columnNames as $columnName): ?>
					<th><?= $columnName ?></th>
				<?php endforeach ?>
			</tr>
		</thead>

		<tbody>
		
			<?php foreach ($bieren as $key => $bier): ?>
				<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'even' : '' ?>">
					<td><?= ($key + 1) ?></td>
					<?php foreach ($bier as $value): ?>
						<td><?= $value ?></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
			
		</tbody>

	</table>

</body>
</html>