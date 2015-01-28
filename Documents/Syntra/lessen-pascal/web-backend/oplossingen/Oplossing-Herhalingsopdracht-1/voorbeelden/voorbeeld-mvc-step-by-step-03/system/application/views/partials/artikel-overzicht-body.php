<h1>Body: Artikels</h1>

<ul>
	<?php foreach ($data['artikels'] as $artikel): ?>

		<li>
			<a href="<?php echo URL ?>/artikel/<?= $artikel['id'] ?>">
				<?= $artikel['titel'] ?>
			</a>
		</li>

	<?php endforeach ?>
</ul>