<?php

	$searchString	=	'Dit is een voorbeeldstring';
	$replaceString	=	'<span class="result">#</span>';
	
	// Preg match
	$regExp01	=	'/i/';
	$regExp01Result	=	preg_match($regExp01, $searchString);	
	
	$regExp02	=	'/a/';
	$regExp02Result	=	preg_match($regExp02, $searchString);	
	
	$regExp03	=	'---a/';
	$regExp03Result	=	@preg_match($regExp03, $searchString);
	
	
	// Preg match all
	$regExp04	=	'/[\w]+/';
	$regExp04Result	=	preg_match_all($regExp04, $searchString, $regExp04ResultArray);
	
	$regExp05	=	'/[\d]+/';
	$regExp05Result	=	preg_match_all($regExp05, $searchString, $regExp05ResultArray);	
	
	$regExp06	=	'---a/';
	$regExp06Result	=	@preg_match_all($regExp06, $searchString, $regExp06ResultArray);	

	
	
	// Preg replace
	$regExp07	=	'/[\w]+/';
	$regExp07Result	=	preg_replace($regExp07, $replaceString, $searchString);
	
	$regExp08	=	'/[\d]+/';
	$regExp08Result	=	preg_replace($regExp08, $searchString, $searchString);	
	
	$regExp09	=	'---a/';
	$regExp09Result	=	@preg_replace($regExp09, $searchString, $searchString);	


?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld regular expression functions</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">
		
		<style>
			article
			{
				border-bottom:1px solid #EEEEEE;
			}
			
			.string
			{
				background-color:lightyellow;
			}
			
			.result
			{
				background-color:lightgreen;
			}
		</style>

		<h1>Voorbeeld regular expression functions</h1>
		
			<article>
			
				<h2>preg_match($regex, $string)</h2>
				
				<h3>Regular expression 01</h3>
				<p>De regular expression <code><?php echo $regExp01 ?></code> op de string <span class="string"><?php echo $searchString ?></span> heeft het resultaat <span class="result"><?php echo $regExp01Result ?></span>
				</p>
				
				<h3>Regular expression 02</h3>
				<p>De regular expression <code><?php echo $regExp02?></code> op de string <span class="string"><?php echo $searchString ?></span> heeft het resultaat <span class="result"><?php echo $regExp02Result ?></span>
				</p>
				
				<h3>Regular expression 03</h3>
				<p>De regular expression <code><?php echo $regExp03 ?></code> op de string <span class="string"><?php echo $searchString ?></span> heeft het resultaat <span class="result"><?php var_dump($regExp03Result) ?></span>
				</p>
		
			</article>
			
			
			<article>
			
				<h2>preg_match_all($regex, $string, $dumpArray)</h2>
				
					<h3>Regular expression 04</h3>
					<p>De regular expression <code><?php echo $regExp04 ?></code> op de string <span class="string"><?php echo $searchString ?></span> heeft het resultaat <span class="result"><?php echo $regExp04Result ?></span>
						<section>
							array:
								<ul>
									<?php foreach($regExp04ResultArray[0] as $result): ?>
									
									<li><span class="result"><?php echo $result ?></span></li>
									
									<?php endforeach ?>
								</ul>
						</section>
					</p>	
					
					<h3>Regular expression 05</h3>
					<p>De regular expression <code><?php echo $regExp05 ?></code> op de string <span class="string"><?php echo $searchString ?></span> heeft het resultaat: <span class="result"><?php echo $regExp05Result ?></span>
					
					<section>
						array:
							<ul>
								<?php foreach($regExp05ResultArray[0] as $result): ?>
								
									<li><span class="result"><?php echo $result ?></span></li>
								
								<?php endforeach ?>
							</ul>
							<span class="result">(geen resultaat)</span>
					</section>
					</p>	
					
					<h3>Regular expression 06</h3>
					<p>De regular expression <code><?php echo $regExp06 ?></code> op de string <span class="string"><?php echo $searchString ?></span> heeft het resultaat: <span class="result"><?php var_dump($regExp06Result) ?></span>
					
					<section>
						array:
							<ul>
								<?php foreach($regExp06ResultArray[0] as $result): ?>
								
									<li><span class="result"><?php echo $result ?></span></li>
								
								<?php endforeach ?>
							</ul>
							<span class="result">(geen resultaat)</span>
					</section>
					</p>
			
			</article>
			
			<article>
		
				<h2>preg_replace($regex, $replaceString, $exampleString)</h2>
				
					<h3>Regular expression 07</h3>
					<p>De regular expression <code><?php echo $regExp07 ?></code> op de string <span class="string"><?php echo $searchString ?></span> heeft het resultaat <?php echo $regExp07Result ?></p>
					
					
					<h3>Regular expression 08</h3>
					<p>De regular expression <code><?php echo $regExp08 ?></code> op de string <span class="string"><?php echo $searchString ?></span> heeft het resultaat <?php echo $regExp08Result ?></p>
				
					
					<h3>Regular expression 09</h3>
					<p>De regular expression <code><?php echo $regExp09 ?></code> op de string <span class="string"><?php echo $searchString ?></span> heeft het resultaat <?php var_dump($regExp09Result) ?></p>
			
			</article>
		
	</section>

</body>
</html>