<?php
session_start();
if (!empty($_REQUEST['newName'])) {
    $_SESSION['name'] = $_REQUEST['newName'];
}
if (!empty($_REQUEST['newNikname'])) {
    $_SESSION['nikname'] = $_REQUEST['newNikname'];
}
if (!empty($_REQUEST['newEmail'])) {
    $_SESSION['email'] = $_REQUEST['newEmail'];
}
if (!empty($_REQUEST['newPass'])) {
    $_SESSION['password'] = $_REQUEST['newPass'];
}?>
<h3>Личний кабинет</h3>
<?php
echo "Время заполнения формы: " . date('r', $_SESSION['time']) . "<br>";
echo "Ваше имя: " . $_SESSION['name'] . "<br>";
echo "Ваш ник: " . $_SESSION['nikname'] . "<br>";
echo "Ваш email: " . $_SESSION['email'] . "<br>";
echo "Ваш Пароль: " . $_SESSION['password'] . "<br>";
echo "Изменение данных:";
?>

<form action="" method="post">
    <label>Новое имя</label>
    <input type="text" name="newName"><br>
    <label>Новый ник</label>
    <input name="newNikname"><br>
    <label>Новый email</label>
    <input type="email" name="newEmail"><br>
    <label>Новый Пароль</label>
    <input type="password" name="newPass"><br>
    <input type="submit" name="submit" value="Изменить">
</form>