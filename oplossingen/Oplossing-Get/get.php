<?php


	$artikels = array (

                        array( 'titel' => 'Ongeluk legt nucleaire reactor in zuidoosten Oekraïne stil',
                               'datum' => '25/01/2013',
                               'inhoud' => 'In het zuidoosten van Oekraïne is een ongeluk gebeurd in de nucleaire reactor, Zaporozje, de krachtigste van Europa, die daardoor stilligt. Dat heeft de Oekraïense premier Arseni Jatsenjoek bevestigd. Volgens energieminister Volodymyr Demchyshyn zou het ongeval geen gevaren met zich meebrengen en kan de reactor overmorgen al weer opgestart worden. <br/> <br/>Het gaat om de kernreactor in Zaporozje in het zuidoosten van het land. Zaporozje wordt beschouwd als de krachtigste kerncentrale van Europa en ligt ongeveer 570 kilometer ten zuidoosten van de hoofdstad Kiev. 

                                            De installatie werd in 1984 in bedrijf genomen. <br/> <br/> Jatsenjoek vroeg de minister van Energie snel een persconferentie te organiseren om duidelijk te maken "wanneer het probleem opgelost zou zijn" en te verduidelijken welke stappen er genomen zouden worden om de stroomvoorziening in Oekraïne te herstellen.

                                            <br/> <br/> Volgens het Russische persbureau Interfax gebeurde het ongeluk in de 1.000-megawattreactor nummer 3. Daardoor leek de energiecrisis in Oekraïne nog wat erger te worden, maar minister Demchyshyn verzekert dat de kernreactor overmorgen alweer normaal zal werken.',
                               
                               'afbeelding' => 'images/1.jpg',
                               'beschrijving' => 'afbeelding 1' ),





                        array( 'titel' => 'Bisschop zet parlement in rep en roer: "Fout te spreken van gedwongen adopties"',
                               'datum' => '05/08/2014',
                               'inhoud' => 'Monseigneur Herman Cosijns, secretaris-generaal van de Belgische Bisschoppen, heeft ophef veroorzaakt in het Vlaams Parlement. Tijdens een hoorzetting over de problematiek van de gedwongen adopties uit het verleden verklaarde Cosijns dat het fout is om te spreken van gedwongen adopties. "Er was een keuzemogelijkheid: zelf instaan voor de opvoeding van het kind of het kind afstaan voor adoptie". De uitspraken zorgden voor een golf van boosheid en verontwaardiging in de commissie. <br/> <br/> 

                                            Het Vlaams Parlement organiseert een reeks hoorzittingen over de kwestie van de gedwongen adopties. De voorbije tijd doken verhalen op over vrouwen die in de jaren \'60, \'70 en \'80 gedwongen werden hun pasgeborene af te staan ter adoptie. <br/> <br/> 

                                            Volgens Marleen Adriaens van de vrouwenbeweging Mater Matuta gaat het enkel voor de instelling Tamar in Lommel om zo 700 gevallen en zou het over heel België kunnen gaan om 30.000 gevallen. Adriaens schetste in de commissie een beeld van een heel systeem waarbij zowel kerkelijke instellingen, adoptiediensten, ouders, ziekenhuizen, gemeentediensten, enz... een rol hebben gespeeld. In die tijd was er ook geen duidelijk regelgevend kader rond adopties. <br/> <br/> 

                                            Toch is het volgens Mgr Cosijns, secretaris-generaal van de Belgische Bisschoppen, "fout" te spreken van "gedwongen adopties". Zo zaten de meisjes niet altijd "tegen hun wil" in de betrokken tehuizen. "De meisjes hadden twee mogelijkheden: zelf instaan voor de opvoeding van het kind, of het kind afstaan aan adoptie, aldus Cosijns. Voor de meesten was de opvang in een tehuis zelfs "een verlossende ervaring". 

                                            Mgr Cosijns ontkende ook dat er in de kerkelijke instellingen een circuit was waarin "grof geld" werd betaald voor adopties. "De berichten daarover moet ik met klem tegenspreken. De tehuizen die daarvoor verantwoordelijk waren ontvingen geen of weinig subsidies", klonk het.',

                               'afbeelding' => 'images/2.jpg',
                               'beschrijving' => 'afbeelding 2' ),





                        array( 'titel' => 'Plafond voor cash transacties van 3.000 naar 7.500 euro',
                               'datum' => '2/10/2014',
                               'inhoud' => 'Elke Sleurs (N-VA), staatssecretaris van Fraudebestrijding, zal het plafond van transacties met contant geld optrekken van 3.000 naar 7.500 euro. Ze doet zo een beperking van haar voorganger John Crombez (sp.a) teniet. <br/> <br/>

                                            Sinds 1 januari ligt het maximumbedrag in cash dat handelaars van klanten mogen aannemen, de zogenaamde cashdrempel, op 3.000 euro. De regering-Di Rupo had de maatregel genomen om te voorkomen dat er makkelijk geld werd witgewassen in bepaalde sectoren, zoals bijvoorbeeld de diamantensector.

                                            Die drempel wordt dus opnieuw verhoogd naar 7.500 euro, zo kondigde Sleurs aan bij de bespreking van de begroting in bevoegde Kamercommissie. <br/> <br/> 

                                            De staatssecretaris wil zich op die manier in lijn brengen met andere landen in Europa. Ook wil ze met die ingreep een aantal economische sectoren bijstaan, waar een risico op delokalisatie bestaat, zoals de sector van de tweedehandswagens.

                                            De oppositie reageert bitsig op het besluit van Sleurs. "Dit getuigt van uw gebrek aan ambitie inzake de strijd tegen het witwassen van geld", aldus Georges Gilkinet van Ecolo.

                                            Maar ook binnen de eigen meerderheid weekt de aankondiging reacties los. Roel Deseyn (CD&V) zei te vrezen dat er "een verkeerd signaal" naar "de slechte leerlingen" wordt gestuurd.',

                               'afbeelding' => 'images/3.jpg',
                               'beschrijving' => 'afbeelding 3' )
		);



  $artikelBestaat = false;
  $artikelBestaatNiet = false;

