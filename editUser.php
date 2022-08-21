<h1> Editar usuario </h1>
<?php
  $sql = "SELECT * FROM usuarios WHERE id =" .$_REQUEST["id"];
  $res = $conn->query($sql);
  $row = $res->fetch_object();
?>

<form action="?page=save" method="POST">
<input type="hidden" name="acao" value="edit"></input>
<input type="hidden" name="id" value="<?php print $row -> id; ?>"></input>


<div class="mb-3">
    <label>Nome</label>
    <input type="text" name="name" class="form-control" value="<?php  print $row -> name; ?>"></input>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="<?php print $row -> email; ?>"></input>
  </div>
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="password" class="form-control" required ></input>
  </div>
  <div class="mb-3">
    <label>Data de nascimento</label>
    <input type="text" name="birthDate" class="form-control" value="<?php print $row -> birthDate; ?> "></input>
  </div>
  <div class="mb-3">
    <button type="submit" class=" btn btn-primary">Cadastrar</button>
  </div>
</form>