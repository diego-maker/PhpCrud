<?php
namespace App\services;

use App\models\Api;

class ApiService {

  public static function getAp(){
    return Api::getApi();
  }
}