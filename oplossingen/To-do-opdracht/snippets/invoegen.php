
<!-- INVOEGEN -->
<div class="container"> 								
		<h2>Todo toevoegen</h2>

		<form id="add" action="<?php echo $_SERVER[ 'PHP_SELF' ] ?>" method="POST">

			<ul>

				<li>

					<label for="taak">Beschrijving: </label>
				
					<input type="text" id="taak" name="taak">
				
				</li>

			</ul>

			<input class="submit" type="submit" name="submit" value="Toevoegen">

		</form>
</div>
<!-- EINDE INVOEGEN -->

    </body>

</html>