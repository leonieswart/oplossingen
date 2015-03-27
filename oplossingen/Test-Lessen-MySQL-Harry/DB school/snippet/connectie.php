<?php 			//connectie maken met DB school
				$connectie = new PDO("mysql:host=localhost;dbname=school", "root", "");

				//bericht wordt getoond indien connectie gelukt is
				$message	=	"Database connectie: gelukt. "; 

?>

