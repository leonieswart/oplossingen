<?php
	
	session_start();


    if  ( isset( $_COOKIE['login'] ) ) 
        {
            
            header( 'location: ' . "dashboard.php"  );
        }
	
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


    <h1>Registreren</h1>

    <div> <?php echo $_SESSION['melding']['bericht'];?></div>


    <form method="post" action="login-process.php">

    <label>e-mail</label>
    <input type="email" name="e-mail" placeholder="Vul je e-mail in.">
    	
    <label>wachtwoord</label>
    <input type="text" name="wachtwoord" placeholder="Vul je wachtwoord in.">

    <input type="submit" value="Login" name="login">

    </form>

   <p> Nog geen account? Maak er dan eentje aan op de <a href="registratie-form.php">registratiepagina</a>. </p>
        
    </body>
</html>