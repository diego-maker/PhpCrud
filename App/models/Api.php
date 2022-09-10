<?php

namespace App\models;


class Api {

  public $nameApi = 'Api rotas';
  public $versionApi = '0.0.1';
  public $contact = "droberto950@gmail.com";
  public $developer = 'diego roberto';

  public static function getApi(){
    return new Api;
  }
}