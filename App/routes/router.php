<?php

namespace App\routes;

use App\routes\routeSwitch;


class router extends routeSwitch {

  public function run(string $requestUrl){
    $route = substr($requestUrl, 17);
   if($route === '' ){
        $this->api();
    }
    else{
     $this->route($route);
    }
  }
}