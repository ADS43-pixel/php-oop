<?php

require_once "data/Person.php";

$eko = new Person("Dea", "Semarang");
$eko->name = "Dea";
$eko->sayHello("Anggia");

$joko = new Person("Abi", "Surabaya");
$joko->name = "Abi";
$joko->sayHello(null);

$eko->info();
$joko->info();