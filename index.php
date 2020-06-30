<?php
require_once "models/chambre.php";
require_once "models/batiment.php";
require_once "libs/Router.php";
define("BASE_URL","http://localhost/projet_poo_binome");

$router=new Router();
$router->route();