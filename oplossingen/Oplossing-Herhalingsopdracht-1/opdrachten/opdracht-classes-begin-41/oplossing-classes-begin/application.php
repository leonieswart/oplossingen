<?php

	function __autoload( $className ) {
	    include 'classes/' . $className . '-class.php';
	}

	$new	=	150;
	$unit	=	100;

	$percent = new Percent( $new, $unit );

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
	
	table
	{
		border-collapse:collapse;

	}

	td
	{
		padding:6px;
		border:1px solid #666666;
	}

	td:last-child
	{
		text-align:right;
	}

	</style>

</head>
<body>

<table>
	<caption>Hoeveel procent is <?php echo $new ?> van <?php echo $unit ?>?</caption>
	<tr>
		<td>Absoluut</td>
		<td><?php echo $percent->absolute ?></td>
	</tr>
	<tr>
		<td>Relatief</td>
		<td><?php echo $percent->relative ?></td>
	</tr>
	<tr>
		<td>Geheel getal</td>
		<td><?php echo $percent->hundred ?>%</td>
	</tr>
	<tr>
		<td>Nominaal</td>
		<td><?php echo $percent->nominal ?></td>
	</tr>
</table>

</body>
</html>