<?php
 
	$regex 			= 	"";
	$string 		= 	"";
	$resultaat 		= 	"";


	if  ( isset($_POST['submit'] ) ) 
		
		{

			$regex 			= 	$_POST['regexInput'] ;
			$replaceString	= 	"<span class='result' >#</span>" ;
			$string 		= 	$_POST['stringInput'] ;

			$resultaat 		=  preg_replace( "/[" . $regex  . "]/" , $replaceString, $string);

		}	

 $result1Pattern 	= 	"/[a-du-zA-DU-Z]/";
 $result1Replace 	= 	"<span class='result' >#</span>" ;
 $result1String 	= 	"Memory can change the shape of a room; it can change the color of a car. And memories can be distorted. They're just an interpretation, they're not a record, and they're irrelevant if you have the facts.";
	
 $result1Deel2 = preg_replace( $result1Pattern, $result1Replace, $result1String );


 $result2Pattern 	= 	"[colo[u]?r]";
 $result2Replace 	= 	"<span class='result' >#</span>" ;
 $result2String 	=	"Zowel colour als color zijn correct Engels."; 

 $result2Deel2 = preg_replace( $result2Pattern, $result2Replace, $result2String );


 $result3Pattern 	= 	"[1]\d+";
 $result3Replace 	= 	"<span class='result' >#</span>" ;
 $result3String 	=	"1020 1050 9784 1560 0231 1546 8745"; 

 $result3Deel2 = preg_replace( $result3Pattern, $result3Replace, $result3String );

	 
	 



?>

<!DOCTYPE html>
<html>
<head>
	<title>RegEx Tester</title>
	<style> body{font-family: arial; font-size: 20px;} .result{color:lightgreen; font-weight: bold;} </style>
</head>
<body>


	<h1>RegEx Tester</h1>


	<form method="POST" >
		
		<p><label>Regular expression</label>
		<input type="text" name="regexInput" value="<?php echo  $regex ?>" ></p>

		<p><label>String</label></p>
		<p><input style="width:320px" type="text" name="stringInput" value="<?php echo $string  ?>" ></p>

		<p><input type="submit" name="submit" value="Uitvoeren"></p>

	</form>

	<p> <?php echo "Resultaat: " .  $resultaat ?></p>


	<h1> Deel 2 </h1>

	<ul>
	    <li> 

	    	<p> voorwaarde: match alle letters tussen a en d, en u en z (hoofdletters inclusief)</p>
	     	<p> string: Memory can change the shape of a room; it can change the color of a car. And memories can be distorted. They're just an interpretation, they're not a record, and they're irrelevant if you have the facts. </p>
	     	<p> oplossing: <?php echo $result1Deel2 ?> </p>

	    </li> 

	     <li> 

	    	<p> voorwaarde: Match zowel colour als color </p>
	     	<p> string: Zowel colour als color zijn correct Engels. </p>
	     	<p> oplossing: <?php echo $result2Deel2 ?> </p>

	    </li> 	

 		<li> 

	    	<p> voorwaarde: Match enkel de getallen die een 1 als duizendtal hebben.</p>
	     	<p> string: 1020 1050 9784 1560 0231 1546 8745	 </p>
	     	<p> oplossing: <?php echo $result3Deel2 ?> </p>

	    </li> 	

	    <li> 

	    	<p> voorwaarde: Match alle data zodat er enkel een reeks "en" overblijft.</p>
	     	<p> string: 24/07/1978 en 24-07-1978 en 24.07.1978	 </p>
	     	<p> oplossing: <?php echo $result4Deel2 ?> </p>

	    </li> 	

    	
	</ul>
	


</body>
</html>