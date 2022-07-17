<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Dea");
var_dump($company);

$company->programmer = new BackendProgrammer("Dea");
var_dump($company);

$company->programmer = new FrontendProgrammer("Dea");
var_dump($company);

sayHelloProgrammer(new Programmer("Dea"));
sayHelloProgrammer(new BackendProgrammer("Dea"));
sayHelloProgrammer(new FrontendProgrammer("Dea"));