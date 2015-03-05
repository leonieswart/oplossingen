<?php

	$argumentenArray = array('bedrag' => 100000, 'MaxJaren' => 10, 'procent' => 8, 'aantalJaren' => 0, 'historiek' => array());

	function renteBerekenen ($argumentenArray)

	{

		if ($argumentenArray['aantalJaren'] < $argumentenArray['MaxJaren']) 

		{

			$historiekDump = array();
			
			$argumentenArray['rente'] = ( ( $argumentenArray['bedrag'] / 100 ) * $argumentenArray['procent'] );
			$argumentenArray['rente'] = floor($argumentenArray['rente']);
			$historiekDump [] =  "Je krijgt van de bank " . $argumentenArray['rente'] . " euro rente op het bedrag op je rekening. ";
			
			$argumentenArray['bedrag'] = $argumentenArray['bedrag'] + $argumentenArray['rente'];
			$$argumentenArray['bedrag'] = floor($argumentenArray['bedrag']);
			$historiekDump [] = " Je nieuwe saldo bedraagt " . $argumentenArray['bedrag'] . " euro.";

			++$argumentenArray['aantalJaren'];
			$historiekDump [] = " Je geld staat al " . $argumentenArray['aantalJaren'] . " jaar bij ons op de bank." . "<br>" ;
			
			$argumentenArray ['historiek'] [] = $historiekDump;

			return renteBerekenen($argumentenArray);

			
		} 

		else 

		{

			return $argumentenArray;

		}

	}



$test = renteBerekenen($argumentenArray);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
       
       <?php foreach ($test['historiek'] as  $value ): ?>

       	<p> <?php echo $value[0]; echo $value[1]; echo $value[2] ?></p>

       <?php endforeach ?>

       


    </body>
</html>


