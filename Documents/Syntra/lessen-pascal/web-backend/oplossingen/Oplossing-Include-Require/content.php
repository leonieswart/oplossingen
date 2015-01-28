
<!-- content -->

		<div class="content">
    
		      <?php foreach ($artikels as $id => $value): ?>

		              <div id="container" class= "multiple" >

		                    <h1 class="titel"> <?php echo $value['titel']; ?> </h1>

		                    <p class="paragraaf"> <?php echo (!$artikelBestaat) ? substr($value['inhoud'], 0, 100) . "...": $value['inhoud'];  ?> </p>
		                 
		              </div>
		        
		        <?php endforeach ?>

	    </div>

<!-- end content -->
