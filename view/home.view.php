<?php require 'partials/header.php' ?>

<h1>Home Page </h1>

<?php foreach ($data as $user): ?>
        <li> <?= $user->username ?></li>
<?php endforeach; ?>


<h3>Submit Data</h3>
<form action="user" method="POST">
    <input type="text" name="username" />
    <input type="submit" value="submit" />
</form>
<?php require 'partials/footer.php' ?>

