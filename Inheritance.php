<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Dea";
$manager->sayHello("Izard");

$vp = new VicePresident();
$vp->name = "Dea";
$vp->sayHello("Izard");
