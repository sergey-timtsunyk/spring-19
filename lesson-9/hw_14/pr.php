<?php
error_reporting(E_ALL);
// Сессия
//
// 1) Создайте страничку с формой (form.php), в которой будут поля: Имя, Ник, Емайл и Пароль.
// При вводе эти данные сохраняются в сессию.
// Добавить страницу логина (login.php) c полями: логин и пароль, логин - может быть как Емайл так и Ник, которые ввел пользователь.
// При правильном вводе пользователь попадает на страницу кабинета (profile.php), где выводятся его данные из формы.
// Дополнительно можно добавить вывод времени когда была заполнена форма, а также возможность редактировать данные на странице profile.php.
// Для выполнения использовать сессию.
session_start();

if (isset($_POST['login']) && isset($_POST['pwd'])) {
    $pass = $_POST['login'];
    $login = $_POST['pwd'];
}


if (isset($_POST['chname']) && isset($_POST['chnikname']) && isset($_POST['chemail']) && isset($_POST['chpassword'])) {
    $_SESSION['name'] = $_POST['chname'];
    $_SESSION['nikname'] = $_POST['chnikname'];
    $_SESSION['email'] = $_POST['chemail'];
    $_SESSION['password'] = $_POST['chpassword'];

    $pass = $_POST['chnikname'];
    $login =  $_POST['chpassword'];
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
        h1 {text-transform: capitalize;}
        form div {display: flex; margin: .6em 0;}
        form label {min-width: 8em;}
        form input {min-width: 12em;}
    </style>
</head>
<body>
<h1>страница кабинета</h1>
<p></p>

<?php

$pass = $_POST['pwd'];
$login = $_POST['login'];

if (isset($_POST['login']) && isset($_POST['pwd'])) {
    if (($_SESSION['nikname'] == $_POST['login']) || ($_SESSION['email'] == $_POST['login']) && ($_SESSION['password'] == $_POST['pwd'])) {
        ?>
        <form class="" action="" method="post">
            <div class="">
                <label for="">Имя</label>
                <input type="text" name="chname" value="<?php echo $_SESSION['name']; ?>" required>
            </div>
            <div class="">
                <label for="">Ник</label>
                <input type="text" name="chnikname" value="<?php echo $_SESSION['nikname']; ?>" required>
            </div>
            <div class="">
                <label for="">Емайл</label>
                <input type="email" name="chemail" value="<?php echo $_SESSION['email']; ?>" required>
            </div>
            <div class="">
                <label for="">Пароль</label>
                <input type="password" name="chpassword" value="<?php echo $_SESSION['password']; ?>" required>
            </div>
            <div class="">
                <label for=""></label>
                <input type="submit" name="submit" value="Редактировать">
            </div>
        </form>
        <?php
    }
} else {
    ?>
    <div>не верные логин или пароль</div>
    <div>перейдите на форму <a href="dz-14-login.php">логина</a> и введите корректные значения</div>
    <?php
};
?>

</body>
</html>
