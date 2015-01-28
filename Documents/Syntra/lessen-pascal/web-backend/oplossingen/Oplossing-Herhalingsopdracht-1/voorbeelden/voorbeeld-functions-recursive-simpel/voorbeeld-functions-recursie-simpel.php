<?php

    $getal  =   3;

    function aftellen( $getal )
    {
        static $counter = 0;
        
        if ( $getal != 0 )
        {
            echo 'ik zit in de if-lus en het getal is ' . $getal . ' <br>';
            aftellen( --$getal );
        }
        else
        {
            echo 'ik zit in de else-lus<br>';
            echo 'Het getal is tot nul herleid';
        }

        ++$counter;

        var_dump( $counter );
    }


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van een recursieve functie (simpel)</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

    <section class="body">

        <h1>Voorbeeld van een recursieve functie (simpel)</h1>

        <div>
            <p>Het startgetal om af te tellen is <?= $getal ?></p>
            <?php aftellen( $getal ) ?>
        </div>

    </section>

</body>
</html>