<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Abi";
$manager->sayHello("Izard");

$vp = new VicePresident();
$vp->name = "Abi";
$vp->sayHello("Izard");
