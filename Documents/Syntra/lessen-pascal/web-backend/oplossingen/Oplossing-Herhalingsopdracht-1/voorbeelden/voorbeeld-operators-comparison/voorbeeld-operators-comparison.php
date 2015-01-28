<?php

	$statement1		=	( 4 == 4 );
	$statement2		=	( "4" === 4 );
	$statement3		=	( 4 != 3 );
	$statement4		=	( 5 > 9 );
	$statement5		=	( 3 < 9 );
	$statement6		=	( 8 >= 9 );
	$statement7		=	( 8 <= 8 );
	

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van comparison operators</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Voorbeeld van comparison operators</h1>

		<p>4 == 4 : "<?php echo $statement1 ?>" (<?php var_dump( $statement1 ) ?>)</p>
		<p>"4" === 4 : "<?php echo $statement2 ?>" (<?php var_dump( $statement2 ) ?>)</p>
		<p>4 != 3 : "<?php echo $statement3 ?>" (<?php var_dump( $statement3 ) ?>)</p>
		<p>5 > 9 : "<?php echo $statement4 ?>" (<?php var_dump( $statement4 ) ?>)</p>
		<p>3 < 9 : "<?php echo $statement5 ?>" (<?php var_dump( $statement5) ?>)</p>
		<p>8 >= 9 : "<?php echo $statement6 ?>" (<?php var_dump( $statement6 ) ?>)</p>
		<p>8 <= 8 : "<?php echo $statement7 ?>" (<?php var_dump( $statement7 ) ?>)</p>

	</section>

</body>
</html>