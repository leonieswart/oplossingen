<?php

$pigHealth = 5;
$maximumThrows = 8;

function calculatehit()

	{
		GLOBAL $pigHealth;

		$throw = rand(0,100);

		if ($throw <= 40) 

		  	{
				--$pigHealth;
				$raak  = "RAAK! Aantal varkentjes over: " . $pigHealth;
			}

		else

			{
				$raak = "MIS! Aantal varkentjes over: " . $pigHealth;
			};

		return $raak;

	};


function launchBird()

{
	GLOBAL $pigHealth;
	GLOBAL $maximumThrows;

	static $spel = array();

	while ($maximumThrows > 0 && $pigHealth != 0) 

			{
				--$maximumThrows;
				$spel[] = calculatehit();
			};

	if ($maximumThrows == 0 && $pigHealth != 0) 

		{ $spel[] = "VERLOREN!"; } 

	elseif ($pigHealth == 0 ) 

		{ $spel[] = "GEWONNEN!"; };


	return $spel;

};


$spel = launchBird();


?>




<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

    
    </head>
    <body>
        
        <?php foreach ($spel as $key): ?> 

       <p> <?php echo "$key" ?> </p>

        <?php endforeach ?>	



    </body>
</html>