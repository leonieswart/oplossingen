<?php

	$jaartal			=	1904;
	$isSchrikkeljaar 	= 	false;

	if ( ( ( $jaartal % 4 == 0 ) && ( $jaartal % 100 != 0 ) ) || ( $jaartal % 400 == 0 )  )
	{
		$isSchrikkeljaar = true;
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing if else: deel1</title>
	</head>
	<body>
		
		<h1>Oplossing if else: deel1</h1>

		<p>Het jaar "<?php echo $jaartal ?>" is <?php echo ( $isSchrikkeljaar ) ? "een" : "geen"  ?> schrikkeljaar </p>
	</body>
</html>