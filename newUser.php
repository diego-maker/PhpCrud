<h1> Novo usuario </h1>

<form action="?page=save" method="POST">
<input type="hidden" name="acao" value="save"></input>


<div class="mb-3">
    <label>Nome</label>
    <input type="text" name="name" class="form-control"></input>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control"></input>
  </div>
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="password" class="form-control"></input>
  </div>
  <div class="mb-3">
    <label>Data de nascimento</label>
    <input type="text" name="birthDate" class="form-control"></input>
  </div>
  <div class="mb-3">
    <button type="submit" class=" btn btn-primary">Cadastrar</button>
  </div>
</form>