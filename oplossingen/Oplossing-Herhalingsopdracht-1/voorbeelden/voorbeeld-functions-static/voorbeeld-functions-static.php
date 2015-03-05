<?php		
		
	/* Ijsjesdraairoboten */
	
	/* Defecte ijsjesDraaiRobot */
	
	function ijsjesDraaiRobotRonny() {
	
		$hoorntjes = 9;
		
		--$hoorntjes;

		if ($hoorntjes > 0) 
		{
			
			return 'Ijsje is klaar! Ik kan nog ' . $hoorntjes . ' hoorntjes maken.';
		} 
		else 
		{
			
			return 'Alle hoorntjes zijn op, gelieve mij bij te vullen!';
		}
	}
	
	
	
	function ijsjesDraaiRobotJimmy() {
	
		static $hoorntjes = 9;
		
		--$hoorntjes;

		if ( $hoorntjes > 0 ) 
		{
			return 'Jimmy: Ijsje is klaar! Ik kan nog ' . $hoorntjes . ' hoorntjes maken.';
		} 
		else 
		{
			return 'Jimmy: Alle hoorntjes zijn op, gelieve mij bij te vullen!';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van een function met static</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">
	
	<section class="body">

		<h1>Voorbeeld van een function met static</h1>

		<h2>Ijsjes bestellen!</h2>

		<h3>Ijsjesdraairobot Ronny</h3>
		<ul>
			<?php for ($i = 0; $i < 12; ++$i): ?>

				<li><?php echo ijsjesDraaiRobotRonny() ?></li>
			
			<?php endfor ?>
		</ul>

		<h3>Ijsjesdraairobot Jimmy</h3>
		<ul>
			<?php for ($i = 0; $i < 12; ++$i): ?>

				<li><?php echo ijsjesDraaiRobotJimmy() ?></li>
			
			<?php endfor ?>
		</ul>

	</section>

</body>
</html>