<?php 

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "budy";
$manager->sayHello ("joko");


$vp = new VicePresident();
$vp->name = "lll";
$vp->sayHello ("lolo");

