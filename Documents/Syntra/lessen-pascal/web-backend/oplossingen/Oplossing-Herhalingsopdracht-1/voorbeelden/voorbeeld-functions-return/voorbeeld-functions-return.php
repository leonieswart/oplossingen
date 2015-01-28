<?php
	function isLeapYear( $year ) {
		//Onderstaande is om ervoor te zorgen dat we zeker met een integer werken
		$year = (int) $year;
		
		if ( ( $year  % 4 ) == 0) 
		{
			if( ( $year % 100 ) == 0) 
			{
				if( ( $year ) % 400 == 0 ) 
				{
					return true;
				}
				else 
				{
					return false;
				}
			}
			else 
			{
				return true;
			}
		}
		else 
		{
			return false;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van functie met &eacute;&eacute;n parameter</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">
	
	<section class="body">

		<h1>Voorbeeld van functie met &eacute;&eacute;n parameter</h1>

		<p>Is dit cijfer een schrikkeljaar?</p>

		<ul>
			<li>1800: <?php echo ( ( isLeapYear( 1800 ) ) ? "ja" : "nee" ) ?></li>
			<li>2000: <?php echo ( ( isLeapYear( 2000 ) ) ? "ja" : "nee" ) ?></li>
			<li>2012: <?php echo ( ( isLeapYear( 2012 ) ) ? "ja" : "nee" ) ?></li>
		</ul>

	</section>

</body>
</html>