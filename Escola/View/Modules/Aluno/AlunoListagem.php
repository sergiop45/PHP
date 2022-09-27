<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>
</head>
<body>

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Responsavel</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>

        <?php 
            foreach ($model->rows as $item) {
        ?>

        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->nome ?></td>
            <td><?= $item->data_nascimento ?></td>
            <td><?= $item->responsavel ?></td>
            <td><?= $item->telefone ?></td>
            <td><?= $item->email ?></td>
            <td><a href="app/aluno/delete">Delete</a></td>
            <td><a href="/app/cadastro?id=<?= $item->id ?>">Editar</a></td>
        </tr>

        <?php 
            }
        ?>
    </table>
    
</body>
</html>

<?php 



?>