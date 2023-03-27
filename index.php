<?php
require_once '_connec.php';

// récupération de la liste des friends
$query = "SELECT * FROM friend";
$pdo = new \PDO(DSN, USER, PASS);
$stmt = $pdo->prepare($query);
$stmt->execute();
$friends = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Friends List</title>
</head>
<body>
<h1>Friends List</h1>
<ul>
    <?php foreach ($friends as $friend): ?>
        <li><?= $friend['firstname'] ?> <?= $friend['lastname'] ?></li>
    <?php endforeach; ?>
</ul>
<h2>Add a friend</h2>
<form method="post" action="add_friend.php">
    <label for="firstname">Firstname:</label>
    <input type="text" name="firstname" id="firstname" required maxlength="45"><br>
    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" id="lastname" required maxlength="45"><br>
    <input type="submit" value="Add">
</form>
</body>
</html>


