<?php 

class AlunoController {

    public static function index() {
        
        include('View/Modules/Aluno/AlunoListagem.php');
    }

    public static function form() {
        
        include('View/Modules/Aluno/AlunoForm.php');

    }
}

?>