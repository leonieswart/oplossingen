		
<!-- GEDEELTE DONE! -->
		<div class="container <?php echo $hide?>">

			<h2>Done and done!</h2>
								
			<ul>

				<!-- als $checkDone false is dan tonen we onderstaande boodschap anders loopen we de foreach met taken uit -->
				<?php if ($checkDone == false): ?>

					<p> <?php echo "Werk aan de winkel..." ?></p>
				
				<?php else: ?>

					<?php foreach ($_SESSION['taken'] as $taken => $value): ?>
						
						<!-- als er in de array verplaatsing true staat dan tonen we die taak hier -->
						<?php if ($_SESSION['verplaatsing'][$taken] == true): ?>
							
								<li>
											
									<form id="done" action="<?php echo $_SERVER[ 'PHP_SELF' ] ?>" method="POST">

										<button title="Afvinken" name="afvinken" value="<?php echo $taken?>" class="status done"> <?php echo $value ?> </button>

										<button title="Verwijderen" name="verwijderen" value="<?php echo $taken?>">Verwijder</button>
								
									</form>

								</li>

							<?php endif ?>

					<?php endforeach ?>
				
				<?php endif?>
			
			</ul>

		</div>
<!-- EINDE DONE -->
