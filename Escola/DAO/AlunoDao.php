<?php 

class AlunoDao {

private $conexao;

public function __construct(){

    $dsn = "mysql:host=localhost;dbname=crud_alunos";

    

    try {
        $this->conexao = new PDO($dsn, "root", "123456");
    }
    catch (PDOException $e) {
        throw new PDOException($e);
    }
}


public function insert(AlunoModel $aluno) {
    
    $sql = "INSERT INTO alunos (nome, data_nascimento,responsavel,telefone,email) VALUES (?,?,?,?,?)";
    var_dump($this->conexao);
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(1, $aluno->nome);
    $stmt->bindValue(2, $aluno->data_nascimento);
    $stmt->bindValue(3, $aluno->responsavel);
    $stmt->bindValue(4, $aluno->telefone);
    $stmt->bindValue(5, $aluno->email);

    $stmt->execute();

}

public function update(){

}

public function select() {

}

}


?>