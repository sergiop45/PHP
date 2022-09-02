
<h1>Novo Usuario</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar" />
    <div class="mg-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" />
    </div>

    <div class="mg-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" />
    </div>

    <div class="mg-3">
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control" />
    </div>

    <div class="mg-3">
        <label>Data de Nascimento:</label>
        <input type="date" name="datanasc" class="form-control" />
    </div>

    <div class="mg-3">
        
        <input type="submit" value="Cadastrar" class="btn btn-primary" />
    </div>

</form>