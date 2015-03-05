<?php
	session_start();

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$connection 	=	 new PDO( 'mysql:host=localhost;dbname=phpoefening036', 'root', '' );
	
	$message	=	Message::getMessage();

	$db	=	new Database( $connection );

	$galleryQuery	=	'SELECT * 
							FROM gallery
							WHERE is_archived = 0';

	$afbeeldingen	=	$db->query( $galleryQuery )['data'];

?>

<!DOCTYPE html>
	<html>
	<head>
		<style>
			.modal
			{
				margin:5px 0px;
				padding:5px;
				border-radius:5px;
			}
			
			.success
			{
				color:#468847;
				background-color:#dff0d8;
				border:1px solid #d6e9c6;
			}
			
			.error
			{
				color:#b94a48;
				background-color:#f2dede;
				border:1px solid #eed3d7;
			}
			
			.error p
			{
				font-style:italic;
			}
			
			.warning
			{
				color:#3a87ad;
				background-color:#d9edf7;
				border:1px solid #bce8f1;
			}

		</style>
		<link rel="stylesheet" type="text/css" href="public/css/global.css">
	</head>
	<body>	

		<h1>Fotogalerij</h1>

		<a href="phpoefening-036-a-uploaden-form.php">Een foto toevoegen</a>

		<?php if ( $message ): ?>
			<div class="modal <?php echo $message['type'] ?>">
				<?php echo $message['text'] ?>
			</div>
		<?php endif ?>
		

		<?php foreach ( $afbeeldingen as $afbeelding): ?>
			<article>
				<h2><?= $afbeelding['title'] ?></h2>
				<a href="uploads/img/<?= $afbeelding['file_name'] ?>">
					<img src="uploads/img/thumbnails/thumbnail-<?= $afbeelding['file_name'] ?>" alt="<?= $afbeelding['caption'] ?>">
				</a>
				
				<form action="phpoefening-036-a-delete.php" method="POST">
					<input type="hidden" name="id" value="<?= $afbeelding['id'] ?>">
					<input type="hidden" name="file_name" value="<?= $afbeelding['file_name'] ?>">
					<input type="submit" name="submit" value="Verwijderen">
				</form>
			</article>
		<?php endforeach ?>
		
	</body>
</html>