<?php
	
	$getal 	= 	1; 
	$dag 	=	'onbekende dag';
          
    if ( $getal == 1 ) 
    { 
        $dag = 'maandag'; 
    } 
      
    if ( $getal == 2 ) 
    { 
        $dag = 'dinsdag'; 
    } 
      
    if ( $getal == 3 ) 
    { 
        $dag = 'woensdag'; 
    } 
      
    if ( $getal == 4 ) 
    { 
        $dag = 'donderdag'; 
    } 
      
    if ( $getal == 5 ) 
    { 
        $dag = 'vrijdag'; 
    } 
      
    if ( $getal == 6 ) 
    { 
        $dag = 'zaterdag'; 
    } 
      
    if ( $getal == 7 ) 
    { 
        $dag = 'zondag'; 
    } 
	
    $dag 	=	strtoupper( $dag );
    //$dag 	=	str_replace( 'A', 'a' , $dag );
    $laatsteAPos    =   strrpos( $dag, 'A' );
    $dag 	        =	substr_replace( $dag, 'a', $laatsteAPos, 1 );

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing conditional statements: deel2</title>
	</head>
	<body>
        
        <h1>Oplossing conditional statements: deel2</h1>

		<p>De dag die overeenkomt met het getal "<?php echo $getal ?>" is: <?php echo $dag ?></p>
	</body>
</html>