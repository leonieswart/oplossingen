<?php

	$maxTafels		=	10;
	$maxProduct		=	10;

?>
	

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Oplossing for: deel2</title>
		<style>
			
			.oneven
			{
				background-color	:	lightgreen;
			}

		</style>
    </head>
    <body>
		
		<h1>Oplossing for: deel2</h1>

		<table>
			<?php for( $tafel = 0; $tafel < $maxTafels; ++$tafel ):  ?>
				
				<tr>	
					<?php for( $product = 1; $product <= $maxProduct; ++$product ):  ?>
						<td class="<?= ( ( $tafel * $product ) % 2 > 0 ) ? 'oneven' : '' ?>"><?= $tafel * $product ?></td>
					<?php endfor ?>
				</tr>
			<?php endfor ?>
		</table>

    </body>
</html>