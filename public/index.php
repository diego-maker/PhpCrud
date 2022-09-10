<?php

require_once '../vendor/autoload.php';
use App\routes\router;


$url =  $_SERVER['REQUEST_URI'];

$router = new router;

$router->run($url);
