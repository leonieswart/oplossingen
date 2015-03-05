<?php

session_start();

//POPULATE SELECT MET OPTIONS GEVULD MET NUMERIEKE WAARDEN
function populateSelect($start, $stop) {

	$start1 = $start;
	$stop1 = $stop;

	if (!(($start - $stop) < 0)) {
	
		$start1 = $stop;
		$stop1 = $start;
	}

	$dump = array();
	
	for ($i = $start1; $i <= $stop1; $i++) {
	
		$dump[] = '<option value="' . (($i<10)?'0':'') . $i . '">' . (($i<10)?'0':'') . $i . '</option>';
		//TOEVOEGING: zorg ervoor dat het aantal nullen wordt toegevoegd op basis van de lengte van het grootste getal.
	}
	
	if (!(($start - $stop) < 0)) {
	
		$dump = array_reverse($dump);
	}
	
	$dump = implode('',$dump);
	
	return $dump;
}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van tracking details (form)</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<h1>Voorbeeld van tracking details (form)</h1>

		
		<a href="voorbeeld-security-tracking-details.php">Terug naar het overzicht</a>
			
		<h2>Artikel toevoegen</h2>
		
			<form action="voorbeeld-security-tracking-details-artikel-toevoegen-confirm.php" method="post">
				<ul>	
					<li>
						<label for="titel">Titel</label>
						<input type="text" name="titel" id="titel">
					</li>	
					<li>
						<label for="artikel">Artikel</label>
						<textarea name="artikel" id="artikel"></textarea>
					</li>	
					<li>
						<label for="kernwoorden">Kernwoorden</label>
						<input type="text" name="kernwoorden" id="kernwoorden">
					</li>
					<li>
						d: <select name="dag"><?php echo populateSelect(1,31) ?></select>
						
						m: <select name="maand"><?php echo populateSelect(1,12) ?></select>
						
						j: <select name="jaar"><?php echo populateSelect(2012,2001) ?></select>
					</li>
				</ul>
				
				<input type="submit" name="submit" value="verzenden">
			</form>

	</section>

</body>
</html>