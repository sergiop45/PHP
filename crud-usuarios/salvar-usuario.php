<?php 

    switch( $_REQUEST['acao']) {

        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nasc = $_POST['datanasc'];
            
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc)
             VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}');";
            

            $res = $conn -> query($sql);

            if($res == true) {
                print "<script>alert('Usuario Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; 
            } else {
                print "<script>alert('Erro ao cadastrar usuario!');</script>";
                print "<script>location.href='?page=novo';</script>";
            }

        break;    

    }

?>