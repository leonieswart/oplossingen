<?php
	
	$naam		=	"Augustus";
	$achternaam	=	"Octavius";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld echo</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>
<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld echo</h1>
		
		<p><?php echo $naam ?></p>

		<p><?= $achternaam ?></p>

	</section>

</body>
</html>