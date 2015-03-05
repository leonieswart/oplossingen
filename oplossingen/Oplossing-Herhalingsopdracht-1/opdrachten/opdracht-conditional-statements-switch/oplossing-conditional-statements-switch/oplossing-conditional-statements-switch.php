<?php

	$getal 	= 	1; 
	
    
    switch ( $getal )
   	{
   		case '1':
   			$dag 	= 	'maandag';
   			break;

   		case '2':
   			$dag 	= 	'dinsdag';
   			break;

   		case '3':
   			$dag 	= 	'woensdag';
   			break;

   		case '4':
   			$dag 	= 	'donderdag';
   			break;

   		case '5':	
   			$dag 	= 	'vrijdag';
   			break;

   		case '6':
   			$dag 	= 	'zaterdag';
   			break;

   		case '7':
   			$dag 	= 	'zondag';
   			break;

   		default:
   			$dag 	=	'onbekende dag';
   	}
    
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing switch</title>
	</head>
	<body>
      <h1>Oplossing switch</h1>
		<p>De dag die overeenkomt met het getal "<?php echo $getal ?>" is: <?php echo $dag ?></p>
	</body>
</html>