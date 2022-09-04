<?php 

$id_usuario = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id=".$id_usuario.";";
$res = $conn->query($sql);

$row = $res->fetch_object();

?>


<h1>Novo Usuario</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar" />
    <input type="hidden" name="id" value="<?php print $row->id ?>" />
    <div class="mg-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome ?>" />
    </div>

    <div class="mg-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email ?>" />
    </div>

    <div class="mg-3">
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control" value="<?php print $row->senha ?>" />
    </div>

    <div class="mg-3">
        <label>Data de Nascimento:</label>
        <input type="date" name="datanasc" class="form-control" value="<?php print $row->data_nasc ?>" />
    </div>

    <div class="mg-3">
        
        <input type="submit" value="Cadastrar" class="btn btn-primary" />
    </div>

</form>