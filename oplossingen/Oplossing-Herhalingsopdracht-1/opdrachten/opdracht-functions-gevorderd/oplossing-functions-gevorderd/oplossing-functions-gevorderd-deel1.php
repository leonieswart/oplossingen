<?php

	$md5HashKey 	= 	'd1fa402db91a7a93c4f414b8278ce073';
	$needle1			=	"2";
	$needle2			=	"8";
	$needle3			=	"a";

	function telKarakters1( $haystack, $needle )
	{
		$haystackCount =  strlen( $haystack );

		$needleAantal = substr_count ( $haystack, $needle );

		$needleProcent = ( $needleAantal / $haystackCount ) * 100;

		return $needleProcent;
	}

	function telKarakters2( $needle )
	{
		global $md5HashKey;

		$haystack = $md5HashKey;

		$haystackCount =  strlen( $haystack );

		$needleAantal = substr_count ( $haystack, $needle );

		$needleProcent = ( $needleAantal / $haystackCount ) * 100;

		return $needleProcent;
	}

	function telKarakters3( $needle )
	{
		$haystack = $GLOBALS['md5HashKey'];

		$haystackCount =  strlen( $haystack );

		$needleAantal = substr_count ( $haystack, $needle );

		$needleProcent = ( $needleAantal / $haystackCount ) * 100;

		return $needleProcent;
	}

	$eersteMethode 	=	telKarakters1( $md5HashKey, $needle1 );
	$tweedeMethode 	=	telKarakters2( $needle2 );
	$derdeMethode 	=	telKarakters3( $needle3 );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing functies gevorderd: deel1</title>
	</head>
	<body>
		
		<h1>Oplossing functies gevorderd: deel1</h1>

		<pre><?php // var_dump ( $GLOBALS ) ?></pre>
		<p>Het karakter "<?php echo $needle1?>" komt <?php echo $eersteMethode ?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $needle2?>" komt <?php echo $tweedeMethode ?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $needle3?>" komt <?php echo $derdeMethode ?>% voor in de string "<?php echo $md5HashKey ?>"</p>

	</body>
</html>