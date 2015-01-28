<?php 
	
	$regex			=	'';
	$searchString	=	'';

	$result	=	false;


	if ( isset( $_POST[ 'submit' ] ) )
	{

		$regex			=	$_POST[ 'regex' ];
		$searchString	=	$_POST[ 'string' ];

		$replaceString	=	'<span>#</span>';

		$result 	=	preg_replace( '/' . $regex . '/', $replaceString, $searchString );
	}

?>

<!DOCTYPE html>
<html>
<head>
	
	<style>
		.result span
		{
			font-weight	:bold;
			color:	#FF0000;
		}
	</style>

</head>
	<body>
	

		<h1>Oplossing regular expressions</h1>
		
		
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
			
			<ul>
				<li>
					<label for="regex">Regular expression</label>
					<input type="text" name="regex" id="regex" value="<?= $regex ?>">
				</li>
				<li>
					<label for="string">String</label>
					<input type="text" name="string" id="string" value="<?= $searchString ?>">
				</li>
			</ul>
			<input type="submit" name="submit">
		</form>

		<?php if ( $result ): ?>
			<p class="result"><?= $result ?></p>
		<?php endif ?>

		<h1>1ste regex</h1>
		<p>/[a-du-zA-DU-Z]/</p>
		<p>Memory can change the shape of a room; it can change the color of 
a car. And memories can be distorted. They're just an interpretation, they're 
not a record, and they're irrelevant if you have the facts</p>

		<h1>2de regex</h1>
		<p>colou?r</p>
		<p>Zowel colour als color zijn correct Engels.</p>

		<h1>3de regex</h1>
		<p>1\d{3}</p>
		<p>(enkel de getallen die 1 als duizendtal hebben en niet groter zijn dan 1999: (?<=\s)1\d{3}</p>
		<p>1020 1050 9784 1560 0231 1546 8745</p>

		<h1>4de regex</h1>
		<p>[0-9]{2}[\/\-\.][0-9]{2}[\/\-\.][0-9]{4}</p>
		<p>([0-9]{1,4}[\-\.\/]?)+</p>
		<p>(\d{1,4}\S){3}</p>
		<p>24/07/1978 en 24-07-1978 en 24.07.1978</p>

	</body>
</html>