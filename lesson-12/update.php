<?php
require_once 'PDOCreator.php';

$pdo = PDOCreator::getPDO();

$sql = 'UPDATE users SET name=:name WHERE id=:id';

$sth = $pdo->prepare($sql);


$id = $_GET['id'];
$name = $_GET['name'];

$sth->execute([':name' => $name, ':id' => $id]);

var_dump($sth->errorInfo());
var_dump($pdo->lastInsertId());