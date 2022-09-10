<?php

require_once '../vendor/autoload.php';

$service = "App\services\\"."ApiService";

$response = call_user_func_array(array(new $service, 'getAp'), array(1));

echo json_encode(array('status'=>"succes", "data"=> $response));

