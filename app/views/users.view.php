<?php require 'app/views/partials/header.php'; ?>
<h1> All users </h1>
<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->name ?></li>
    <?php endforeach; ?>
</ul>

<form action="/users" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

</body>

</html>