<?php

namespace App\services;
use App\models\User;


class UserService {

  public static function getA(){
    return User::getAll();
  }
}