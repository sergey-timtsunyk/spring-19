<?php

require_once 'User.php';


$dsn = 'mysql:host=127.0.0.1;port=3307;dbname=test_db';
$user = 'root';
$pass = 'password';

$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute( PDO::ATTR_CASE, PDO::CASE_NATURAL );

$sql = 'SELECT * FROM users';

$sht = $pdo->prepare($sql);

$sht->setFetchMode(PDO::FETCH_CLASS, 'User');
$sht->execute();

$users = $sht->fetchAll();

require_once 'show_user.html';
