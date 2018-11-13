<!DOCTYPE html>
<html>
<head>
<title> Make Your Own PHP MVC, Part#1</title>
</head>
<body>
<nav> 
	<ul>
		<li> <a href="/about">  About </a> </li>
		<li> <a href="/contact"> Contact </a>  </li>
	</ul>
</nav>

<h1> Task for The Day </h1>
<ul> 
	<?php foreach($tasks as $task) : ?>
		<li>
			<?php if($task->completed) : ?>
				<strike> <?= $task->description; ?> </strike>
			<?php else: ?>
				<?= $task->description; ?>
			<?php endif; ?>

		</li>
	<?php endforeach; ?>
</ul>
</body>
</html>