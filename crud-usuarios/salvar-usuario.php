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

        case 'editar':
            $id_usuario = $_REQUEST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nasc = $_POST['datanasc'];

            
            $sql = "UPDATE usuarios SET nome = '".$nome."', email = '".$email."', senha = '".$senha."', data_nasc = '".$data_nasc."' WHERE id = '".$id_usuario."' ;";
            

            $res = $conn -> query($sql);

            if($res == true) {
                print "<script>alert('Usuario Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; 
            } else {
                print "<script>alert('Erro ao Editar usuario!');</script>";
                print "<script>location.href='?page=novo';</script>";
            }
            

        break;  
        
        

    }

?>