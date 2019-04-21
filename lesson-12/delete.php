<?php
require_once 'PDOCreator.php';

$pdo = PDOCreator::getPDO();

$sql = 'DELETE FROM `users` WHERE id=:id';

$sth = $pdo->prepare($sql);

$id = $_GET['id'];

var_dump($sth->execute([':id' => $id]));