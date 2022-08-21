<?php

  /* Definindo os parametros de acesso ao banco */
  define('HOST' , 'localhost'); /* Servidor utilizado */
  define('USER', 'root');  /*Usuario para acesar */
  define('PASS', '');     /* Senha para acessar */
  define('BASE', 'Cadastro');  /*Qual o nome da base de dados utilizada */

  $conn = new mysqli(HOST, USER, PASS, BASE);

