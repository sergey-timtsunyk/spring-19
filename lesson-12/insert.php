<?php

require_once 'PDOCreator.php';

$pdo = PDOCreator::getPDO();

$sql = 'INSERT INTO users (`name`, `date_of_b`) value (:name, :date_of_b)';

$sth = $pdo->prepare($sql);


$name = $_GET['name'];
$dateOfB = $_GET['date'];

$sth->execute([':name' => $name, ':date_of_b' => $dateOfB]);

var_dump($pdo->lastInsertId());
