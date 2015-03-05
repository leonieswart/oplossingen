<?php

	if (isset($_POST['submit'])) 
	{

		$aan 			= 	$_POST['aan'];
		$titel 			= 	$_POST['titel'];
		$bericht 		= 	$_POST['bericht'];
		$afzenderEmail 	= 	$_POST['afzenderEmail'];
		
		$headers 		= 	'From: '. $afzenderEmail;

		mail( $aan, $titel, $bericht, $headers );

	}
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld mail</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld mail</h1>

		<form action="<?= $_SERVER[ 'PHP_SELF' ] ?>" method="POST">

			<ul>
				<li>
					<label for="aan">aan:</label>
					<input type="text" name="aan" id="aan" /> 
				</li>
				
				<li>
					<label for="titel">titel:</label>
					<input type="text" name="titel" id="titel" /> 
				</li>
			
				<li>
					<label for="file">bericht:</label>
					<textarea name="bericht" id="bericht" ></textarea> 
				</li>
				
				<li>
					<label for="afzenderEmail">email afzender:</label>
					<input type="text" name="afzenderEmail" id="afzenderEmail" /> 
				</li>
			</ul>

			<input type="submit" name="submit" value="Submit">
		</form>

	</section>

</body>
</html>