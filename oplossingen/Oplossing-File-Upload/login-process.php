<?php

session_start();

if  ( isset( $_POST['login'] ) ) 
    
    {  
        include_once("classes/connectieClass.php");
       
        $email = $_POST['e-mail'];
        $wachtwoord = $_POST['wachtwoord'];
        $connectie = new PDO("mysql:host=localhost;dbname=opdracht-file-upload", "root", "");    

        //check if email is valid

        if  ( filter_var( $email, FILTER_VALIDATE_EMAIL ) != FALSE ) 

        	{
                //connectie maken met DB via een Class
                $dbConnectie = new Database($connectie); 

                //de MySQL code die alle gebruikersnamen selecteer uit de tabel gebruikers
                $queryLogin = " SELECT * 
                                FROM users 
                                WHERE email = :email ";

                $placeholder = array( ':email' => $email );

                //via classes query preparen en uitvoeren
                $emailadressen = $dbConnectie->query( $queryLogin, $placeholder );

                if  ($emailadressen == false) 

                    {
                        $_SESSION['melding']['bericht'] = "U werd niet teruggevonden in onze bestanden. Gelieve een bestaand emailadres in te geven.";
                        header( 'location: ' . "login.php"  );
                    }

                else 
                    {
                         $wachtwoord = hash( 'sha512', $wachtwoord . $emailadressen[0]['salt'] );
            
                        if ( $email == $emailadressen[0]['email'] && $wachtwoord == $emailadressen[0]['hashed_password'] ) 

                            {
                                $value = $email . "," . hash( 'sha512', $email . $emailadressen[0]['salt'] );
                                setcookie('login', $value, time()+ 2592000);
                                $_SESSION['email'] = $email;
                                $_SESSION['id'] = $emailadressen[0]['id'];
                                header( 'location: ' . "dashboard.php"  );
                            }

                        else
                            {
                                $_SESSION['melding']['bericht'] = "Incorrect paswoord";
                                header( 'location: ' . "login.php"  );
                            }
                              
        	       }

            }

        else

        	{

        	   $_SESSION['melding']['type'] = "error";
               $_SESSION['melding']['bericht'] = "Het gegeven e-mailadres voldoet niet aan het standaard formaat. Geef een nieuw e-mailadres op. Vb. info@info.com";
        	   header( 'location: ' . "login.php"  );
           
            }
    }

else

    {

        header( 'location: ' . "login.php"  );

    }    

?>