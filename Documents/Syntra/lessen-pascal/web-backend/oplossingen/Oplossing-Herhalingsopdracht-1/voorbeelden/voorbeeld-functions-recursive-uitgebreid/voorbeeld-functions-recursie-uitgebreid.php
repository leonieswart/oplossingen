<?php
	$string	=	'ab2cde';

	function containsNumber ( $string )
	{
		// Als de string leeg is, return dan false
		// Betekent dat er geen cijfer in de string is gevonden
		if ( $string == '' )
		{
			return false;
		}
		else
		{
			$firstChar =	substr ( $string, 0, 1 );

			if ( is_numeric ( $firstChar ) )
			{
				return true;
			}
			else
			{
				$nextPortion = substr( $string, 1 );
				return containsNumber( $nextPortion );
			}
		}
	}

	$containsNumber	=	containsNumber( $string );
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van een recursieve functie (uitgebreid)</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

    <section class="body">

        <h1>Voorbeeld van een recursieve functie (uitgebreid)</h1>

        <div>
        	<p>De string "<?= $string ?>" bevat <?= ( $containsNumber ) ? '' : 'geen' ?> nummers</p>
            <?php var_dump( $containsNumber ) ?>
        </div>

    </section>

</body>
</html>