<?php

require_once 'EmployeeInterface.php';
require_once 'Worker.php';
require_once 'ManagerInterface.php';
require_once 'Manager.php';
require_once 'AbstractEmployee.php';


$worker1 = new Worker('Федор', 'worker', 1500, new DateTime("2007-08-12"));
$worker2 = new Worker('Андрей', 'worker', 1200, new DateTime("2009-10-02"));
$worker3 = new Worker('Марина', 'worker', 1700, new DateTime("2002-02-20"));
$worker4 = new Worker('Кирил', 'worker', 2100, new DateTime("2003-05-15"));
$worker5 = new Worker('Александр', 'worker', 1900, new DateTime("2015-11-01"));
$worker6 = new Worker('Виктор', 'worker', 2400, new DateTime("2012-08-19"));

$worker6->getName();


$manager1 = new Manager('Bob', 'Manager', 3400,  new DateTime("2010-05-15"));
$manager1->addEmployee($worker1);
$manager1->addEmployee($worker2);
$manager1->addEmployee($worker3);

$manager2 = new Manager('Robert', 'Manager', 2800,  new DateTime("2017-06-30"));
$manager2->addEmployee($worker6);
$manager2->addEmployee($worker5);
$manager2->addEmployee($worker4);



printf('Количество сотрудников manager2: %s<br>', $manager2->getCountEmployees());
printf('Зарплата manager2: %s<br>', $manager2->getSalary());

//$manager2->deleteEmployee($worker6);
$manager2->deleteEmployeeByName('Виктор');

printf('Количество сотрудников manager2: %s<br>', $manager2->getCountEmployees());
printf('Зарплата manager2: %s<br>', $manager2->getSalary());

var_dump($manager2);
