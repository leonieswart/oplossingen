<?php

	include("checkLoginOk.php");

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

    <form method="post" action="artikel-toevoegen-process.php">
    		
    	<label> Titel </label>	<input type="text" name="titel">
    	<label> Artikel </label> <input type="textarea" name="artikel">
    	<label> Kernwoorden </label> <input type="textarea" name="kernwoorden">
    	<label> Datum   JJJJ/MM/DD </label> <input type="date" name="datum">

    	<input type="submit" value="artikel toevoegen" name="toevoegenDef">

    </form>
        
    </body>
</html>