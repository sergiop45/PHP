<?php  

class AlunoModel {

    public $id, $nome, $data_nascimento, $responsavel, $telefone, $email;

    public function save() {
        include('DAO/AlunoDao.php');

        $dao = new AlunoDao();

        $dao->insert($this);
    }

}

?>