<?php

namespace App\models;

use App\models\Conection;

class User
{

  public static function getAll()
  {

    $conn = Conection::conect();
    $sql = "SELECT * FROM user";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
}
