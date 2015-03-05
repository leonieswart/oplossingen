<?php
include("Percent.php");

$getal1 = rand(0,100);
$getal2 = rand(0,100);

$procent = new Percent($getal1, $getal2);

$absolute = $procent->absolute;
$relative = $procent->relative;
$hundred = $procent->hundred;
$nominal = $procent->nominal;


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

    <p>Getal 1: <?php echo $getal1 ?> </p>
    <p>Getal 2: <?php echo $getal2 ?> </p>

<table>
	<tr>
		<td>Absoluut:</td>
		<td><?php echo $absolute ?></td>
	</tr>

	<tr>
		<td>Relatief:</td>
		<td><?php echo $relative ?></td>
	</tr>

	<tr>
		<td>Procent:</td>
		<td><?php echo $hundred ?>% </td>
	</tr>

	<tr>
		<td>Nominale:</td>
		<td><?php echo $nominal ?></td>
	</tr>

</table>



    </body>
</html>
