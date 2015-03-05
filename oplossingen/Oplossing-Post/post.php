<?php 


$wachtwoord = "test";
$gebruiker = "leonie";
$message = "";

if ( 	isset( $_POST[ 'submit' ] ) ) 

		{ 

			if ( $wachtwoord == $_POST['wachtwoord'] && $gebruiker == $_POST['gebruikersnaam'] ) 

					{
						$message = "Welkom!";
					} 

			else

					{

						$message = "Er ging iets mis.  Probeer het opnieuw.";
					}

		} 

else 

		{
			$message = "Geef je logingegevens in.";
		};


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
        

<?php echo "$message"; ?>


<form action="post.php" method="post">


<label> Gebruikersnaam 	<input type="text" name="gebruikersnaam">  	 </label>
<label> Wachtwoord 		<input type="text" name="wachtwoord">		 </label>

<input type="submit" value="verzenden" name="submit">
	
</form>








    </body>
</html>