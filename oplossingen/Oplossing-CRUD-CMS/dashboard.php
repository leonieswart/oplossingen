<?php

	if ( isset( $_COOKIE['login'])) {

				

		        include("checkLoginOk.php");
	 }
		

	else
		{        header( 'location: ' . "login.php"  ); }

	


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

    <form method="post" action="uitloggen-process.php">

    <input type="submit" value="uitloggen" name="uitloggen">

    </form>

    <a href="artikels-overzicht.php"> artikels </a>

	<form action="artikel-toevoegen-form.php" method="post">
		
	<input type="submit" value="artikel toevoegen" name="toevoegen">

	</form>        
    </body>
</html>