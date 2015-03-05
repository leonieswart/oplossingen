<?php

$message	=	false;

try
{
	if (isset($_POST['submit'])) 
	{

		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 2000000)) 
		{

		// Het bestand moet gif, jpeg of png zijn en mag niet groter zijn dan 2MB
		  
			if ($_FILES["file"]["error"] > 0) 
			{
				// Als er een fout in het bestand wordt gevonden (bv. corrupte file door onderbroken upload), moet er een foutboodschap getoond worden
				throw new Exception( "Return Code: " . $_FILES["file"]["error"] );
			} 
			else 
			{
				// De root van het bestand moet achterhaald worden om de absolute pathnaam (de plaats op de schijf van de server) te achterhalen
				// Zo weet de server waar het bestand moet terecht komen.
				// We kunnen dit doen door de functie dirname() toe te passen op dit bestand (=__FILE__)
				define('ROOT', dirname(__FILE__));
				
				if (file_exists(ROOT . "/img/" . $_FILES["file"]["name"])) {
					
					//Als het bestand reeds bestaat in de map, moet er een foutboodschap getoond worden
					throw new Exception( $_FILES["file"]["name"] . " bestaat al. " );
				} 
				else 
				{
				
					// Anders mag het bestand geüpload worden naar de map
					move_uploaded_file($_FILES["file"]["tmp_name"], (ROOT . "/img/" . $_FILES["file"]["name"]));
					
					$message[ 'type' ]	=	'success';
					$message[ 'text' ]	=	'<p>Upload: ' . $_FILES["file"]["name"] .'</p>';
					$message[ 'text' ]	=	'<p>Type: ' . $_FILES["file"]["type"] .'</p>';
					$message[ 'text' ]	=	'<p>Size: ' . $_FILES["file"]["size"] / 1024 .'</p>';
					$message[ 'text' ]	=	'<p>Temp file: ' . $_FILES["file"]["tmp_name"] .'</p>';
					$message[ 'text' ]	=	'<p>Opgeslagen in: : ' . ROOT . "/img/" . $_FILES["file"]["name"] .'</p>';
				}
			}
		} 
		else 
		{
			throw new Exception( 'Ongeldig bestand' );
		}
	}
}
catch( Exception $e )
{
	$message[ 'type' ]	=	'error';
	$message[ 'text' ]	=	$e->getMessage();
}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld file upload</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld file upload</h1>

		<?php if ( $message ): ?>
			<div class="modal <?= $message[ 'type' ] ?>"><?= $message[ 'text' ] ?></div>
		<?php endif ?>

		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		
			<label for="file">Bestand:</label>
			<input type="file" name="file" id="file"> 

			<input type="submit" name="submit" value="Submit">
		</form>

	</section>

</body>
</html>