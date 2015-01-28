	    <?php
	
 				switch ($_GET["link"]) 

		 		//case 1

				{	case 'opleiding': ?>

			 		<iframe src="CV.pdf" height="700px" width="70%"> </iframe>
					
		<?php				
					break;

				//case 2

					case 'werk': 

					foreach ($images as $id => $value): ?>

              				<div class="container" >

			                    <h5> <?php echo $value['titel']; ?> </h5>	

								<p> <?php echo $value['datum']; ?> </p>

			                 	<img class="img" src=" <?php echo $value['afbeelding'] ?> " alt="<?php echo $value['beschrijving']; ?>">



		              		</div>
		        
        			<?php endforeach;

        			break;

        		//case 3

        			case 'contact': 

        			$formclass = "contact" ?>

        			<?php

        			if (isset($_POST['submit'])) 

        			{
        				$formclass = "contactSubmit"; ?>

        				<div class="bevestig">
	        				<p> 	<?php echo "Naam: " . $_POST['naam']; ?> 			</p>
	        				<p> 	<?php echo "Voornaam: " . $_POST['voornaam']; ?> 	</p>        				
	        				<p> 	<?php echo "E-mail: " . $_POST['email']; ?> 		</p>
	        				<p> 	<?php echo "Bericht: " . $_POST['bericht']; ?> 		</p>
	        			</div>
				<?php
        				
        			};

        			?>

        			<form class="<?php echo "$formclass";?>" method="POST">

        				<label>		Naam:		</label>	<input type="text" 		value="naam"		name="naam">
        				<label>		Voornaam:	</label>	<input type="text" 		value="voornaam"	name="voornaam">
        				<label>		E-mail:		</label>	<input type="text" 		value="email"		name="email">
        				<label>		Bericht:	</label>	<input type="multiple" 	value="bericht"		name="bericht">

        				<input type="submit" value="Verzend" name="submit">	

        			</form>

				<?php

					break;

				//case 4

					case 'blog': ?>

					<iframe src="https://github.com/leonieswart" height="700px" width="70%"> </iframe>


<?php 				break;

				//case default

				default;

				break;

				};

	    	?>