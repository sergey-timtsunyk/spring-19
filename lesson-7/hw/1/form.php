
<?php
session_start();
if (!empty($_REQUEST['name'] && $_REQUEST['nikname'] && $_REQUEST['email'] && $_REQUEST['pass'])) {
    $_SESSION['name'] = $_REQUEST['name'];
    $_SESSION['nikname'] = $_REQUEST['nikname'];
    $_SESSION['email'] = $_REQUEST['email'];
    $_SESSION['password'] = $_REQUEST['pass'];
    $_SESSION['time'] = time();
} else session_destroy();
?>

<form action="" method="post">
    <h4>Заполните все поля для регистрации!</h4>
    <label>Введите Имя</label>
    <input type="text" name="name"><br>
    <label>Введите Ваш Ник</label>
    <input name="nikname"><br>
    <label>Введите email</label>
    <input type="email" name="email"><br>
    <label>Введите Пароль</label>
    <input type="password" name="pass"><br>
    <input type="submit" name="submit" value="Отправить">
</form>