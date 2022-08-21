<?php

switch ($_REQUEST["acao"]) {


  case "save": /* caso a request acão for save, a query vai executar e criar um novo usuario */
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $birthDate = $_POST["birthDate"];

    $sql = "INSERT INTO usuarios(name, email, password , birthDate) VALUES ('{$name}', '{$email}', '{$password}' ,'{$birthDate}')";


    $res = $conn->query($sql);

    if ($res == true) {
      print "<script> alert('cadastro feito com sucesso!') </script>";
      print "<script> location.href='?list' </script>";
    } else {
      print "<script> alert('Não foi possivel cadastrar') </script>";
      print "<script> location.href='?list' </script>";
    }
    break;

  case "edit": /* caso a request acão for edit, a query vai executar e editar o usuario */
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $birthDate = $_POST["birthDate"];
    
  $sql = "UPDATE usuarios SET name='{$name}', email='{$email}', password='{$password}', birthDate='{$birthDate}' WHERE id=".$_REQUEST["id"];

  
    $res = $conn->query($sql);

    if ($res == true) {
      print "<script> alert('cadastro atualizado com sucesso!') </script>";
      print "<script> location.href='?list' </script>";
    } else {
      print "<script> alert('Não foi possivel atualizar') </script>";
      print "<script> location.href='?list' </script>";
    }
    break;

  case "delete": /* caso a request acão for delete, a query vai executar e apagar o usuario */

    $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);

    if ($res == true) {
      print "<script> alert('usuario deletado com sucesso!') </script>";
      print "<script> location.href='?list' </script>";
    } else {
      print "<script> alert('Não foi possivel deletar') </script>";
      print "<script> location.href='?list' </script>";
    }
    break;

  default;
}
