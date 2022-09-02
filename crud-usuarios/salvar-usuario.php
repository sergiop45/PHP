<?php 

    switch( $_REQUEST['acao']) {

        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nasc = $_POST['datanasc'];
            
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc)
             VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}');";
             echo $sql;

            $res = $conn -> query($sql);
        break;    

    }

?>