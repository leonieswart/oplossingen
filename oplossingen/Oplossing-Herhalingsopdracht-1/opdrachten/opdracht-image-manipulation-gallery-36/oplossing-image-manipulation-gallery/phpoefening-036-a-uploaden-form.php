<?php
	session_start();

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$message	=	Message::getMessage();

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
		
		<a href="phpoefening-036-a-galerij.php">Terug naar de galerij</a>

		<h1>Foto toevoegen</h1>

		<?php if ( $message ): ?>
			<div class="modal <?php echo $message['type'] ?>">
				<?php echo $message['text'] ?>
			</div>
		<?php endif ?>

		<form action="phpoefening-036-a-uploaden-process.php" method="POST" enctype="multipart/form-data">
			<ul>
				<li>
					<label for="image">image</label>
					<input type="file" name="image" id="image">
				</li>
				<li>
					<label for="title">Titel</label>
					<input type="text" name="title" id="title">
				</li>
				<li>
					<label for="caption">Beschrijving</label>
					<input type="text" name="caption" id="caption">
				</li>
			</ul>
			
			<input type="submit" name="submit">

		</form>
		
	</body>
</html>