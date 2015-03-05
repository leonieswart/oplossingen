<?php

	$message			=	false;
	
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' ); // Connectie maken

		$orderColumn	=	'bieren.biernr';
		$order			=	'ASC';

		if ( isset( $_GET[ 'orderBy' ] ) )
		{
			$orderArray		=	explode( '-', $_GET[ 'orderBy' ] );
			$orderColumn	=	$orderArray[ 0 ];

			$order		=	$orderArray[ 1 ];
		}

		$orderQuery		=	'ORDER BY ' . $orderColumn . ' ' . $order;

		// Om ASC-ASC-ASC-ASC val tegen te gaan
		// Om DESC-DESC-DESC-DESC val tegen te gaan
		// OM het omgekeerde (asc tonen ipv desc) tegen te gaan
		// OM het omgekeerde (desc tonen ipv asc) tegen te gaan
		if ( isset( $_GET[ 'orderBy' ] ) )
		{
			$order = ( $orderArray[ 1 ] != 'DESC') ? 'DESC' 	:	'ASC';
		}

		$query	=	'SELECT bieren.biernr,
							bieren.naam,
							brouwers.brnaam,
							soorten.soort,
							bieren.alcohol 
						FROM bieren 
							INNER JOIN brouwers
							ON bieren.brouwernr	= brouwers.brouwernr
							INNER JOIN soorten
							ON bieren.soortnr = soorten.soortnr '
							. $orderQuery;

		$bierenQuery	=	query( $db, $query  ) ;

		$bierenFieldnames		= 	$bierenQuery[ 'fieldnames' ];
		$bierenCleanFieldnames	= 	processFieldnames( $bierenFieldnames );
		$bieren					=	$bierenQuery[ 'data' ];

	}
	catch ( PDOException $e )
	{
		$message['type']	=	'error';
		$message['text']	=	'De connectie is niet gelukt.';
	}
	
	function query( $db, $query, $tokens = false )
	{
		$statement = $db->prepare( $query );
		
		if ( $tokens )
		{
			foreach ( $tokens as $token => $tokenValue )
			{
				$statement->bindParam( $token, $tokenValue );
			}
		}

		$statement->execute();

		/*  Veldnamen ophalen*/
		$fieldnames	=	array();

		for ( $fieldNumber = 0; $fieldNumber < $statement->columnCount(); ++$fieldNumber )
		{
			$fieldnames[]	=	$statement->getColumnMeta( $fieldNumber )['name'];
		}

		/*De brouwer-data ophalen*/
		$data	=	array();

		while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
		{
			$data[]	=	$row;
		}

		$returnArray['fieldnames']	=	$fieldnames;
		$returnArray['data']		=	$data;

		return $returnArray;
	}

	function processFieldnames( $array )
	{

		$cleanFieldnames	=	array();

		foreach( $array as $value )
		{
			switch( $value )
			{
				case "biernr":
					$name	=	"Biernummer (PK)";
					break;
				case "naam":
					$name	=	"Bier";
					break;
				case "brnaam":
					$name	=	"Brouwer";
					break;
				case "soort":
					$name	=	"Soort";
					break;
				case "alcohol":
					$name	=	"Alcoholpercentage";
					break;
				default:
					$name	=	$value;
			}

			$cleanFieldnames[ ]	=	$name;
		}

		return $cleanFieldnames;
	}
	

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing oefening 027 - a</title>
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

			.delete-button
			{
				background-color	:	transparent;
				border				:	none;
				padding				:	0px;
				cursor				:	pointer;
			}

			.confirm-delete
			{
				background-color	:	red;
				color				: 	white;
			}

			.order a
			{
				padding-right:20px;
			}

			.ascending a
			{
				background:	no-repeat url('icon-asc.png') right ;
			}

			.descending a
			{
				background:	no-repeat url('icon-desc.png') right;
			}

			.selected
			{
				background-color	:	lightgreen;
			}
		</style>
	</head>
<body>

	<h1>Oplossing oefening 027 - a</h1>

	<?php if ( $message ): ?>
		<div class="modal <?= $message[ "type" ] ?>">
			<?= $message['text'] ?>
		</div>
	<?php endif ?>	
	

	<table>
		
		<thead>
			<tr>
				<?php foreach ($bierenCleanFieldnames as $key => $cleanFieldname): ?>
					<th class="order <?= ( $order == 'ASC' && $orderColumn == $bierenFieldnames[ $key ] ) ? 'descending' : 'ascending' ?> <?= ( $orderColumn == $bierenFieldnames[ $key ] ) ? 'selected' : '' ?>"><a href="<?= $_SERVER['PHP_SELF'] ?>?orderBy=<?= $bierenFieldnames[ $key ] ?>-<?= $order ?>"><?= $cleanFieldname ?></a></th>
				<?php endforeach ?>
				<th></th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($bieren as $key => $brouwer): ?>
				<tr class="<?= ( ($key + 1) % 2 == 0 ) ? 'even' : '' ?>">
					<?php foreach ($brouwer as $value): ?>
						<td><?= $value ?></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
			
		</tbody>

	</table>

</body>
</html>