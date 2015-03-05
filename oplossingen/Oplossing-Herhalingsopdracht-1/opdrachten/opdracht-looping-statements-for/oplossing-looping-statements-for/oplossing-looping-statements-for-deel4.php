<?php

	$maxTafels		=	10;
	$maxProduct		=	10;

	// Container die array met producten zal bevatten op de key die overeenstemt met het getal van de tafel
	$tafels	=	array();

	for( $tafelCounter = 0; $tafelCounter <= $maxTafels; ++$tafelCounter )
	{
		// Container die de producten van de tafel en de verschillende producten zal bevatten
		$producten	=	array();

		for( $productCounter = 0; $productCounter <= $maxTafels; ++$productCounter )
		{
			$producten[]	=	$tafelCounter * $productCounter;
		}

		$tafels[ $tafelCounter ]	=	$producten;

	}

?>
	

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Oplossing for: deel4</title>
		<style>
			
			.oneven
			{
				background-color	:	lightgreen;
			}

		</style>
    </head>
    <body>
		
		<h1>Oplossing for: deel4</h1>

		<table>
			
			<thead>
				<th>Tafel</th>

				<?php for ( $productCounter = 0; $productCounter <= $maxTafels; ++$productCounter): ?>
					
					<th><?= $productCounter ?></th>
					
				<?php endfor ?>
			</thead>

			<tbody>
			<?php foreach ($tafels as $tafel => $producten): ?>
				<tr>
					<td><?= $tafel ?></td>
					<?php foreach ($producten as $product ): ?>
						<td class="<?= ( $product % 2 > 0 ) ? 'oneven' : '' ?>"><?= $product ?></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
			</tbody>

		</table>

    </body>
</html>