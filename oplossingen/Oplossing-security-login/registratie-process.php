<?php

session_start();

if  ( isset( $_POST['generate'] ) ) 
    
    {   
        function generate_password( $length ) 

        {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$&*-=+?";
            $password = substr( str_shuffle( $chars ), 0, $length );
            return $password;
        };

        $wachtwoord = generate_password(12);

        $_SESSION['user']['wachtwoord'] = $wachtwoord;
        $_SESSION['user']['email'] = $_POST['e-mail'];



        header( 'location: ' . "registratie-form.php"  );

   
    }

if  ( isset( $_POST['submit'] ) ) 
    
    {  
        include_once("classes/connectieClass.php");
       
        $email = $_POST['e-mail'];

        $connectie = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "");    

        //check if email is valid
        if  ( filter_var( $email, FILTER_VALIDATE_EMAIL ) != FALSE ) 

        	{
                //connectie maken met DB via een Class
                $dbConnectie = new Database($connectie);    

                //check of email al bestaat in DB

                    //de MySQL code die alle gebruikersnamen selecteer uit de tabel gebruikers
                    $queryCheck = " SELECT email 
                                    FROM users ";

                    //via classes query preparen en uitvoeren
                    $emailadressen = $dbConnectie->query( $queryCheck );

                    //resultaten uitloopen en overlopen met in_array
                    foreach ($emailadressen as $key => $value) 
                            
                            {
                                $bestaatReeds[] = in_array($email, $value);
                                
                            }   

                    if  ( in_array("true", $bestaatReeds) == true) 
                                
                        {
                
                            $_SESSION['melding']['type'] = "error";
                            $_SESSION['melding']['bericht'] = "Het gegeven e-mailadres bestaat reeds. Geef een nieuw e-mailadres op.";
                            header( 'location: ' . "registratie-form.php"  );
                        }   

                    else

                        {
                            //query om gegevens in de DB te steken
                            $queryInsert = " INSERT INTO users
                                                        (email, 
                                                         salt,   
                                                         hashed_password,
                                                         last_login_time) 
                             
                                             VALUES 
                                                         (:email,
                                                          :salt, 
                                                          :wachtwoord,
                                                          NOW() ) ";

                            //waarde toekennen aan vervangers van placeholders in bindvalue
                            $email         =   $_POST['e-mail'];
                            $salt          =   mt_rand();
                            $wachtwoord    =   hash( 'sha512', $_POST['wachtwoord'] . $salt );

                            //placeholders in array steken voor Class    
                            $placeholders = array( ':email' => $email, ':salt' => $salt, ':wachtwoord' => $wachtwoord );

                            $statement = $dbConnectie->queryInsert( $queryInsert, $placeholders );


                            $value = $email . "," . hash( 'sha512', $email . $salt );

                            setcookie('login', $value, time()+ 2592000);

                            $_SESSION['melding']['type'] = "oke";
                            $_SESSION['melding']['bericht'] = "Je bent nu geregistreerd bij ons.";  
                            $_SESSION['email'] = $email ;                            

                            unset( $_SESSION['user']);
                            header( 'location: ' . "dashboard.php"  );

                        }        
        	}

        else

        	{

        	   $_SESSION['melding']['type'] = "error";
               $_SESSION['melding']['bericht'] = "Het gegeven e-mailadres voldoet niet aan het standaard formaat. Geef een nieuw e-mailadres op. Vb. info@info.com";
        	   header( 'location: ' . "registratie-form.php"  );
           
            }
    }

else

    {

        header( 'location: ' . "registratie-form.php"  );

    }    

?>