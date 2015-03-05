<!doctype html>

<html>

    <head>

        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Examenopdracht Leonie Swart - To do applicatie</title>
        <link rel="stylesheet" href="css/examen.css">

    </head>


    <body>

    	<h1>To do lijstje </h1>

    	<div id="melding" class="<?php echo "$opmaak" ?>"> <?php echo "$melding";?> </div>

        <div id="scorebord">  

            <p class="titel"> To Do </p> 

            <p class="score"><?php echo $tellerToDo ?></p>

            <p class="titel"> Done </p> 

            <p class="score"><?php echo $tellerDone ?></p>

        </div>