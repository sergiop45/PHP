<?php  

class AlunoModel {

    public $id, $nome, $data_nascimento, $responsavel, $telefone, $email;

    public function save() {
        include('DAO/AlunoDao.php');

        $dao = new AlunoDao();

        $dao->insert($this);
    }

    public function getAllRows() {
        
        include 'DAO/AlunoDao.php';

        $dao = new AlunoDao();

        $this->rows = $dao->select();

    }

    public function delete() {

        include 'DAO/AlunoDao.php';

        $dao = new AlunoDao();
        $dao->delete($this);

    }

}

?>