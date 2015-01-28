<?php 
      
    // Aantal seconden in ...    
    $minuut         =   60; 
    $uur            =   60 * $minuut; 
    $dag            =   24 * $uur; 
    $week           =   7 * $dag; 
    $maand          =   31 * $dag; 
    $jaar           =   365 * $dag; // officieel 365.2425 
  
    $gegevenSeconden    =   221108521; 
          
    $aantalMinuten  =   floor( $gegevenSeconden / $minuut ); 
    $aantalUren     =   floor( $gegevenSeconden / $uur );    
    $aantalDagen    =   floor( $gegevenSeconden / $dag ); 
    $aantalWeken    =   floor( $gegevenSeconden / $week ); 
    $aantalMaanden  =   floor( $gegevenSeconden / $maand ); 
    $aantalJaren    =   floor( $gegevenSeconden / $jaar ); 
      
?> 
  
<!DOCTYPE html> 
<html> 
<head> 
    <title>Oplossing if else: deel2</title> 
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head> 
<body class="php-inleiding-oplossing"> 
  
    <h1>Oplossing if else: deel2</h1> 
  
    <h2>Aantal seconden in een ...</h2> 
  
    <ul> 
        <li>minuut: <?php echo $minuut ?></li> 
        <li>uur: <?php echo $uur ?></li> 
        <li>dag: <?php echo $dag ?></li> 
        <li>week: <?php echo $week ?></li> 
        <li>maand (31): <?php echo $maand ?></li> 
        <li>jaar (365): <?php echo $jaar ?></li> 
    </ul> 
  
    <h1>Aantal ... in <?php echo $gegevenSeconden ?> seconden</h1> 
  
    <ul> 
        <li>minuten: <?php echo $aantalMinuten ?></li> 
        <li>uren: <?php echo $aantalUren ?></li> 
        <li>dagen: <?php echo $aantalDagen ?></li> 
        <li>weken: <?php echo $aantalWeken ?></li> 
        <li>maanden (31): <?php echo $aantalMaanden ?></li> 
        <li>jaren (365): <?php echo $aantalJaren ?></li> 
    </ul> 
  
</body> 
</html>