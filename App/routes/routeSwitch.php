<?php

namespace App\routes;

abstract class routeSwitch {

  protected function api(){
    header('Location: '.'http://localhost/PhP_Crud/public/index.php');
  
  }

  protected function route($url){
    

    switch($url){

      case 'api':
        header('Location: '.'http://localhost/PhP_Crud/public/api.php');

        break;
      case 'users':
        
        header('Location: '.'http://localhost/PhP_Crud/public/users.php');
        break;
    }
  }
}