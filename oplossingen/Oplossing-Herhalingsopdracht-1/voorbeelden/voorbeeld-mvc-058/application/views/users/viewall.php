<form action="<?php echo BASEPATH_HARDCODED ?>users/add/" method="post">
	<label for="email">Emailadres:</label>
	<input type="text" name="email" name="email"/>
	<br />
	<label for="password">Paswoord:</label>
	<input type="text" name="password" id="password"/>
	
	<br />
	<input type="submit" value="toevoegen">
</form>
<br/><br/>

<ol>
	<?php $number = 0?>
	
	<?php foreach ($users as $user):?>
		<a class="big" href="<?php echo BASEPATH_HARDCODED ?>users/view/<?php echo $user['User']['id']?>/<?php echo strtolower(str_replace(" ","-",$user['User']['email']))?>">
		<span class="item">
		<?php echo $user['User']['email']?></a> - <a class="big" href="<?php echo BASEPATH_HARDCODED ?>users/delete/<?php echo $user['User']['id']?>">Verwijder gebruiker</a>
		</span>
		<br/>
	<?php endforeach?>
</ol>