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

    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(1, $aluno->nome);
    $stmt->bindValue(2, $aluno->data_nascimento);
    $stmt->bindValue(3, $aluno->responsavel);
    $stmt->bindValue(4, $aluno->telefone);
    $stmt->bindValue(5, $aluno->email);

    $stmt->execute();

}

public function update(){

    $sql = "UPDATE alunos SET nome=?, data_nascimento=?,responsavel=?,telefone=?,email=? WHERE id=? ;";

    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(1, $aluno->nome);
    $stmt->bindValue(2, $aluno->data_nascimento);
    $stmt->bindValue(3, $aluno->responsavel);
    $stmt->bindValue(4, $aluno->telefone);
    $stmt->bindValue(5, $aluno->email);
    $stmt->bindValue(6, $aluno->id);

    $stmt->execute();
    

}

public function select() {
    
    $sql = "SELECT * FROM alunos;";

    $stmt = $this->conexao->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);

}

public function delete(int $id) {

    $sql = "DELETE FROM alunos WHERE id=? ;";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(1, $aluno->id);

    $stmt->execute();

}

}


?>