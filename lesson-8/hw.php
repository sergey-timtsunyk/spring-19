<?php

$name = '';
$counter = 1;
$error = '';

if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'];
    $counter++;
}

if (!empty($_POST['name']) && strlen($_POST['name']) > 3) {
    $name = $_POST['name'];
} elseif (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
}

if (array_key_exists('name', $_POST) && strlen($_POST['name']) <= 3) {
    $error = 'Ник меньне 4 символов!';
}


setcookie('counter', $counter);
setcookie('name', $name);


echo "Добро пожаловать " . $name . "<br>";
echo "Посищений  страницы: " . $counter . "." . "<br>";
?>

<form action="" method="post">
    <input name="name" value="<?php echo $name; ?>">
    <input type="submit" value="Your Nik">
    <?php if (!empty($error)) {?>
        <p style="color: red"><?php echo $error;?></p>
    <?php }?>
</form>