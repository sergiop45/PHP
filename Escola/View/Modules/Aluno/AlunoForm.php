<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="View/Modules/Style/form.css">
</head>
<body>
    
    <div>
        <h3>Formulario de Cadastro</h3>
        <br>

        <form action="aluno/save" method="post" id="formulario">

            <div class="label-input">
                <label for="">Nome:</label>
                <input type="text" name="nome" >
            </div>

            <div class="label-input">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" >
            </div>

            <div class="label-input">
                <label for="responsavel">Responsavel:</label>
                <input type="text" name="responsavel" >
            </div>

            <div class="label-input">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" >
            </div>

            <div class="label-input">
                <label for="">Email:</label>
                <input type="emaill" name="email" >
            </div>

            <button>Cadastrar</button>

        </form>



    </div>

</body>
</html>