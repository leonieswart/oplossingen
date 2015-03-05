<?php
	$tekstje1 = 'Dit is een string met single quotes';
	$tekstje2 = "Dit is een string met double quotes";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld strings</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld strings</h1>

		<p><?php echo $tekstje1 ?></p>
		<p><?php echo $tekstje2 ?></p>
		
	</section>

</body>
</html>