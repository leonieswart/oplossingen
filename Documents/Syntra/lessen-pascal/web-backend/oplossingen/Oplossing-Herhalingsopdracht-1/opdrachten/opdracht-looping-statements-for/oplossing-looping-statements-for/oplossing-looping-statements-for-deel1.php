<?php

	$rijen		=	4;
	$kolommen	=	10;
?>
	

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Oplossing for: deel1</title>
    	<style>
			table
			{
				border-collapse:collapse;
			}

			td
			{
				padding: 16px;
				border: 1px solid lightgrey;
			}
    	</style>

    </head>
    <body>
		
		<h1>Oplossing for: deel1</h1>

		<table>
			<?php for ( $rij = 0; $rij < $rijen; ++$rij): ?>
				<tr>
					<?php for ( $kolom = 0; $kolom < $kolommen; ++$kolom): ?>
						<td>kolom</td>
					<?php endfor ?>
				</tr>
			<?php endfor ?>
		</table>

    </body>
</html>