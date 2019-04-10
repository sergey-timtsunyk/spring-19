<?php

require_once 'EmployeeInterface.php';
require_once 'UserInterface.php';
require_once 'User.php';
require_once 'Worker.php';
require_once 'Manager.php';


$worker = new Worker('Иван', 33, 1200);

$user = new User();

$manager = new Manager('login', 'pass', 'name');
$manager = new Manager('login', 'pass', 'name');


var_dump(Manager::$count);

var_dump(Manager::getClassName());

$user->setLogin('Login');

$manager->setLogin('login');



initDateOfB($manager, '2001-10-23');
initDateOfB($worker, '1990-04-03');



function initDateOfB(EmployeeInterface $object, $date)
{
    $object->setDayOfB($date);
}

function checkLogin(UserInterface $object, $login, $password)
{
    if ($object->getLogin() == $login && $object->getPassword() == $password) {
        return true;
    }

    return false;
}