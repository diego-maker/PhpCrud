<h1> list users </h1>

<?php

$sql =  'SELECT * FROM usuarios';

$res = $conn->query($sql);

$qtd = $res->num_rows;

/* Aqui vai buscar os dados e listar na tela  */

if ($qtd > 0) {
  print "<table class='table table-hover table-striped table-bordered'>";

  print "<tr>";
  print "<th>" . "Id" . "</th>";
  print "<th>" . "Nome"  . "</th>";
  print "<th>" . "E-mail" . "</th>";
  print "<th>" . "Data de nascimento" . "</th>";
  print "<th>" . "Ações" . "</th>";

  print "</tr>";

  while ($row = $res->fetch_object()) {
    print "<tr>";
    print "<td>" . $row->id . "</td>";
    print "<td>" . $row->name . "</td>";
    print "<td>" . $row->email . "</td>";
    print "<td>" . $row->birthDate . "</td>";
    print "<td>"

      .
    /* button a baixo vai passar como parametro o "ID" e abrir a página edição */  
    "<button 
    class='btn btn-success' 
    onClick=\"location.href='?page=edit&id=" . $row->id . "';\" > Editar  
    </button> 

    <button 
    class='btn btn-danger' 
    onClick=\"if(confirm('tem certeza que deseja excluir?')){        
      location.href='?page=save&acao=delete&id=" . $row->id . "';  
    }else{false;}\" > Deletar  
    </button> " . "</td>";

    /* button a cima vai passar como parametro a ação "delete" e o "ID", se o confirm for true   */
    print "</tr>";
  }
  print "</table>";
} else {
  print "<p class=' alert alert-danger'> Não encontramos nenhum cadastro de usuario </p>";
}
