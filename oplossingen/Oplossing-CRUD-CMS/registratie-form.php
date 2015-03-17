<?php
	
	session_start();

	if  ( isset( $_COOKIE['login'] ) ) 
		{
			
			header( 'location: ' . "dashboard.php"  );
		}

	$email = "";
	$wachtwoord = "";

	if  ( isset( $_SESSION['user'] ) ) 

		{
			$email = $_SESSION['user']['email'];

			$wachtwoord = $_SESSION['user']['wachtwoord'];
		}

    if  ( !isset( $_SESSION['melding']['bericht'] ) )
        {
          $_SESSION['melding']['bericht'] = "";   
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


    <form method="post" action="registratie-process.php">

    <label>e-mail</label>
    <input type="email" name="e-mail" value="<?php echo $email ?>" placeholder="Vul je e-mail in.">
    	
    <label>wachtwoord</label>
    <input type="text" name="wachtwoord" value="<?php echo $wachtwoord ?>" placeholder="Vul je wachtwoord in.">
    <input type="submit" value="Genereer een paswoord" name="generate">

    <input type="submit" value="Registreer" name="submit">

    </form>
        
    </body>
</html>