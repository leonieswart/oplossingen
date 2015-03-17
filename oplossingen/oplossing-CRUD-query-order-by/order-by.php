<?php
		include_once("classes/DatabaseConnectie.php");

		$connectie = new PDO("mysql:host=localhost;dbname=bieren", "root", "");

		$orderby = "";
		$direction = "";
		$order = "";


		// nieuwe instantie van de classe Database maken om connectie te maken met db
		$dbConnectie = new Database($connectie);

    
		 	if  ( isset( $_GET['orderby'] ) )  
       		{
       			$order = $_GET['orderby'];
       			$direction = $_GET['direction'];       			

       			if ($direction != 'ASC' && $direction != 'DESC') {
       				$direction = 'DESC';
       			} 
       		
       			$orderby = " ORDER BY " . $order . " " . $direction;

       		}	

		//Select all from db
		$selectQuery = "SELECT bieren.biernr, bieren.naam, bieren.alcohol, brouwers.brnaam, soorten.soort
						FROM bieren
						INNER JOIN brouwers
						ON bieren.brouwernr = brouwers.brouwernr
						INNER JOIN soorten
						ON bieren.soortnr = soorten.soortnr" . $orderby;

						

		//via classes query preparen en uitvoeren
       	$resultaten = $dbConnectie->query( $selectQuery );

       	//kolomnamen voor in tabel uit array halen
       	$kolomnamen = array_keys( $resultaten[0] );

       	$reverseDirection = ($direction == 'DESC') ? 'ASC' : 'DESC';



      






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

	    <table border="1">
			<thead>
				<tr>
					<!-- kolomnamen uitloopen -->
					<?php foreach ($kolomnamen as $key => $value): ?>

				 	 	<th>  

				 	 		<a href= "<?= $_SERVER['PHP_SELF'] ?>?orderby=<?php echo $value ?>&direction=<?php echo $reverseDirection?>" > 

				 	 			<?php if( $value == $order && $direction == "DESC" ): ?> 

				 	 				<img src="img/icon-desc.png"> 

				 	 			<?php else: ?> 

				 	 				<img src="img/icon-asc.png"> 

				 	 			<?php endif ?>  

				 	 			<?php echo $value ?> 

				 	 		</a>	

				 	 	</th>
				 
				 	<?php endforeach ?>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($resultaten as $key => $value): ?>
					<tr>

						<?php foreach ($value as $waarde): ?>

							<td> <?php echo $waarde ?> </td>

						<?php endforeach ?>
					</tr>		
				<?php endforeach ?>
			</tbody>



				
			</table>
	        


    </body>
</html>