//is de id geset in array GET?
  if ( isset ( $_GET['id'] ) )

  { 

  //id = id in de GET array
    $id = $_GET['id'];

  // bestaat de id in array artikels?
    if ( array_key_exists( $id, $artikels ) ) 

        {
          // JA dan is $artikelBestaat TRUE
          $artikels = array($artikels[$id]);
          $artikelBestaat = true;
        } 
    
    else 

       {
        // NEE dan is $artikelBestaatNiet TRUE
        $artikelBestaatNiet = true;
       };
      
  };

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel=stylesheet href="css/get.css">


        <?php if ( !$artikelBestaat ): ?>
    
              <title>Oplossing get: deel1</title>

        <?php elseif ( $artikelBestaatNiet ): ?>

             <title>Oplossing get: deel1 - Het artikel dat u zoekt, bestaat niet.</title>
  
        <?php else: ?>
   
             <title>Oplossing get: deel1 - <?php echo $artikels[0]['titel'] ?></title>
  
        <?php endif ?>


    </head>

    <body>


    <?php if ( !$artikelBestaat ): ?>
    
              <h2>Oplossing get - deel1</h2>

        <?php elseif ( $artikelBestaatNiet ): ?>

             <h2>Oplossing get - deel1 - Het artikel dat u zoekt, bestaat niet.</h2>
  
        <?php else: ?>
   
             <h2>Oplossing get - deel1 - <?php echo $artikels[0]['titel'] ?></h2>
  
        <?php endif ?>



<?php if (!$artikelBestaatNiet): ?>
    
      <?php foreach ($artikels as $id => $value): ?>

              <div id="container" class= " <?php echo ( !$artikelBestaat) ? 'multiple' : 'single' ; ?> " >

                    <h1 class="titel"> <?php echo $value['titel']; ?> </h1>

                    <p class="datum"> <?php echo $value['datum']; ?> </p>

                 		<p> <img class="img" src=" <?php echo $value['afbeelding'] ?> " alt="<?php echo $value['beschrijving']; ?>">  </p>

                    <p class="paragraaf"> <?php echo (!$artikelBestaat) ? substr($value['inhoud'], 0, 100) . "...": $value['inhoud'];  ?> </p>

                    <a href="get.php?id=<?php echo $id ?>" class="meer"> Lees meer ></a>
                    
              </div>
        
        <?php endforeach ?>

<!-- uitbreiding -->
<?php else: ?>

  <p> Dit artikel bestaat niet. </p>

<?php endif ?>

<!-- uitbreiding zoeken -->

<form action="get.php" method="GET" class="formulier">
  
<label>Geef een zoekterm in:</label> <input type="text" name="zoekterm">
<input type="submit" value="zoek" name="submit">

</form>

<?php 

if ( isset($_GET['submit']) ) 

    {
                $zoekterm = $_GET['zoekterm'];
                var_dump($zoekterm);

                $containerArray = array();
                var_dump($containerArray);

                foreach ($artikels as $key => $value)
                  {

                    $array[] = $value['titel'];
                    var_dump($array);

                    $zoeken = array_search($zoekterm, $array);

                    var_dump($zoeken);

                    $positie = strpos($zoeken, $zoekterm);

                    var_dump($positie);

                    if ($zoeken !== false) {
                    $containerArray [$key] = $zoeken;
                    }




                  }

    };



?>



        
    </body>
</html>