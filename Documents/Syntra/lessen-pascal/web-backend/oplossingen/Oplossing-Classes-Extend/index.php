<?php

function __autoload($classname) 

{
    $filename = "classes/". $classname .".php";
    include_once($filename);
}


$kikker = new Animals("Kermit", "male", "100");
$kat = new Animals("Dikkie Dik", "male", "90");
$dolfijn = new Animals("Flipper", "female", "80");


$healthDolfijn = $dolfijn->changeHealth(20);
$healthKat = $kat->changeHealth(-60);
$healthKikker = $kikker->changeHealth(-120);


?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        
    <table border="1px">
    	<tr>
    		<td>Soort:</td>
    		<td>Kikker</td>
			<td>Kat</td>
			<td>Dolfijn</td>
    	</tr>

    	<tr>
    		<td>Naam:</td>
    		<td><?php echo $kikker->getName();?></td>
    		<td><?php echo $kat->getName();?></td>
    		<td><?php echo $dolfijn->getName();?></td>

    	</tr>

		<tr>
    		<td>Geslacht:</td>
    		<td><?php echo $kikker->getGender();?></td>
    		<td><?php echo $kat->getGender();?></td>
    		<td><?php echo $dolfijn->getGender();?></td>

    	</tr>

		<tr>
    		<td>Levenspunten:</td>
    		<td><?php echo $kikker->getHealth();?></td>
    		<td><?php echo $kat->getHealth();?></td>
    		<td><?php echo $dolfijn->getHealth();?></td>

    	</tr>

    	<tr>
    		<td>Speciale move:</td>
    		<td> <?php echo $kikker->DospecialMove();?></td>
    		<td> <?php echo $kat->DospecialMove();?></td>
    		<td> <?php echo $dolfijn->DospecialMove();?></td>
    	</tr>
    </table>



    </body>
</html>