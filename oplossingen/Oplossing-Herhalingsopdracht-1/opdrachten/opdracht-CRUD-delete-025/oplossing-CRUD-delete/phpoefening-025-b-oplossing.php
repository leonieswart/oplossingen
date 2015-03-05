<?php

	$message		=	false;
	$deleteConfirm	=	false;
	$deleteId		=	false;

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' ); // Connectie maken

		if ( isset( $_POST[ 'confirm' ] ) )
		{
			$deleteConfirm	=	true;
			$deleteId		=	$_POST[ 'confirm' ];
		}

		if ( isset( $_POST['delete'] ) )
		{
			$deleteQuery	=	'DELETE FROM brouwers
									WHERE brouwernr = :brouwernr';

			$deleteStatement = $db->prepare( $deleteQuery );

			$deleteStatement->bindParam( ':brouwernr', $_POST['delete'] );

			$isDeleted 	=	$deleteStatement->execute();

			if ( $isDeleted )
			{
				$message['type']	=	'success';
				$message['text']	=	'Deze record is succesvol verwijderd.';
			}
			else
			{
				$message['type']	=	'error';
				$message['text']	=	'Deze record kon niet verwijderd worden. Reden: ' . $deleteStatement->errorInfo()[2];
			}
		}

		$brouwersQuery	=	'SELECT * 
								FROM brouwers';

		$brouwersStatement = $db->prepare( $brouwersQuery );
		
		$brouwersStatement->execute();

		/*  Veldnamen ophalen*/
		$brouwersFieldnames	=	array();

		for ( $fieldNumber = 0; $fieldNumber < $brouwersStatement->columnCount(); ++$fieldNumber )
		{
			$brouwersFieldnames[]	=	$brouwersStatement->getColumnMeta( $fieldNumber )['name'];
		}

		/*De brouwer-data ophalen*/
		$brouwers	=	array();

		while( $row = $brouwersStatement->fetch( PDO::FETCH_ASSOC ) )
		{
			$brouwers[]	=	$row;
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
		<title>Oplossing oefening 025 - a</title>
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
		</style>
	</head>
<body>

	<h1>Oplossing oefening 025 - a</h1>

	<?php if ( $message ): ?>
		<div class="modal <?= $message[ "type" ] ?>">
			<?= $message['text'] ?>
		</div>
	<?php endif ?>	

	<?php if ( $deleteConfirm ): ?>
		<div>
			Bent u zeker dat u deze record wilt verwijderen?
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

				<button type="submit" name="delete" value="<?= $deleteId ?>">
					Absoluut zeker!
				</button>

				<button type="submit">
					Ongedaan maken
				</button>

			</form>
		</div>
	<?php endif ?>
	
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		<table>
			
			<thead>
				<tr>
					<th>#</th>
					<?php foreach ($brouwersFieldnames as $fieldname): ?>
						<th><?= $fieldname ?></th>
					<?php endforeach ?>
					<th></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($brouwers as $key => $brouwer): ?>
					<tr class="<?= ( ($key+1)%2 == 0 ) ? 'even' : ''  ?> <?= ( $brouwer['brouwernr'] === $deleteId ) ? 'confirm-delete' : ''  ?>">
						
						<td><?= ++$key ?></td>

						<?php foreach ($brouwer as $value): ?>
							<td><?= $value ?></td>
						<?php endforeach ?>
						<td>
							<!-- http://stackoverflow.com/questions/7935456/input-type-image-submit-form-value -->
							<button type="submit" name="confirm" value="<?= $brouwer['brouwernr'] ?>" class="delete-button">
								<img src="icon-delete.png" alt="Delete button">
							</button>
						</td>
					</tr>
				<?php endforeach ?>
				
			</tbody>

		</table>
	</form>

</body>
</html>