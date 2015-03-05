
<!-- GEDEELTE NOG TE DOEN -->
		<div class="container <?php echo $hide?>">

			<h2>Nog te doen:</h2>
								
			<ul>

				<!-- als $checkDone false is dan tonen we onderstaande boodschap anders loopen we de foreach met taken uit -->
				<?php if ($checkToDo == false): ?>

					<p> <?php echo "Alles is klaar!" ?></p>
				
				<?php else: ?>

					<?php foreach ($_SESSION['taken'] as $taken => $value): ?>
						
						<!-- als er in de array verplaatsing true staat dan tonen we die taak hier -->
						<?php if ($_SESSION['verplaatsing'][$taken] == false): ?>
							
								<li>
											
									<form id="todo" action="<?php echo $_SERVER[ 'PHP_SELF' ] ?>" method="POST">

										<button title="Afvinken" name="afvinken" value="<?php echo $taken?>" class="status not-done"> <?php echo $value ?> </button>

										<button title="Verwijderen" name="verwijderen" value="<?php echo $taken?>">Verwijder</button>
								
									</form>

								</li>

							<?php endif ?>

					<?php endforeach ?>
				
				<?php endif?>
			
			</ul>

		</div>		
<!-- EINDE NOG TE DOEN -->		