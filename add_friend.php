<?php
require_once '_connec.php';

// récupération des données du formulaire
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

// validation des données
if (empty($firstname) || empty($lastname) || strlen($firstname) > 45 || strlen($lastname) > 45) {
    header("Location: index.php");
    exit();
}

// insertion du nouveau friend dans la base de données
$query = "INSERT INTO friend (firstname, lastname) VALUES (?, ?)";
$pdo = new \PDO(DSN, USER, PASS);
$stmt = $pdo->prepare($query);
$stmt->execute([$firstname, $lastname]);

// redirection vers la page index.php
header("Location: index.php");
exit();
?>

