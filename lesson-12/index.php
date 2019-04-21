<?php

require_once 'PDOCreator.php';
require_once 'User.php';

$pdo = PDOCreator::getPDO();

//$sql = 'SELECT * FROM users WHERE id = :user_id';
$sql = 'SELECT * FROM users';

$sht = $pdo->prepare($sql);
$sht->setFetchMode(PDO::FETCH_CLASS, 'User');



$sht->execute([':user_id' => 3]);

var_dump($sht->fetchAll());


$sht->bindValue(':user_id', 2);
$sht->execute();

var_dump($sht->fetch());
