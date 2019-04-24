<?php

require_once 'User.php';
require_once 'DbUser.php';

if (!empty($_POST)) {
    $newUser = new User();
    !key_exists('firstName', $_POST) ?: $newUser->setFirstName($_POST['firstName']);
    !key_exists('lastName', $_POST) ?: $newUser->setLastName($_POST['lastName']);
    !key_exists('email', $_POST) ?: $newUser->setEmail($_POST['email']);
    !key_exists('phone', $_POST) ?: $newUser->setPhone($_POST['phone']);

    if (
        key_exists('password', $_POST)
        && key_exists('passwordConfirm', $_POST)
        && $_POST['password'] === $_POST['passwordConfirm']
    ) {
        $newUser->setPassword($_POST['password']);
    }


    $dsn = 'mysql:host=127.0.0.1;port=3307;dbname=test_db';
    $user = 'root';
    $pass = 'password';

    $pdo = new PDO($dsn, $user, $pass);

    $dbUser = new DbUser($pdo);
    $dbUser->create($newUser);


    header('Location: /users/users.php');
}



require_once 'add_user.html';