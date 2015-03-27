<?php

	if ( isset( $_COOKIE['login'])) {

				session_start();

		        include_once("classes/connectieClass.php");

		        $connectie = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "");    

                $dbConnectie = new Database($connectie);    

				//de MySQL code die alle gebruikersnamen selecteer uit de tabel gebruikers
                $queryCheckSalt = " SELECT salt 
                                    FROM users 
                                    WHERE email = :email ";

				$cookieExplode = explode(",", $_COOKIE['login']); 
				
              	$placeholders = array( ':email' => $cookieExplode[0]);

              	$salt = $dbConnectie->query( $queryCheckSalt, $placeholders );

              	$email = $cookieExplode[0];

              	$check = hash( 'sha512', $cookieExplode[0] . $salt[0]['salt']);

           
              	if  ($check == $cookieExplode[1])

	              	{

	              			echo "ingelogd als " . $_SESSION['email'];

	              	}

              	else 

	              	{

	              		setcookie('login', "", time()- 30000000);
						header( 'location: ' . "login.php"  );

	              	}


				 if ( isset( $_POST['uitloggen'] ) ) 

	             	{
	              		setcookie('login', "", time()- 30000000);
	              		unset($_SESSION['email']);
	              		$_SESSION['melding']['bericht'] = "U bent nu uitgelogd";
	              		header( 'location: ' . "login.php"  );


	              	}  	

	            

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

    <form method="post" action="<?php echo $_SERVER[ 'PHP_SELF' ] ?>">

    <input type="submit" value="uitloggen" name="uitloggen">

    </form>
        
    </body>
</html>