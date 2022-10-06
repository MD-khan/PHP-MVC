<?php require 'views/partials/header.php'; ?>

<h1> Task for The Day </h1>
<ul>
	<?php foreach ($users as $user) : ?>
		<li>
			<?= $user->name; ?>

		</li>
	<?php endforeach; ?>
</ul>

<form action="/names" method="POST">
	<input type="text" name="name">
	<button type="submit">Submit</button>
</form>


</body>

</html>