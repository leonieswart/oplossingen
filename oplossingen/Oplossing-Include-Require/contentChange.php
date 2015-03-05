<?php


$content = array ( 

					'weer' => 'weer.php',
					'redactie' => 'redactie.php',
					'contact' => 'contact.php'

				 );


  $link = false;
  $linkBestaatNiet = false;

//is de id geset in array GET?
  if ( isset ( $_GET['id'] ) )

  { 

  //id = id in de GET array
    $id = $_GET['id'];

  // bestaat de id in array artikels?
    if ( array_key_exists( $id, $content ) ) 

        {
          // JA dan is $artikelBestaat TRUE
          $content = array($content[$id]);
          $link = true;
        } 
    
    else 

       {
        // NEE dan is $artikelBestaatNiet TRUE
        $linkBestaatNiet = true;
       };
      
  };

?>