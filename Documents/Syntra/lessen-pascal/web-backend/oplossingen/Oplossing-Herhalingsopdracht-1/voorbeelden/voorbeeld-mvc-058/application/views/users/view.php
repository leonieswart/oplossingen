<h2><?php echo $users['User']['email']?></h2>

<ul>
	<li>Email: <?php echo $users['User']['email']?></li>
	<li>Paswoord: <?php echo $users['User']['password']?></li>
</ul>
	<a class="big" href="<?php echo BASEPATH_HARDCODED ?>users/delete/<?php echo $users['User']['email']?>">
	<span class="item">
	Delete this item
	</span>
	</a>