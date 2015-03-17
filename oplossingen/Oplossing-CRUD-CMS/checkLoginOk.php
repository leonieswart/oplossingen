<?php 

	if ( isset( $_COOKIE['login'])) {

				session_start();

				include_once("classes/connectieClass.php");

		        $connectie = new PDO("mysql:host=localhost;dbname=opdracht-crud-cms", "root", "");    

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


 }
		

	else
		{        header( 'location: ' . "login.php"  ); }

	

	              	?>