<?php
			
	//Faculteit van 6 (6 * 5 * 4 * 3 * 2 * 1)

	function faculteit( $getal ) 
	{
	
		if ( $getal == 0 ) 
		{
			return 1;
		} 
		else 
		{
			return $getal * faculteit( $getal - 1 );
		}
		
		/* of korter:
		if ($getal == 0) return 1;
		
		return $getal * faculteit($getal - 1);
		*/
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van een recursieve functie</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van een recursieve functie</h1>

		<p>De faculteit van 6 is <?php echo faculteit( 6 ) ?></p>

	</section>

</body>
</html>