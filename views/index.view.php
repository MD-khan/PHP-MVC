<?php require 'views/partials/header.php'; ?>

<h1> Task for The Day </h1>
<ul>
	<?php foreach ($tasks as $task) : ?>
		<li>
			<?php if ($task->completed) : ?>
				<strike> <?= $task->description; ?> </strike>
			<?php else : ?>
				<?= $task->description; ?>
			<?php endif; ?>

		</li>
	<?php endforeach; ?>
</ul>

<form action="/names" method="POST">
	<input type="text" name="name">
	<button type="submit">Submit</button>
</form>


</body>

</html>