<?php 

class AlunoController {

    public static function index() {
        include('Model/AlunoModel.php');

        $model = new AlunoModel();
        $model->getAllRows();
        
        include('View/Modules/Aluno/AlunoListagem.php');
    }

    public static function form() {
        
        include('View/Modules/Aluno/AlunoForm.php');

    }

    public static function save() {
        
        include 'Model/AlunoModel.php';

        $model = new AlunoModel();

        $model->nome = $_POST['nome'];
        $model->data_nascimento = $_POST['data_nascimento'];
        $model->responsavel = $_POST['responsavel'];
        $model->telefone = $_POST['telefone'];
        $model->email = $_POST['email'];

        $model->save();

        header("Location: /app/listagem");

    }

    public static function delete() {
        
        include 'Model/AlunoModel.php';

        $model = new AlunoModel();

        $model->id = $_POST['id'];
        $model->delete();

    }

    
}

?>