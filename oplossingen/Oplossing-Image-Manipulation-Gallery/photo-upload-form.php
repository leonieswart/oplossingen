

<?php
	session_start();
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

    <div> <?php //echo  $_SESSION['melding']  ?> </div>


    <h1>Foto uploaden</h1>
    	<form method="post" action="photo-upload.php" enctype="multipart/form-data">

    	<label> Kies een foto </label>
    	 <p><input type="file" name="foto"></p>

    	 <label>Titel</label>
    	  <p><input type="text" name="titel"></p>

    	  <label>Beschrijving</label>
    		 <p><input type="text" name="caption"></p>

    		  <p><input type="submit" name="uploaden" value="uploaden"></p>

    	</form>
        
    </body>
</html>