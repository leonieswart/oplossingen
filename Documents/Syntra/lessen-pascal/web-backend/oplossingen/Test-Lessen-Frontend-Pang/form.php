<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/portfolio.css" rel="stylesheet">  
    <link href="css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<!-- start container -->
  <div class="container">


<!-- bovenste navigatie start -->
    <div class="row">

         

        <div id="custom-bootstrap-menu" class="navbar navbar-default navbar-static-top" role="navigation">

			    <div class="container-fluid">
			        
				        <div class="navbar-header"><a class="navbar-brand" href="#"> JET<span>RO</span> </a>

				            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
				            </button>

				        </div>


				        <div class="collapse navbar-collapse navbar-menubuilder">

				            <ul class="nav navbar-nav navbar-right">
				                
				                <li><a href="#">Home</a></li>
				                <li><a href="#">About Us</a></li>
				                <li><a href="#">Portfolio</a></li>
				                <li><a href="#">Blog</a></li>
				                <li><a href="form2.html">Contact Us</a></li>

				            </ul>

				        </div>

			    </div>

		</div>

    </div> 
<!-- einde bovenste navigatie -->

<!-- achtergronden top -->
<div class="backgroundTOP TOPleft"></div>
<div class="backgroundTOP TOPright"></div>

<!-- Titel in titelbalk -->
       <div class="row containerTitel">
                      
               <p class="titel">  Portfolio   </p> 

       </div>   

       <div class="row">

         <h2>Bedankt! Wij hebben jouw gegevens goed ontvangen.</h2>
         
       </div>

       <div class="row">

       <p>Naam: <?php echo $_POST['txtNaam']; ?></p>
       <p>Postcode: <?php echo $_POST['txtPostcode']; ?></p>
       <p>E-mail: <?php echo $_POST['txtEmail']; ?></p>
       <p>Naam huisdier: <?php echo $_POST['txtHuisdier']; ?></p>
       <p>Ras huisdier: <?php echo $_POST['txtRas']; ?></p>
       <p>Leeftijd huisdier: <?php echo $_POST['txtLeeftijd']; ?></p>

          

       </div>




<!-- achtergronden bottom -->
<div class="backgroundBOTTOM BOTTOMleft"></div>
<div class="backgroundBOTTOM BOTTOMright"></div>


<!-- start footer -->
       <div class="row">
         <div class="col-md-4 footer">
          
              <p class="titel">ABOUT JETRO</p>

              <p class="footerTekst">

              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id ligula vel felis lacinia gravida sed ut metus. Cras eget ante vitae lacus porttitor sodales. 

              </p> 

              <p class="footerTekst">

              Suspendisse molestie mollis consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In congue laoreet tristique. In porttitor ac dui vitae vestibulum.

              </p>  

         </div>


         <div class="col-md-4 footer">
          
              <p class="titel">TWITTER WIDGET</p>  

              <p class="footerTekst">

              <span>@TwitterDesign</span> - Lorem ipsum dolor sit amet, malorum recteque reprehendunt ea.

              </p>

              <p class="footerTekst">

              <span>@Syntra</span> - Lorem ipsum dolor sit amet, malorum recteque.

              </p> 
              
              <p class="footerTekst">

              @TwitterDesign - Lorem ipsum dolor sit amet, malorum recteque reprehendunt ea.

              </p>

              <p class="footerTekst">
                
              Follow <span>@bestpdsfreebies</span>

              </p>

         </div>


         <div class="col-md-4 footer">

              <p class="titel">CONTACT US</p>

              <p class="footerTekst">

              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id ligula vel felis lacinia gravida sed ut metus. 

              </p> 

              <p class="footerTekst">
                
              info@bestpsdfreebies.com </br>
              1.222.333.444

              </p>

              <div class="logo">
                 <a href="#">  <img src="images/email.png" alt=""> </a>
                 <a href="#">  <img src="images/facebook.png" alt=""> </a>
                 <a href="#">  <img src="images/twitter.png" alt=""> </a>
                 <a href="#">  <img src="images/vimeo.png" alt=""> </a> 
                 <a href="#">  <img src="images/rss.png" alt=""> </a>
              </div>
         
         </div>

       </div>   
<!-- einde footer -->


  </div>
  <!-- einde container -->









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>