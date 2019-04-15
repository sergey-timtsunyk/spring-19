<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form enctype="multipart/form-data" method="POST">
    <p>
        <input type="text" name="login" placeholder="Login"/><br/>
        <input type="password" name="password" placeholder="Password"/><br/>
        <input type="submit" value="Submit"></p>
</form>
</body>
</html>

<?php
session_start();
if ($_POST['login']) {
if ($_POST['login'] === ($_SESSION['nickname']) || $_POST['login'] === $_SESSION['email']
AND $_POST['password'] === $_SESSION['password']) {
    header('Location: /hw14_profile.php');
} else {
    echo "<script>alert('Credentials are invalid. Try again!')</script>";
}}