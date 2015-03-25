<?php 		        
		
	include("checkLoginOk.php");
	
	include_once("classes/connectieClass.php");

	$connectie = new PDO("mysql:host=localhost;dbname=opdracht-file-upload", "root", "");    

	$dbConnectie = new Database($connectie);    

	//de MySQL code die alle gebruikersnamen selecteer uit de tabel gebruikers
	$querySelectArtikels = " SELECT id, titel, artikel, kernwoorden, datum, is_active 
							 FROM artikels 
							 WHERE is_archived = '0' ";

	$artikels = $dbConnectie->query( $querySelectArtikels );


 
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

        <style> .actief{background-color: #FFFFFF} .deactief{background-color: #B09FB3} </style>
    </head>
    <body>

    <a href="dashboard.php"> terug naar dashboard </a>

    <form method="post" action="uitloggen-process.php">

    <input type="submit" value="uitloggen" name="uitloggen">

    </form>

    <h1> overzicht artikels</h1>

     <a href="artikel-toevoegen-form.php"> artikel toevoegen</a>
        
    <?php foreach ($artikels as $value): ?>
    	<article class="<?php echo ($value['is_active'] == "1" ?  "actief" :  "deactief" ) ; ?>">

	    	<h3> <?php echo $value['titel'] ?></h3>

	    	<ul>
	    	    <li> <?php echo $value['artikel'] ?></li>
	    	    <li> <?php echo $value['kernwoorden'] ?></li>
	    	    <li> <?php echo $value['datum'] ?></li>
	    	</ul>

		    <form method="get" action="artikel-wijzigen-form.php">  

			    <button value="<?php echo $value['id'] ?>" name="artikel">		artikel wijzigen				</button>    
			    <button value="<?php echo $value['id'] ?>" name="activeren">	artikel <?php echo ($value['is_active'] == "1" ?  "deactiveren" :  "activeren" ) ; ?> 	</button>
			    <button value="<?php echo $value['id'] ?>" name="verwijderen">	artikel verwijderen				</button>

		    </form>	

    	</article>

    <?php endforeach ?>


   
        <script src="js/main.js"></script>
    </body>
</html>