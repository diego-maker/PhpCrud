<?php

require_once '../vendor/autoload.php';

$service = "App\services\\"."UserService";

$response = call_user_func_array(array(new $service, 'getA'), array(1));

echo json_encode(array('status'=>"succes", "data"=> $response));

