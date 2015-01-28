<?php

	$pigHealth         =   5;
    $maximumThrows     =   8;

    $spelverloop        =   array();

    function calculateHit( )
    {

        global $pigHealth;

        $dataArray  =   array();

        $raakkans = rand(0,9);

        $isRaak =   ( $raakkans <= 3 ) ? true : false;

        if ( $isRaak)
        {
            --$pigHealth;
            $dataArray['isHit']     =   true;
            $dataArray['string']    =   'Raak! Er zijn nog maar ' . $pigHealth . ' varkens over.'; 
        }
        else
        {
            $dataArray['isHit']     =   false;
            $dataArray['string']    =   'Mis! Nog ' . $pigHealth . ' varkens in het team.';
        }

        return $dataArray;
    }

    function launchAngryBird(  )
    {
        global $pigHealth;
        global $maximumThrows;

        global $spelverloop;

        if ( $maximumThrows != 0 && $pigHealth > 0 )
        {
            $hitResult = calculateHit( );
            
            --$maximumThrows;

            $spelverloop[]  =   $hitResult['string'];

            launchAngryBird();
        }
        else
        {
            if ( $pigHealth > 0 )
            {
               $spelverloop[]   =   'Helaas, je hebt verloren.'; 
            }
            else
            {
                $spelverloop[]   =   'Hoera! Hoera! Hoera! Je hebt gewonnen!';
            }
        }
    } 


    launchAngryBird( );

    //var_dump( $spelverloop );

?>
	

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Oplossing functies gevorderd: deel2 Angry Birds</title>

    </head>
    <body>
		
		<h1>Oplossing functies gevorderd: deel2 Angry Birds</h1>
        <ul>
            <?php foreach( $spelverloop as $resultaat ): ?>
                <li><?= $resultaat ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>


