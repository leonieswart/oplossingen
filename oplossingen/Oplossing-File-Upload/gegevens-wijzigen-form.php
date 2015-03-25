
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
        <style> .profile-picture{width: 20%;}</style>
    </head>
    <body>
		
		<div> <?php echo $_SESSION['melding']['bericht'] ?></div>

		<form enctype="multipart/form-data" method="post" action="gegevens-wijzigen-process.php">             
            <ul>                
				<li>
					<label for="profile_picture">Profielfoto
						
						<img class="profile-picture" src="" alt="Profielfoto">
					
					</label>
				</li>
					
				<li>	
					<input type="file" id="profile_picture" name="profile_picture">
				</li>

				<li>
					<label for="email">e-mail</label>
					<input type="text" id="email" name="email" value="<?php echo $email ?>">
				</li>

			</ul>

			<input type="submit" value="Gegevens opslaan" name="gegevensOpslaan">
		</form>   

    </body>
</html>