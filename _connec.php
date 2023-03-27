<?php
define('DSN', 'mysql:host=localhost;dbname=pdo_quest');
define('USER', 'eric');
define('PASS', 'pat');

$pdo = new \PDO(DSN, USER, PASS);
/*try {
    $pdo = new \PDO(DSN, USER, PASS);;
    foreach($pdo->query('SELECT * from friend') as $row) {
        print_r($row);
    }
    $pdo = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}*/