<?php

$value = "NewDev-service-auth";

$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');
$databaseTest = ($db->query('SELECT * FROM dockerSample'))->fetchAll(PDO::FETCH_OBJ);

?>

<html>
    <body>
        <h1>Hello, <?= $value ?>!</h1>
        <?php foreach($databaseTest as $row): ?>
            <p> Count <?= $row->name ?></p>
        <?php endforeach; ?>
    </body>
</html>
